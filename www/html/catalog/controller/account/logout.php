<?php
class ControllerAccountLogout extends Controller {
	public function index() {
		$this->document->addStyle('catalog/view/theme/f1/css/341.c112c1fe4de4f2f027c4.css');
		$this->document->addStyle('catalog/view/theme/f1/css/message.01441844d741a3e3f4ec.css');

		$this->document->addScript('catalog/view/theme/f1/js/341.50da31cc4fe2fd66ced6.js');
		$this->document->addScript('catalog/view/theme/f1/js/message.36c7b25a94749cc3116d.js');

		if ($this->customer->isLogged()) {
			$this->customer->logout();

			unset($this->session->data['shipping_address']);
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_address']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);

			$this->response->redirect($this->url->link('account/logout', '', true));
		}

		$this->load->language('account/logout');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_logout'),
			'href' => $this->url->link('account/logout', '', true)
		);

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}
