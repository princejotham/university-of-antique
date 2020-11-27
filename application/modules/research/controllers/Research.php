<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends MY_Controller {

	public function index() {
		$data['page_title'] = "Research List";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function create() {
		$data['page_title'] = "Submit Research Proposal";
		$data['content_view'] = "research/create";

		$this->template->index($data);
	}
}