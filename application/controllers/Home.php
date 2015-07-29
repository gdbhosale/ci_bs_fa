<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public $data; // Default data object to be given to views
	public $base_url; // Base URL from Browser
	public $base_path; // Base Path of Linux / Windows
	public $isLogin; // Wheather User Logged in ?
	public $luser; // Login User Info
	
	public function __construct() {
		parent::__construct();
		
		// Give here name of current controller
		$this->data = array();
		$this->data['site_name'] = $this->config->item("site_name");
		$this->data['base_url'] = $this->base_url = $this->config->item("base_url");
		$this->data['base_path'] = $this->base_path = $this->config->item("base_path");
		
		$this->data['section'] = "home";
		
		$this->checkLogin();
	}
	
	public function index() {
		// In case of any error just add line below
		// $this->data['showErr'] = array("heading" => "Error Title", "message" => "Error Description");
		
		$this->data['vcontent'] = __FUNCTION__;
		$this->load->view('template', $this->data);
	}
	
	function checkLogin() {
		$this->data['session_data'] = $this->session->all_userdata();
		if(isset($this->data['user_data']['logged_in'])) {
			$this->data['isLogin'] = $this->isLogin = true;
			//TODO: Get User from Database
			$this->data['luser'] = $this->luser = null;
		} else {
			$this->data['isLogin'] = $this->isLogin = false;
		}
	}
}
