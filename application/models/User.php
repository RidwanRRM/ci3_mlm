<?php
class User extends CI_Model
{

	function cekuser($username)
	{
		$this->db->select('username, password');
		$this->db->from('m_login');
		$this->db->where('username', $username);
		$this->db->where('status', 'Active');
		$this->db->limit(1);
		$cquery = $this->db->get();
		if ($cquery->num_rows() == 1) {
			return $cquery->result();
		} else {
			return false;
		}
	}

	function login($username, $password)
	{
		// $this -> db -> select('m_login.perner, username, password, nama, level, layanan, m_login.area, personalarea, jenis_login, mapping_area.area as barea ');
		$this->db->select('*');
		$this->db->from('m_login');
		// $this->db->join('mapping_area', 'm_login.perner=mapping_area.perner', 'left');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$this->db->where('status', 'Active');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}


	function inslogin($item)
	{
		$this->db->insert('m_login', $item);
	}

	function view_profile($username)
	{
		$data = array();
		$this->db->select('nama,level');
		$this->db->from('m_login');
		$this->db->where('username', $username);
		//$this -> db -> where('status', 'Active');
		$this->db->limit(1);
		$zquery = $this->db->get();
		if ($zquery->num_rows() == 1) {
			return $zquery->result();
		} else {
			return false;
		}
	}

	function change_pass()
	{
	}

	function upd_login($item, $data)
	{
		$this->db->where('username', $item);
		$q = $this->db->update('m_login', $data);
	}
}
