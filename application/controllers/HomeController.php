<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();

		$this->checkSession();
	}

	function checkSession() {

		// if($this->uri->segment(1)!='login'){
		// 	if ($this->session->userdata('user_id')=='') {
		// 		header('Location: '.base_url("login"));
		// 	}
		// } else {
		// 	if($this->session->userdata('user_id')!=''){
		// 		header('Location: '.base_url("home"));
		// 	}
		// }
	}

	public function index()
	{
		$this->load->view('pages/index');

	}

	public function map()
	{
		$this->load->view('pages/map');

	}


	public function logout() {
		$this->session->sess_destroy();
		header('Location: '.base_url());
	}

	



}
