<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends MY_Controller {

	public function index() {
		$data['page_title'] = "Research List";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function create_research_proposal() {
		$data['page_title'] = "Submit Research Proposal";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function in_house() {
		$data['page_title'] = "Endorse Research for In-house Review";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function approve_research_proposal() {
		$data['page_title'] = "Approve Reseach Proposal";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function coordinators_list() {
		$data['page_title'] = "List of Coordinators";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function activities() {
		$data['page_title'] = "Activities";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function process_flow() {
		$data['page_title'] = "Process Flow";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function report() {
		$data['page_title'] = "Report";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}
}