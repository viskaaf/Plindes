<?php

/**
* 
*/
class DesaC extends CI_Controller{
	
	function __construct()
	{
		parent:: __construct();
		
			$this->load->Model('DesaM');
			$this->model = $this->DesaM;
			$this->load->helper('url');

		}

		var $data= array();

		public function index(){
			$data['body']= $this->load->view('desaV', $this->data, true);
			$this->load->view('templateV', $data);
		}

		public function desa()
		{
			$data['body']= $this->load->view('form_desaV', $this->data, true);
			$this->load->view('templateV', $data);
		}

		public function keluhan()
		{
		
			$data['body']= $this->load->view('form_gangguanV', $this->data, true);
			$this->load->view('templateV', $data);
		}
	
}
?>