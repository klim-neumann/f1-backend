<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->addStyle('catalog/view/theme/f1/css/341.c112c1fe4de4f2f027c4.css');
		$this->document->addStyle('catalog/view/theme/f1/css/536.2854d61e9b391a86a003.css');
		$this->document->addStyle('catalog/view/theme/f1/css/home.6bff6e55105e937cbbff.css');

		$this->document->addScript('catalog/view/theme/f1/js/341.50da31cc4fe2fd66ced6.js');
		$this->document->addScript('catalog/view/theme/f1/js/home.d2141bc5f3a3d09d7a9c.js');

		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


		$setting['limit'] = 6;
		$setting['width'] = 700;
		$setting['height'] = 700;

		$data['latest'] = $this->load->controller('extension/module/latest', $setting);
		$data['bestseller'] = $this->load->controller('extension/module/bestseller', $setting);

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
