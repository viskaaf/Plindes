<?php

/**
* 
*/
class KeluhanC extends CI_Controller{
	
	function __construct()
	{
		parent:: __construct();
		
			$this->load->Model('KeluhanM');
			$this->model = $this->KeluhanM;
			$this->load->helper('url');

		}

	}
?>