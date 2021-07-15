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

		$data['title']='Dashboard Monitoring Administrasi Guru';
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
			}elseif($method=="save"){
				$dm=[];
				$dm['nik']=$this->input->post('nik');
				$dm['name']=$this->input->post('name');
				$dm['gender']=$this->input->post('gender');
				$dm['bd_place']=$this->input->post('bd_place');
				$dm['bd_date']=$this->input->post('bd_date');
				$dm['education']=$this->input->post('education');
				$dm['degree']=$this->input->post('degree');

				$dm['university']=$this->input->post('university');
				$dm['faculty']=$this->input->post('faculty');
				$dm['study']=$this->input->post('study');
				$dm['marital_status']=$this->input->post('marital_status');
				$dm['phone']=$this->input->post('phone');
				$dm['position']=$this->input->post('position');
				$dm['status_pendidik']=$sp=$this->input->post('status_pendidik');
				$dm['status_pns']=$this->input->post('status_pns');

				$dm['address']=$this->input->post('address');
				$dm['image']=$this->file_upload('./asset/user/','image');
				
				$du=[];
				$du['nik']=$this->input->post('nik');
				$du['email']=$this->input->post('email');
				$du['username']=$this->input->post('name');
				$du['password']="smkcjt2021";
				if($sp=="1"){
					$du['type']="guru";
				}else{
					$du['type']="staff";
				}
				$du['status']="1";

				$insert=$this->M_guru->AddData('employess',$dm);
				if($insert){
					$this->M_guru->AddData('users',$du);

					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Data ditambahkan');  
					$this->session->set_flashdata('text','data berhasil disimpan'); 
					redirect(site_url('kepsek/employee'));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Data gagal ditambahkan'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menambah data'); 
	
					redirect(site_url('kepsek/employee'));
				}
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
				$data['Class']=$this->M_guru->GetDataClass();

				$data['title']='Data Murid';
				$data['content']='kepsek/students';
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="save"){
				$ds=[];
				$ds['nis']=$this->input->post('nis');
				$ds['name']=$this->input->post('name');
				$ds['gender']=$this->input->post('gender');
				$ds['class_room_id']=$this->input->post('class');
				$ds['bd_place']=$this->input->post('bd_place');
				$ds['bd_date']=$this->input->post('bd_date');
				$ds['major']=$this->input->post('major');
				$ds['address']=$this->input->post('address');
				$ds['image']=$this->file_upload('./asset/student/','image');
				$insert=$this->M_guru->AddData('students',$ds);
				if($insert){
					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Data ditambahkan');  
					$this->session->set_flashdata('text','data berhasil disimpan'); 
					redirect(site_url('kepsek/students?tab=tab'.$ds['class_room_id']));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Data gagal ditambahkan'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menambah data'); 
	
					redirect(site_url('kepsek/students?tab=tab'.$ds['class_room_id']));
				}
			}elseif($method=="detail"){
				$GetDetailSiswa=$this->M_guru->GetDetailSiswa($id);
				$data['GetDetailSiswa']=$GetDetailSiswa;
				
				$data['title']='Detail Siswa';
				$data['content']='kepsek/student_detail';
				$this->load->view('kepsek/templates',$data);
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
				$data['Employee']= $this->M_guru->GetEmployee();

				$data['title']='Data User';
				$data['content']='kepsek/users';
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="save"){
				$du=[];
				$du['nik']=$this->input->post('nik');
				$du['email']=$this->input->post('email');
				$du['username']=$this->input->post('username');
				$du['password']=$this->input->post('password');
				$du['type']=$this->input->post('type');
				$du['status']=$this->input->post('status');
				$check=count($this->M_guru->GetDataUser($du['nik']));
				if($check>0){
					$this->session->set_flashdata('status','error');
					$this->session->set_flashdata('message','Data gagal ditambahkan');  
					$this->session->set_flashdata('text','data telah ada sebelumnya '); 
					redirect(site_url('kepsek/users'));
					die;
				}
				
				$insert=$this->M_guru->AddData('users',$du);
				if($insert){

					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Data ditambahkan');  
					$this->session->set_flashdata('text','data berhasil disimpan'); 
					redirect(site_url('kepsek/users'));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Data gagal ditambahkan'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menambah data'); 
	
					redirect(site_url('kepsek/users'));
				}
			}
		}else{redirect(site_url('web'));}
	}

	public function board($method="default",$id="")
	{
		if($this->session->userdata('Login'))
		{



			$this->load->model('M_guru');
			if($method=="default"){
				$data['Users']=$this->M_guru->GetDataUsersNeed();
				$data['Subject']=$this->M_guru->GetGuruMengajar();
				$data['Lessons']=$this->M_guru->GetDaftarPelajaran();
				$data['Class']=$this->M_guru->GetDataKelas();

				$data['title']='Data Mengajar';
				$data['content']='kepsek/mengajar';
				$data['CI']=&get_instance();
				$this->load->view('kepsek/templates',$data);
			}elseif($method=="save"){
				$du=[];
				$du['user_id']=$this->input->post('user_id');
				$du['lesson_id']=$this->input->post('lesson_id');
				$du['school_year_id']=$this->session->userdata('school_year_id');
			
				
				$insert=$this->M_guru->AddData('subject_teachers',$du);
				if($insert){

					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Data ditambahkan');  
					$this->session->set_flashdata('text','data berhasil disimpan'); 
					redirect(site_url('kepsek/board'));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Data gagal ditambahkan'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menambah data'); 
	
					redirect(site_url('kepsek/board'));
				}
			}elseif($method=="save_detail"){
				$dt=[];
				$dt['class_room_id']=$this->input->post('class_room_id');
				$dt['subject_teacher_id']=$this->input->post('subject_teacher_id');
				$dt['day']=$this->input->post('day');
				$dt['time_start']=$this->input->post('time_start');
				$dt['time_end']=$this->input->post('time_end');

				
				$insert=$this->M_guru->AddData('class_room_subject_teacher',$dt);
				if($insert){

					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Detail ditambahkan');  
					$this->session->set_flashdata('text','data berhasil disimpan'); 
					redirect(site_url('kepsek/board'));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Detail gagal ditambahkan'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menambah data'); 
	
					redirect(site_url('kepsek/board'));
				}
			}elseif($method=="remove_detail"){

				$delete=$this->M_guru->hapusData('class_room_subject_teacher','id',$id);
				if($delete){

					$this->session->set_flashdata('status','success');
					$this->session->set_flashdata('message','Detail dihapus');  
					$this->session->set_flashdata('text','data berhasil dihapus'); 
					redirect(site_url('kepsek/board'));
	
				}else{
					$this->session->set_flashdata('status','error'); 
					$this->session->set_flashdata('message','Detail gagal dihapus'); 
					$this->session->set_flashdata('text','terjadi kesalahan saat menghapus data'); 
	
					redirect(site_url('kepsek/board'));
				}
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

	public function file_upload($dir = NULL,$input_name){
		$config['upload_path'] = $dir;
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name'] = true;
		$config['remove_spaces'] = true;
		$config['file_ext_tolower'] = true;

		$this->load->library('upload', $config);
		if($this->upload->do_upload($input_name)){
			// $data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data(); 
			$file_name =   $upload_data['file_name'];
			return $file_name;
		}
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
