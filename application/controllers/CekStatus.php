<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CekStatus extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('CekStatus_model');
	}
	public function index()
	{
		$data['title'] = 'Cek Status';
		$data['page'] = 'Cek Status';
		$this->load->view('cek_status',$data);
	}
	public function formCekStatus(){
		$this->form_validation->set_rules('nim','nim','required|trim',['required' => 'NIM/NISN Harus Diisi']);
		
		$nim=$this->input->get('nim');
		
			$data['title'] = 'Status Anda';
			$data['page'] = 'Status Anda';
			$data['cekStatus']=$this->CekStatus_model->getStatus($nim);
			$this->load->view('table_status_page',$data);
		// 	
		
	}
	
	
}
