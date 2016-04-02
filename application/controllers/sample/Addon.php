<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addon extends CI_Controller {

	/**
	 * Index Page for sample Add-on Modules controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/sample/addon
	 *	- or -
	 * 		http://example.com/index.php/sample/addon/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->module('sample');
		$this->load->model('Test_model');
		$data['test_model_data'] = $this->Sample->Test_model->show_test();
		$this->load->view('sample_addon', $data);
	}
}
