<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TemplateC extends CI_Controller {

function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }

var $data= array();

	public function index()
	{
		
		$data['body']= $this->load->view('dashboardV', $this->data, true);
		$this->load->view('templateV', $data);
	}

	public function desa()
		{
			$data['body']= $this->load->view('desaV', $this->data, true);
			$this->load->view('templateV', $data);
		}

	public function formdesa()
	{
		
		 $data['body']= $this->load->view('form_desaV', $this->data, true);
		$this->load->view('templateV', $data);
	}

	public function keluhan()
	{
		
		 $data['body']= $this->load->view('form_gangguanV', $this->data, true);
		$this->load->view('templateV', $data);
	}

	// public function dashboard()
	// {
		
	// 	 $data['body']= $this->load->view('dashboardV', $this->data, true);
	// 	$this->load->view('dashboardV', $data);
	// }

	// public function halaman_admin()
	// {
	// 	$data['body'] = $this->load->view('data_user_admin_v', $this->data, true);
	// 	$this->load->view('template_admin_v', $data);
	// }
}
 