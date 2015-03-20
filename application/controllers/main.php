<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		date_default_timezone_set("America/Los_Angeles");
		$this->load->view('index',array("timenow" => strftime("%X %Z"), "datenow" => strftime("%B %d %Y")));

	}
}

//end of main controller