<?php
class MLogin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GoLogin($email, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->or_where('users.nik =', $email);
		$this->db->where('password', $password);

		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$row = $query->row();
			$this->session->set_userdata('nik', $row->nik);
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('type', $row->type);
			$this->session->set_userdata('id_user', $row->id);

			$empl = $this->db->get_where('employess', array('nik' => $row->nik))->row();
			if ($empl) {
				$this->session->set_userdata('position', $empl->position);
			} else {
				$this->session->set_userdata('position', $row->email);
			}

			$this->db->select('*');
			$this->db->from('school_year');
			$this->db->where('status', 1);
			$sql = $this->db->get();
			$ta = $sql->row();


			$this->session->set_userdata('school_year_id', $ta->id);
			$this->session->set_userdata('school_year_nama', $ta->first);

			return $row->nik;
		} else {
			return false;
		}
	}
}
