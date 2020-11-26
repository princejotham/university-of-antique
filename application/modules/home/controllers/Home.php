<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index() {
		$data['page_title'] = "Home";
		$data['content_view'] = "home/home";

		$this->template->index($data);
	}
}