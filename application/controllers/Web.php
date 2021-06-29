<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MLogin');
	}

	public function index()
	{
		
		$this->load->view('Index');
	}
	public function login()
	{
		if($this->session->userdata('Login')){
			redirect(site_url('web'));

		}
		if (isset($_POST['btn_login'])){
				$email=$this->input->post('email');
				$password=$this->input->post('password');

				$notif = $this->MLogin->GoLogin($email,$password);
				if($notif){
					$this->session->set_userdata('Login','OnLogin');
					if($this->session->userdata('type')=='guru')
					{
						redirect(site_url('guru'));
					}
					else
					{
						redirect(site_url('kepsek'));
					}
						redirect(site_url('guru'));
				}			
				else{
					$this->session->sess_destroy();
					$this->session->unset_userdata('Login');
					redirect(site_url('web/login'));
				}
			}

		$this->load->view('VLogin');
	}

}