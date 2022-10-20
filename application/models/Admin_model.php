<?php
class Admin_model extends CI_model
{
    public function getUsers()
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level !=', 0);
        $this->db->order_by('level', 'ASC');
        // $this->db->group_by('level');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getParentUsersLv2($data)
    {
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 2);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getParentUsersLv3($data)
    {
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 3);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUsersByID($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('id_users', $data);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getUsersMember()
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('a.id_users,a.username,a.bonus,a.member_id,a.nama,a.level,b.nama as parent_name,b.level as parent_level');
        $this->db->from('m_login a');
        $this->db->join('m_login b', 'a.parent=b.id_users');
        // $this->db->where('a.level !=', 0);
        $this->db->order_by('a.level', 'ASC');
        // $this->db->group_by('level');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUsersMemberMLM()
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('a.id_users,a.username,b.parent,a.member_id,a.nama,a.level,b.id_users as parent_id,b.nama as parent_name,b.level as parent_level');
        $this->db->from('m_login a');
        $this->db->join('m_login b', 'a.parent=b.id_users');
        // $this->db->where('a.level !=', 0);
        // $this->db->order_by('a.parent', 'ASC');
        // $this->db->group_by('b.parent');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUsersByParent($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('a.id_users,a.username,a.bonus,a.member_id,a.parent,a.nama,a.level,b.nama as parent_name,b.level as parent_level');
        $this->db->from('m_login a');
        $this->db->join('m_login b', 'a.parent=b.id_users');
        $this->db->where('a.parent', $data);
        $this->db->order_by('a.level', 'ASC');
        // $this->db->group_by('level');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getParentBonus($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUsersByParentMLM($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('a.id_users,a.username,a.member_id,a.nama,a.level,b.id_users as parent_id,b.nama as parent_name,b.level as parent_level');
        $this->db->from('m_login a');
        $this->db->join('m_login b', 'a.parent=b.id_users');
        $this->db->where('a.parent', $data);
        $this->db->order_by('a.level', 'ASC');
        $this->db->group_by('a.parent');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getParentAll()
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        // $this->db->where('level !=', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getParent($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('parent', $data);
        // $this->db->order_by('level', 'ASC');
        // $this->db->group_by('level');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUbahUsers($kode)
    {
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('id_users', $kode);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getLoginGroup()
    {
        $this->db->distinct();
        $this->db->select('level');
        $this->db->from('m_login');
        $this->db->order_by('level', 'DESC');
        $this->db->group_by('level');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPassword($kode)
    {
        $this->db->select('password');
        $this->db->from('m_login');
        $this->db->where('id_users', $kode);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahDataUsers($item)
    {
        $this->db->insert('m_login', $item);
    }
    public function ubahDataUsers($kode, $data)
    {
        $this->db->where('id_users', $kode);
        $this->db->update('m_login', $data);
    }
    public function ubahPasswordByUser($kode, $data)
    {
        $this->db->where('username', $kode);
        $this->db->update('m_login', $data);
    }
    function view_profile($username)
    {
        $data = array();
        $this->db->select('nama,level');
        $this->db->from('m_login');
        $this->db->where('username', $username);
        $this->db->limit(1);
        $zquery = $this->db->get();
        if ($zquery->num_rows() == 1) {
            return $zquery->result();
        } else {
            return false;
        }
    }
    public function HapusDataUsers()
    {
        $this->db->where('id_users', $_POST['id_users']);
        $this->db->delete('m_login');
    }
    public function treeAdmin()
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 0);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function treeLv1($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 1);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function treeLv2($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 2);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function treeLv3($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 3);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function treeLv4($data)
    {
        // return $this->db->get('m_login')->result_array();
        $this->db->select('*');
        $this->db->from('m_login');
        $this->db->where('level', 4);
        $this->db->where('parent', $data);
        $query = $this->db->get();
        return $query->result_array();
    }
}
