<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
		
		if(!empty($this->session->set_userdata('check_capacity')) && $this->session->set_userdata('check_capacity')!="true"){
			$this->load->model('M_guru');
			$dakel=$this->M_guru->GetDataKelas();
			foreach($dakel as $dk){
				$count=$this->M_guru->CountSiswaKelas($dk->id);
				$du=[];
				$du['capacity']=$count;
				$update=$this->M_guru->UpdateData('class_rooms','id',$dk->id,$du);
			}
			$this->session->set_userdata('check_capacity','true');
		}
		
    }

	public function index(){
		$this->load->model('M_guru');

		$GetDetailEmpl=$this->M_guru->GetDetailEmpl($this->session->userdata('nik'));
		$data['GetDetailEmpl']=$GetDetailEmpl;
		$GetDataMengajar= $this->M_guru->GetDataMengajar($GetDetailEmpl['id']);
		$data['GetDataMengajar']= $GetDataMengajar;
		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
		$data['GetDataUser']= $GetDataUser;
		$data['title']='Dashboard Guru';
		$data['CI']=&get_instance();

		$data['content']='guru/index';
		$this->load->view('guru/templates',$data);
	}
	public function rekap()
	{
		if($this->session->userdata('Login'))
		{

		
	
		$this->load->model('M_guru');

		$GetDataDoc= $this->M_guru->GetDataDoc($this->session->userdata('nik'),$this->session->userdata('school_year_id'));
        $data['GetDataDoc']= $GetDataDoc;
		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
		$data['GetDataUser']= $GetDataUser;
		$GetDataMengajarTerbaru= $this->M_guru->GetDataMengajarTerbaru();
		$data['GetDataMengajarTerbaru']= $GetDataMengajarTerbaru;

		$data['title']='Upload Administrasi Guru';
		$data['content']='guru/rekap';
		$this->load->view('guru/templates',$data);
		}
		else
		{redirect(site_url('web'));}
	}

	public function upload_dokumen()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataDoc= $this->M_guru->GetDataDoc($this->session->userdata('nik'),$this->session->userdata('school_year_id'));
        $data['GetDataDoc']= $GetDataDoc;

        $GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

		$data['title']='Monitoring Guru';
		$data['content']='guru/upload_dokumen';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}

	

	public function SimpanDokumen()
	{
		if($this->session->userdata('Login'))
		{

			$this->load->model('M_guru');



		     $add['kd_doc']='';
         	 $add['nik']= $this->session->userdata('nik');
         	 $add['upload_doc']= $this->file_upload('./asset/dok/');
         	 $add['kd_jenis_doc']= $this->input->post('kd_jenis_doc');
         	 $add['st_doc']='0';
         	 $add['note_doc']="";  
         	 $add['waktu_doc']=date('Y-m-d H:i:s');
         	 $add['school_year_id']=$this->session->userdata('school_year_id');
        	 $this->M_guru->AddData('adm_doc',$add);

		     redirect(site_url('Guru/upload_dokumen'));


		}
		else
		{redirect(site_url('web'));}     
	}

	public function UpdateDokumen()
	{
		if($this->session->userdata('Login'))
		{

			$this->load->model('M_guru');



		     $kd_doc=$this->input->post('kd_doc2');
         	 $update['nik']= $this->session->userdata('nik');
         	 $update['upload_doc']= $this->file_upload2('./asset/dok/');
         	 $update['kd_jenis_doc']= $this->input->post('kd_jenis_doc2');
         	 $update['st_doc']='22';
         	 $update['waktu_doc']=date('Y-m-d H:i:s');
         	 $update['school_year_id']=$this->session->userdata('school_year_id');
        	 $this->M_guru->UpdateData('adm_doc','kd_doc',$kd_doc,$update);

		     redirect(site_url('Guru/upload_dokumen'));


		}
		else
		{redirect(site_url('web'));}     
	}

	public function file_upload($dir = NULL){
		$config['upload_path'] = $dir;
		$config['allowed_types'] = 'doc|xls|docx|xlsx|zip|rar';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('upload_doc')){
			// $data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data(); 
			$file_name =   $upload_data['file_name'];
			return $file_name;
		}else{
			redirect(site_url('Guru/upload_dokumen?error=file'));
		}
	}
	public function file_upload2($dir = NULL){
		$config['upload_path'] = $dir;
		$config['allowed_types'] = 'doc|xls|docx|xlsx|zip|rar';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('upload_doc2')){
			// $data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data(); 
			$file_name =   $upload_data['file_name'];
			return $file_name;
		}else{
			redirect(site_url('Guru/upload_dokumen?error=file'));
		}
	}
	
	
	
	public function daftar_pelajaran()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

		$GetMengajar= $this->M_guru->GetMengajar($this->session->userdata('id_user'),$this->session->userdata('school_year_id'));
        $data['GetMengajar']= $GetMengajar;

        
		$data['title']='Daftar Absensi Kelas';
		$data['content']='guru/daftar_pelajaran';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}

	public function daftar_pelajaran2()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

		$GetMengajar= $this->M_guru->GetMengajar($this->session->userdata('id_user'),$this->session->userdata('school_year_id'));
        $data['GetMengajar']= $GetMengajar;

        
		$data['title']='Lihat Absensi Kelas';
		$data['content']='guru/daftar_pelajaran2';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}


	public function daftar_kelas()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

		$GetDaftarKelas= $this->M_guru->GetDaftarKelas($this->uri->segment(3));
        $data['GetDaftarKelas']= $GetDaftarKelas;

        
		$data['title']='Daftar Kelas yang Diajarkan';
		$data['content']='guru/daftar_kelas';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}

	public function daftar_kelas2()
	{
		$this->session->set_userdata('mapel',$this->input->get('mapel'));
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

		$GetDaftarKelas= $this->M_guru->GetDaftarKelas($this->uri->segment(3));
        $data['GetDaftarKelas']= $GetDaftarKelas;

        
		$data['title']='Daftar Kelas yang Diajarkan';
		$data['content']='guru/daftar_kelas2';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}


	public function daftar_siswa()
	{
		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

        $GetCekPertemuan= $this->M_guru->GetCekPertemuan($this->uri->segment(3),$this->uri->segment(4));
        $data['GetCekPertemuan']= $GetCekPertemuan;

		$GetDaftarSiswa= $this->M_guru->GetDaftarSiswa($this->uri->segment(4));
        $data['GetDaftarSiswa']= $GetDaftarSiswa;

        
		$data['title']='Daftar Absensi Siswa';
		$data['content']='guru/daftar_siswa';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}


	public function daftar_siswa2()
	{

		$this->session->set_userdata('kelas',$this->input->get('kelas'));

		if($this->session->userdata('Login'))
		{


		$this->load->model('M_guru');

		$GetDataUser= $this->M_guru->GetDataUser($this->session->userdata('nik'));
        $data['GetDataUser']= $GetDataUser;

        $GetCekPertemuan= $this->M_guru->GetCekPertemuan($this->uri->segment(3),$this->uri->segment(4));
        $data['GetCekPertemuan']= $GetCekPertemuan;

		$GetMonPertemuan= $this->M_guru->GetMonPertemuan($this->uri->segment(3),$this->uri->segment(4));
        $data['GetMonPertemuan']= $GetMonPertemuan;

        
	
		$data['title']='Daftar Monitoring Absensi Siswa | Kelas '.$this->session->userdata('kelas').'  |  Mata Pelajaran '.$this->session->userdata('mapel');
		$data['content']='guru/daftar_siswa2';
		$this->load->view('guru/templates',$data);


		}
		else
		{redirect(site_url('web'));}
	}


	public function SimpanAbsensi()
	{
		if($this->session->userdata('Login'))
		{

			$this->load->model('M_guru');

			$jumlah=$this->input->post('jumlah');

			for($i=1;$i<=$jumlah;$i++)
			{
		     $add['id']='';
         	 $add['user_id']= $this->session->userdata('nik');
         	 $add['subject_teacher_id']= $this->input->post('subject_teacher_id');
         	 $add['class_room_id']=  $this->input->post('class_room_id');
         	 $add['nis']= $this->input->post('nis'.$i);
         	 $add['attendence']= $this->input->post('attendence'.$i);
         	 $add['school_year_id']=$this->session->userdata('school_year_id');
         	 $add['pert']= $this->input->post('pert'); 
         	 $add['waktu']=date('Y-m-d H:i:s');
        	 $this->M_guru->AddData('attendence',$add);
        	}
		     redirect(site_url('Guru/daftar_pelajaran'));


		}
		else
		{redirect(site_url('web'));}     
	}
	
	
	
	

	public function Logout()
	{
		
		$this->session->sess_destroy();
		redirect(site_url('web'));
	}
}
