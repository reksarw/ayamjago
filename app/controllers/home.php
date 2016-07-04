<?php
defined('RUN') or exit;

class Home extends AJ_Controller {
	
	function __construct(){
		parent::__construct();
		$this->mines(array('url'));
	}
	
	function index(){
		$data['title'] = "Hello AyamJago";
		
		$this->view('default',$data);
	}
}