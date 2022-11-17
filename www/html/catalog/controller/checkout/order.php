<?php
class ControllerCheckoutOrder extends Controller {
	function index() {
		$this->document->addStyle('catalog/view/theme/f1/css/341.bd52d11f047dc59cc017.css');
		$this->document->addStyle('catalog/view/theme/f1/css/message.01441844d741a3e3f4ec.css');

		$this->document->addScript('catalog/view/theme/f1/js/341.50da31cc4fe2fd66ced6.js');
		$this->document->addScript('catalog/view/theme/f1/js/message.36c7b25a94749cc3116d.js');

		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');

		if (!$this->customer->isLogged()) {
			$data['heading_title'] = 'Вы не авторизированы';
			$data['text_message'] = 'Для совершения заказа вам нужно войти в свой аккаунт.';

			$this->response->setOutput($this->load->view('common/success', $data));
			return;
		}

		if (!$this->cart->hasProducts()) {
			$data['heading_title'] = 'Корзина пуста';
			$data['text_message'] = 'Для совершения заказа добавьте товар в корзину.';

			$this->response->setOutput($this->load->view('common/success', $data));
			return;
		}

		$this->load->model('checkout/order');
		$this->load->model('account/customer');

		$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
		$order_data['store_id'] = $this->config->get('config_store_id');
		$order_data['store_name'] = $this->config->get('config_name');

		if ($order_data['store_id']) {
			$order_data['store_url'] = $this->config->get('config_url');
		} else {
			if ($this->request->server['HTTPS']) {
				$order_data['store_url'] = HTTPS_SERVER;
			} else {
				$order_data['store_url'] = HTTP_SERVER;
			}
		}

		if ($this->customer->isLogged()) {
			$customer_info = $this->model_account_customer->getCustomer($this->customer->getId());

			$order_data['customer_id'] = $this->customer->getId();
			$order_data['customer_group_id'] = $customer_info['customer_group_id'];
			$order_data['firstname'] = $customer_info['firstname'];
			$order_data['lastname'] = $customer_info['lastname'];
			$order_data['email'] = $customer_info['email'];
			$order_data['telephone'] = $customer_info['telephone'];
			$order_data['custom_field'] = json_decode($customer_info['custom_field'], true);
		} elseif (isset($this->session->data['guest'])) {
			$order_data['customer_id'] = 0;
			$order_data['customer_group_id'] = $this->session->data['guest']['customer_group_id'];
			$order_data['firstname'] = $this->session->data['guest']['firstname'];
			$order_data['lastname'] = $this->session->data['guest']['lastname'];
			$order_data['email'] = $this->session->data['guest']['email'];
			$order_data['telephone'] = $this->session->data['guest']['telephone'];
			$order_data['custom_field'] = $this->session->data['guest']['custom_field'];
		}

		$order_data['affiliate_id'] = 0;
		$order_data['commission'] = 0;
		$order_data['marketing_id'] = 0;
		$order_data['tracking'] = '';

		$order_data['comment'] = '';

		$order_data['payment_firstname'] = '';
		$order_data['payment_lastname'] = '';
		$order_data['payment_company'] = '';
		$order_data['payment_address_1'] = '';
		$order_data['payment_address_2'] = '';
		$order_data['payment_city'] = '';
		$order_data['payment_postcode'] = '';
		$order_data['payment_zone'] = '';
		$order_data['payment_zone_id'] = 0;
		$order_data['payment_country'] = '';
		$order_data['payment_country_id'] = 0;
		$order_data['payment_address_format'] = '';
		$order_data['payment_custom_field'] = [];

		$order_data['payment_code'] = '';
		$order_data['payment_method'] = '';

		$order_data['shipping_firstname'] = '';
		$order_data['shipping_lastname'] = '';
		$order_data['shipping_company'] = '';
		$order_data['shipping_address_1'] = '';
		$order_data['shipping_address_2'] = '';
		$order_data['shipping_city'] = '';
		$order_data['shipping_postcode'] = '';
		$order_data['shipping_zone'] = '';
		$order_data['shipping_zone_id'] = 0;
		$order_data['shipping_country'] = '';
		$order_data['shipping_country_id'] = 0;
		$order_data['shipping_address_format'] = '';
		$order_data['shipping_custom_field'] = [];

		$order_data['shipping_code'] = '';
		$order_data['shipping_method'] = '';

		$order_data['total'] = $this->cart->getSubTotal();

		$order_data['language_id'] = $this->config->get('config_language_id');
		$order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
		$order_data['currency_code'] = $this->session->data['currency'];
		$order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
		$order_data['ip'] = $this->request->server['REMOTE_ADDR'];

		if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
			$order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
		} else {
			$order_data['forwarded_ip'] = '';
		}

		if (isset($this->request->server['HTTP_USER_AGENT'])) {
			$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];
		} else {
			$order_data['user_agent'] = '';
		}

		if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {
			$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];
		} else {
			$order_data['accept_language'] = '';
		}

		$order_data['products'] = array();

		foreach ($this->cart->getProducts() as $product) {
			$option_data = array();

			foreach ($product['option'] as $option) {
				if ($option['quantity'] == 0) {
					$data['heading_title'] = 'Товара "' . $option['name'] . '" нет в наличии';
					$data['text_message'] = 'Попробуйте позже.';

					$this->response->setOutput($this->load->view('common/success', $data));
					return;
				}

				$option_data[] = array(
					'product_option_id'       => $option['product_option_id'],
					'product_option_value_id' => $option['product_option_value_id'],
					'option_id'               => $option['option_id'],
					'option_value_id'         => $option['option_value_id'],
					'name'                    => $option['name'],
					'value'                   => $option['value'],
					'type'                    => $option['type']
				);
			}

			if ($product['special']) {
				$price = $product['special'];
			} else {
				$price = $product['price'];
			}

			$order_data['products'][] = array(
				'product_id' => $product['product_id'],
				'name'       => $product['name'],
				'model'      => $product['model'],
				'option'     => $option_data,
				'download'   => $product['download'],
				'quantity'   => $product['quantity'],
				'subtract'   => $product['subtract'],
				'price'      => $price,
				'total'      => $price,
				'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),
				'reward'     => $product['reward']
			);
		}

		$this->model_checkout_order->addOrder($order_data);
		$this->cart->clear();

		$data['heading_title'] = 'Ваш заказ в обработке';
		$data['text_message'] = 'С вами свяжутся в ближайшее время.';

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}
