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
		$data['title'] = 'Permohonan';
		$data['page'] = 'Permohonan';
		$this->load->view('permohonan',$data);
	}

	public function formPermohonan(){
	
		$nama =$this->input->post('nama');
		$nomor = $this->input->post('nomor');
		$jenisKelamin = $this->input->post('jenisKelamin');        
		$pekerjaan = $this->input->post('pekerjaan');        
		$programStudi = $this->input->post('programStudi');        
		$fakultas =$this->input->post('fakultas');
		$jurusan=$this->input->post('jurusanStudi');
		if($pekerjaan=='siswa'){
			$pekerjaan=1;
			$fakultas='-';
			$jurusan='-';
		}else{
			$pekerjaan=0;
		}
		$sekolah = $this->input->post('sekolah');
		// $tanggalMulai =$this->input->post('tanggalMulai');
		// $tanggalBerakhir =$this->input->post('tanggalSelesai');    
		$dayStart = $this->input->post('dayStart') ;
        $monthStart= $this->input->post('monthStart');
        $yearStart = $this->input->post('yearStart');
        $dayEnd = $this->input->post('dayEnd');
        $monthEnd = $this->input->post('monthEnd');
        $yearEnd = $this->input->post('yearEnd');        
        switch($monthStart){
            case 'Januari':
                $monthStart=1;
                break;
            case 'Februari':
                $monthStart=2;
                break;
            case 'Maret':
                $monthStart=3;
                break;
            case 'April':
                $monthStart=4;
                break;
            case 'Mei':
                $monthStart=5;
                break;
            case 'Juni':
                $monthStart=6;
                break;
            case 'Juli':
                $monthStart=7;
                break;
            case 'Agustus':
                $monthStart=8;
                break;
            case 'September':
                $monthStart=9;
                break;
            case 'Oktober':
                $monthStart=10;
                break;
            case 'November':
                $monthStart=11;
                break;
            case 'Desember':
                $monthStart=12;
                break;
        }
        switch($monthEnd){
            case 'Januari':
                $monthEnd=1;
                break;
            case 'Februari':
                $monthEnd=2;
                break;
            case 'Maret':
                $monthEnd=3;
                break;
            case 'April':
                $monthEnd=4;
                break;
            case 'Mei':
                $monthEnd=5;
                break;
            case 'Juni':
                $monthEnd=6;
                break;
            case 'Juli':
                $monthEnd=7;
                break;
            case 'Agustus':
                $monthEnd=8;
                break;
            case 'September':
                $monthEnd=9;
                break;
            case 'Oktober':
                $monthEnd=10;
                break;
            case 'November':
                $monthEnd=11;
                break;
            case 'Desember':
                $monthEnd=12;
                break;
        }
        if($yearStart > $yearEnd){
            $this->session->set_flashdata('massage','<div class="alert alert-danger text-capitalize" role="alert">tahun mulai magang tidak boleh lebih besar</div>');
            redirect('Permohonan');
            return;
        }else if($yearStart = $yearEnd){
            if($monthStart > $monthEnd){
                $this->session->set_flashdata('massage','<div class="alert alert-danger text-capitalize" role="alert">bulan mulai magang tidak boleh lebih besar</div>');
                redirect('Permohonan');
                return;
            }else if($dayStart > $dayEnd && $monthStart == $monthEnd){
				$this->session->set_flashdata('massage','<div class="alert alert-danger text-capitalize" role="alert">hari mulai magang tidak boleh lebih besar</div>');
                redirect('Permohonan');
                return;
			}
        }
		$data = array();
		$index = 0;           
		
		foreach ((array)$nomor as $result) {
			array_push($data,array(
				'id'=>$result,
				'fullname'=>$nama[$index],
				'studyProgram'=>$programStudi,
				'department'=>$fakultas,
				'faculty' =>$jurusan,
				'institute'=>$sekolah,
				'gender'=>$jenisKelamin[$index],
				'status'=>'menunggu',
				'place'=>'',
				'guide'=>'',
				'id_kelompok'=>$nomor[0],
				'is_sekolah'=>$pekerjaan,
				'dayStar'=>$dayStart,
                'monthStart'=>$monthStart,
                'yearStart'=>$yearStart,
                'dayEnd'=>$dayEnd,
                'monthEnd'=>$monthEnd,
                'yearEnd'=>$yearEnd,
                'isCetak'=>0
				)
			);
			$index++;
		}
		$this->form_validation->set_rules('nomor[]','nomor[]','is_unique[internship.id]');
		if(!$this->form_validation->run()){
			$this->session->set_flashdata('massage','<div class="alert alert-danger text-capitalize" role="alert">NIM/NISN sudah pernah terdaftar</div>');
			redirect('Permohonan');
		}else{
			$result = $this->Permohonan_model->insertNewInternship($data); 
			$this->session->set_flashdata('alert','<div class="alert alert-success text-capitalize" role="alert">Pendaftaran berhasil</div>');
			redirect('Permohonan');
		
		}
		
		
	}
	
}