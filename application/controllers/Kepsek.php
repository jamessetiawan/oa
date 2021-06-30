<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {

	
	public function index()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataMon=$this->M_guru->GetDataMon($this->session->userdata('school_year_id'));
		$data['GetDataMon']=$GetDataMon;

		$GetTotalJenisDoc=$this->M_guru->GetTotalJenisDoc($this->session->userdata('school_year_id'));
		$data['GetTotalJenisDoc']=$GetTotalJenisDoc;

		$GetTotalGuru=$this->M_guru->GetTotalGuru();
		$data['GetTotalGuru']=$GetTotalGuru;

		$GetTotalAcc=$this->M_guru->GetTotalAcc($this->session->userdata('school_year_id'));
		$data['GetTotalAcc']=$GetTotalAcc;

		$GetTotalPerbaikan=$this->M_guru->GetTotalPerbaikan($this->session->userdata('school_year_id'));
		$data['GetTotalPerbaikan']=$GetTotalPerbaikan;

		$GetTotalBelum=$this->M_guru->GetTotalBelum($this->session->userdata('school_year_id'));
		$data['GetTotalBelum']=$GetTotalBelum;

		$data['title']='Monitoring Administrasi Guru';
		$data['content']='kepsek/monitoring';
		$this->load->view('kepsek/templates',$data);



		}
		else
		{redirect(site_url('web'));}
	}


	public function employee($method="default",$id="")
	{
		if($this->session->userdata('Login'))
		{



			$this->load->model('M_guru');
			if($method=="default"){
				$data['GetDataEmpl']=$this->M_guru->GetDataEmpl()->result();
				$data['GetDataEmpl_count']=$this->M_guru->GetDataEmpl()->num_rows();
				$data['GetDataEmpla1']=$this->M_guru->GetDataEmpl_a(1)->num_rows();
				$data['GetDataEmpla2']=$this->M_guru->GetDataEmpl_a(2)->num_rows();
				$data['GetDataEmplb1']=$this->M_guru->GetDataEmpl_b(1)->num_rows();
				$data['GetDataEmplb2']=$this->M_guru->GetDataEmpl_b(2)->num_rows();

				$data['title']='Data Karyawan';
				$data['content']='kepsek/employee';
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="detail"){

				$GetDetailEmpl=$this->M_guru->GetDetailEmpl($id);
				$data['GetDetailEmpl']=$GetDetailEmpl;
				$GetDataMengajar= $this->M_guru->GetDataMengajar($GetDetailEmpl['id']);
        		$data['GetDataMengajar']= $GetDataMengajar;
				$data['title']='Detail Karyawan';
				$data['content']='kepsek/employee_detail';
				$this->load->view('kepsek/templates',$data);
			}
		}else{redirect(site_url('web'));}
	}


	public function students($method="default",$id="")
	{
		if($this->session->userdata('Login'))
		{


			$this->load->model('M_guru');
			if($method=="default"){
				$data['StudentClass']=$this->M_guru->GetDataStudentClass();

				$data['Student']=$this->M_guru->GetDataStudents();

				$data['title']='Data Murid';
				$data['content']='kepsek/students';
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="save"){

			}
		}else{redirect(site_url('web'));}
	}

	public function users($method="default",$id="")
	{
		if($this->session->userdata('Login'))
		{



			$this->load->model('M_guru');
			if($method=="default"){
				$data['Users']=$this->M_guru->GetDataUsers();

				$data['title']='Data User';
				$data['content']='kepsek/users';
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="save"){

			}
		}else{redirect(site_url('web'));}
	}
	
	




	public function cekdata()
	{

		if($this->session->userdata('Login'))
		{



		$this->load->model('M_guru');

		$nik=$this->uri->segment(3);

		$GetDataDoc= $this->M_guru->GetDataDoc($nik,$this->session->userdata('school_year_id'));
        $data['GetDataDoc']= $GetDataDoc;

        $GetDataUser= $this->M_guru->GetDataUser($nik);
        $data['GetDataUser']= $GetDataUser;

		$data['title']='Cek Dokumen Administrasi Guru';
		$data['content']='kepsek/cekdata';
		$this->load->view('kepsek/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}


	public function SimpanPeriksa()
	{
			if($this->session->userdata('Login'))
		{



			 $this->load->model('M_guru');
			 $nik=$this->input->post('nik');
			 $kd_doc=$this->input->post('kd_doc');
		 	 $update['st_doc']= $this->input->post('st_doc');
         	 $update['note_doc']= $this->input->post('note_doc');
          	 $this->M_guru->UpdateData('adm_doc','kd_doc',$kd_doc,$update);
		     redirect(site_url('Kepsek/cekdata/'.$nik));


		}
		else
		{redirect(site_url('web'));}     
	}


	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		$this->session->unset_userdata('email');
		redirect(site_url('web'));
	}
}
