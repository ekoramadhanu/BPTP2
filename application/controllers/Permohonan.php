<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {

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
		$this->load->model("Permohonan_model");
	}
	public function index()
	{
		$this->load->view('permohonan');
	}

	public function formPermohonan(){
		// $this->form_validation->set_rules('fullname','fullname','required|trim',['required' => 'Nama Lengkap Harus Diisi']);
		// $this->form_validation->set_rules('institute','institusi','required|trim',['required' => 'Sekolah/Universitas Harus Diisi']);
		// $this->form_validation->set_rules('department','jurusan','required|trim',['required' => 'Jurusan/Program Studi Harus Diisi']);
		// $this->form_validation->set_rules('nisn','id','required|trim',['required' => 'NIM/NISN Harus Diisi']);
		// $this->form_validation->set_rules('kelompok','jumlah','required|trim',['required' => 'Jumlah Kelmpok Harus Diisi']);
		// $this->form_validation->set_rules('gender','gender','required|trim',['required' => 'Anda Belum Memilih Jenis Kelamin']);
		// if($this->form_validation->run()==false){
		// 	$this->load->view('permohonan');
		// } else{
			// $data=[
			// 	'id' =>$this->input->post('nomor'), 
			// 	'fullname' => htmlspecialchars($this->input->post('fullname')),
			// 	'studyProgram'=>htmlspecialchars($this->input->post('programStudi')),
			// 	'department '=>htmlspecialchars($this->input->post('programStudi')),
			// 	'institusi' => htmlspecialchars($this->input->post('institute')), 
			// 	'jurusan' => htmlspecialchars($this->input->post('fakultas')), 
			// 	'gender' => $this->input->post('jenisKelamin'), 
			// 	'status' => 'menunggu',
			// 	'place'=>htmlspecialchars($this->input->post('penempatanMagang')),
			// 	'guide'=>htmlspecialchars($this->input->post('pembimbingMagang')),
			// 	'id_kelompok'=> $this->input->post('nomor'), 
			// 	'is_sekolah'=>1,
			// 	'date_start'=>$this->input->post('tanggalMulai'),
			// 	'date_end' =>$this->input->post('tanggalSelesai')
			// ];
		
			// $this->db->insert('internship',$data); 
			// $this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Pendaftaran berhasil</div>');
			// redirect('Permohonan');
		// }
		$nama =$this->input->post('nama');
		$nomor = $this->input->post('nomor');
		$jenisKelamin = $this->input->post('jenisKelamin');        
		$pekerjaan = $this->input->post('pekerjaan');        
		$programStudi = $this->input->post('programStudi');        
		$fakultas =$this->input->post('fakultas');
		if($pekerjaan=='siswa'){
			$pekerjaan=1;
			$fakultas='-';
		}else{
			$pekerjaan=0;
		}
		$sekolah = $this->input->post('sekolah');
		$tanggalMulai =$this->input->post('tanggalMulai');
		$tanggalBerakhir =$this->input->post('tanggalSelesai');    
		$data = array();
		$index = 0;           
		
		foreach ((array)$nomor as $result) {
			array_push($data,array(
				'id'=>$result,
				'fullname'=>$nama[$index],
				'studyProgram'=>$programStudi,
				'department'=>$fakultas,
				'institute'=>$sekolah,
				'gender'=>$jenisKelamin[$index],
				'status'=>'Menunggu',
				'place'=>'',
				'guide'=>'',
				'id_kelompok'=>$nomor[0],
				'is_sekolah'=>$pekerjaan,
				'date_start'=>$tanggalMulai,
				'date_end'=>$tanggalBerakhir
				)
			);
			$index++;
		}
		$this->form_validation->set_rules('nomor[]','nomor[]','is_unique[internship.id]');
		if(!$this->form_validation->run()){
			$this->session->set_flashdata('massage','<div class="alert alert-danger" role="alert">NIM/NISN sudah pernah terdaftar</div>');
			redirect('Permohonan');
		}else{
			$result = $this->Permohonan_model->insertNewInternship($data); 
			$this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">Pendaftaran berhasil</div>');
			redirect('Permohonan');
		}
		
		
	}
	
}