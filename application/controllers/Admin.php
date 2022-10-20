<?php

defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'inflector', 'file'));
        $this->load->library('form_validation');
        $this->load->model(array('user', 'Admin_model'));
    }
    function generateRandomString($length = 8)
    {
        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function Users()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['nama']       = $session_data['nama'];
            $data['level']      = $session_data['level'];
            $data['status']     = $session_data['status'];
            $data['tahun']      = $session_data['tahun'];
            $data['id_users']      = $session_data['id_users'];
            $data['aktif']      = 'class="active treemenu"';
            $data['xaktif']     = 'class="active"';
            $data['title']      = "Master User";
            $data['menu']       = "users";
            // if ($data['level'] != 1) {
            //     echo "Access Blocked!";
            //     die;
            // }
            // print_r($this->session->userdata);

            $data['users'] = $this->Admin_model->getUsers();

            $this->load->view('pages/header', $data);
            $this->load->view('pages/navigation', $data);
            $this->load->view('admin/users/index', $data);
            $this->load->view('pages/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    public function addUsers()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        // $data['bag'] = $this->Unit_model->getBagianKantorByUsername($data['username']);
        $this->load->view('admin/users/add', $data);
    }


    public function TambahUsers()
    {
        // echo "<script>alert('Data Berhasil Diubah!');</script>";
        $session_data       = $this->session->userdata('logged_in');
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        $password = $this->input->post('password');
        // $level = $this->input->post('level') + 1;
        $passencrypt = md5($password);
        $confirm_password = $this->input->post('password_confirm');
        if (!empty($password) || !empty($confirm_password)) {
            if (empty($this->input->post("username"))) {
                $this->form_validation->set_rules('username', 'Username', 'trim|required');
            } else if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (empty($this->input->post("password"))) {
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
            } else if (empty($this->input->post("password_confirm"))) {
                $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required');
            }
            if (!empty($this->input->post("username")) && !empty($this->input->post("nama"))) {
                if ($password != $confirm_password) {
                    $this->form_validation->set_rules('password', 'Password', 'trim|required');
                    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');
                } else if ($password == $confirm_password) {
                    $item = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        'level' => $data['level'] + 1,
                        'parent' => $data['id_users'],
                        'member_id' => $this->generateRandomString(),
                        'password' => $passencrypt
                    );

                    $this->Admin_model->tambahDataUsers($item);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> ditambah!');
                    $data['url'] = base_url('index.php/admin/users');
                    $this->load->view('pages/ajax_redirect', $data);
                }
            }
        }
        if ($this->form_validation->run() == FALSE) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $this->load->view('admin/users/add', $data);
        } else {
            $data['url'] = base_url('index.php/admin/users');
            $this->load->view('pages/ajax_redirect', $data);
        }
    }
    public function editUsers($id = null)
    {
        $session_data       = $this->session->userdata('logged_in');
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/users');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $this->Admin_model->getUbahUsers($id);
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        $this->load->view('admin/users/edit', $data);
    }


    public function UbahUsers()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['id_users']      = $session_data['id_users'];
        $password = $this->input->post('password');
        $data['level']      = $session_data['level'];
        $passencrypt = md5($password);
        $confirm_password = $this->input->post('password_confirm');
        if (empty($password) && empty($confirm_password)) {
            if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (!empty($this->input->post("nama"))) {
                $data = array(
                    'username' => $_POST['username'],
                    'nama' => $_POST['nama'],
                    'parent' => $data['id_users'],
                    // 'level' => $data['level'] + 1
                );
                $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                $data['url'] = base_url('index.php/admin/users');
                $this->load->view('pages/ajax_redirect', $data);
            }
        } //else if ($password != NULL || $password_confirm != NULL) {
        else if (!empty($password) || !empty($confirm_password)) {
            if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (!empty($this->input->post("nama")) || !empty($password) || !empty($confirm_password)) {
                if ($password != $confirm_password) {
                    $this->form_validation->set_rules('password', 'Password', 'trim|required');
                    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');
                } else if ($password == $confirm_password) {
                    $data = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        'parent' => $data['id_users'],
                        'level' => $_POST['level'] + 1,
                        'password' => $passencrypt
                    );
                    $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                    $data['url'] = base_url('index.php/admin/users');
                    $this->load->view('pages/ajax_redirect', $data);
                } else if ($password == null || $confirm_password == null) {
                    $data = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        'parent' => $data['id_users'],
                        'level' => $_POST['level'] + 1,
                    );
                    $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                    $data['url'] = base_url('index.php/admin/users');
                    $this->load->view('pages/ajax_redirect', $data);
                }
            }
        }
        if ($this->form_validation->run() == FALSE) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $data['user'] = $this->Admin_model->getUbahUsers($_POST['id_users']);
            $this->load->view('admin/users/edit', $data);
        } else {
            $data['url'] = base_url('index.php/admin/users');
            $this->load->view('pages/ajax_redirect', $data);
        }
    }
    public function getHapusDataUsers()
    {
        echo json_encode($this->Unit_model->getUbahUsers($_POST['id_rpd']));
    }

    public function deleteUsers($id = null)
    {
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/users');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $id;
        $this->load->view('admin/users/delete', $data);
    }

    public function HapusUsers()
    {
        $this->Admin_model->HapusDataUsers($_POST);
        $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> dihapus!');
        $data['url'] = base_url('index.php/admin/users');
        $this->load->view('pages/ajax_redirect', $data);
    }
    public function perhitungan_bonus()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['nama']       = $session_data['nama'];
            $data['level']      = $session_data['level'];
            $data['status']     = $session_data['status'];
            $data['tahun']      = $session_data['tahun'];
            $data['id_users']      = $session_data['id_users'];
            $data['aktif']      = 'class="active treemenu"';
            $data['xaktif']     = 'class="active"';
            $data['title']      = "Perhitungan Bonus";
            $data['menu']       = "admin";
            $data['sub_menu']       = "perhitungan_bonus";
            // if ($data['level'] != 1) {
            //     echo "Access Blocked!";
            //     die;
            // }
            // print_r($this->session->userdata);

            if ($data['level'] == 0) {
                $data['users'] = $this->Admin_model->getUsersMember();
            } else {
                $data['users'] = $this->Admin_model->getUsersByParent($data['id_users']);
                // $data['parent'] = $this->Admin_model->getParent($data['id_users']);
            }

            $this->load->view('pages/header', $data);
            $this->load->view('pages/navigation', $data);
            $this->load->view('admin/perhitungan_bonus/index', $data);
            $this->load->view('pages/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    public function registrasi_member()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['nama']       = $session_data['nama'];
            $data['level']      = $session_data['level'];
            $data['status']     = $session_data['status'];
            $data['tahun']      = $session_data['tahun'];
            $data['id_users']      = $session_data['id_users'];
            $data['aktif']      = 'class="active treemenu"';
            $data['xaktif']     = 'class="active"';
            $data['title']      = "Register New Member";
            $data['menu']       = "admin";
            $data['sub_menu']       = "registrasi_member";
            // if ($data['level'] != 1) {
            //     echo "Access Blocked!";
            //     die;
            // }
            // print_r($this->session->userdata);
            if ($data['level'] == 0) {
                $data['users'] = $this->Admin_model->getUsersMember();
            } else {
                $data['users'] = $this->Admin_model->getUsersByParent($data['id_users']);
                // $data['parent'] = $this->Admin_model->getParent($data['id_users']);
            }

            $this->load->view('pages/header', $data);
            $this->load->view('pages/navigation', $data);
            $this->load->view('admin/registrasi_member/index', $data);
            $this->load->view('pages/footer');
        } else {
            redirect('login', 'refresh');
        }
    }

    public function addMember()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        if ($data['level'] == 0) {
            $data['parent'] = $this->Admin_model->getParentAll();
        } else {
            $data['parent'] = $this->Admin_model->getParent($data['id_users']);
        }
        $this->load->view('admin/registrasi_member/add', $data);
    }


    public function TambahMember()
    {
        // echo "<script>alert('Data Berhasil Diubah!');</script>";
        $session_data       = $this->session->userdata('logged_in');
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('password_confirm');
        $parent = $this->input->post('parent');
        $data['getParent'] = $this->Admin_model->getUsersByID($parent);
        // var_dump($data['getParent'][0]['level']);
        // die();
        $passencrypt = md5($password);
        if (!empty($password) || !empty($confirm_password)) {
            if (empty($this->input->post("username"))) {
                $this->form_validation->set_rules('username', 'Username', 'trim|required');
            } else if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (empty($this->input->post("password"))) {
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
            } else if (empty($this->input->post("password_confirm"))) {
                $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required');
            } else if (empty($this->input->post("parent"))) {
                $this->form_validation->set_rules('parent', 'Parent', 'trim|required');
            }
            if (!empty($this->input->post("username")) && !empty($this->input->post("nama") && !empty($parent))) {
                if ($password != $confirm_password) {
                    $this->form_validation->set_rules('password', 'Password', 'trim|required');
                    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');
                } else if ($password == $confirm_password) {
                    $item = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        'level' => $data['getParent']['level'] + 1,
                        'parent' => $parent,
                        'member_id' => $this->generateRandomString(),
                        'password' => $passencrypt
                    );
                    // var_dump($item);
                    // die();
                    $this->Admin_model->tambahDataUsers($item);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> ditambah!');
                    $data['url'] = base_url('index.php/admin/registrasi_member');
                    $this->load->view('pages/ajax_redirect', $data);
                }
            }
        }
        if ($this->form_validation->run() == FALSE) {
            $session_data       = $this->session->userdata('logged_in');
            $data['level']      = $session_data['level'];
            $data['username']   = $session_data['username'];
            if ($data['level'] == 0) {
                $data['parent'] = $this->Admin_model->getParentAll();
            } else {
                $data['parent'] = $this->Admin_model->getParent($data['id_users']);
            }
            $this->load->view('admin/registrasi_member/add', $data);
        } else {
            $data['url'] = base_url('index.php/admin/registrasi_member');
            $this->load->view('pages/ajax_redirect', $data);
        }
    }
    public function editMember($id = null)
    {
        $session_data       = $this->session->userdata('logged_in');
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/registrasi_member');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $this->Admin_model->getUbahUsers($id);
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        $this->load->view('admin/registrasi_member/edit', $data);
        $data['parent'] = $this->Admin_model->getParentAll();
    }


    public function UbahMember()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['id_users']      = $session_data['id_users'];
        $password = $this->input->post('password');
        $data['level']      = $session_data['level'];
        $passencrypt = md5($password);
        $confirm_password = $this->input->post('password_confirm');
        if (empty($password) && empty($confirm_password)) {
            if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (!empty($this->input->post("nama"))) {
                $data = array(
                    'username' => $_POST['username'],
                    'nama' => $_POST['nama'],
                    'parent' => $data['id_users'],
                    // 'level' => $data['level'] + 1
                );
                $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                $data['url'] = base_url('index.php/admin/registrasi_member');
                $this->load->view('pages/ajax_redirect', $data);
            }
        } //else if ($password != NULL || $password_confirm != NULL) {
        else if (!empty($password) || !empty($confirm_password)) {
            if (empty($this->input->post("nama"))) {
                $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
            } else if (!empty($this->input->post("nama")) || !empty($password) || !empty($confirm_password)) {
                if ($password != $confirm_password) {
                    $this->form_validation->set_rules('password', 'Password', 'trim|required');
                    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|matches[password]');
                } else if ($password == $confirm_password) {
                    $data = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        // 'parent' => $data['id_users'],
                        // 'level' => $_POST['level'] + 1,
                        'password' => $passencrypt
                    );
                    $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                    $data['url'] = base_url('index.php/admin/registrasi_member');
                    $this->load->view('pages/ajax_redirect', $data);
                } else if ($password == null || $confirm_password == null) {
                    $data = array(
                        'username' => $_POST['username'],
                        'nama' => $_POST['nama'],
                        // 'parent' => $data['id_users'],
                        // 'level' => $_POST['level'] + 1,
                    );
                    $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
                    $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
                    $data['url'] = base_url('index.php/admin/registrasi_member');
                    $this->load->view('pages/ajax_redirect', $data);
                }
            }
        }
        if ($this->form_validation->run() == FALSE) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $data['user'] = $this->Admin_model->getUbahUsers($_POST['id_users']);
            $data['parent'] = $this->Admin_model->getParentAll();
            $this->load->view('admin/registrasi_member/edit', $data);
        } else {
            $data['url'] = base_url('index.php/admin/registrasi_member');
            $this->load->view('pages/ajax_redirect', $data);
        }
    }
    public function getHapusDataMember()
    {
        echo json_encode($this->Unit_model->getUbahUsers($_POST['id_rpd']));
    }

    public function deleteMember($id = null)
    {
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/registrasi_member');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $id;
        $this->load->view('admin/registrasi_member/delete', $data);
    }

    public function HapusMember()
    {
        $this->Admin_model->HapusDataUsers($_POST);
        $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> dihapus!');
        $data['url'] = base_url('index.php/admin/registrasi_member');
        $this->load->view('pages/ajax_redirect', $data);
    }

    public function migrasi()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['nama']       = $session_data['nama'];
            $data['level']      = $session_data['level'];
            $data['status']     = $session_data['status'];
            $data['tahun']      = $session_data['tahun'];
            $data['id_users']      = $session_data['id_users'];
            $data['aktif']      = 'class="active treemenu"';
            $data['xaktif']     = 'class="active"';
            $data['title']      = "Migrasi Member";
            $data['menu']       = "admin";
            $data['sub_menu']       = "migrasi";
            // if ($data['level'] != 1) {
            //     echo "Access Blocked!";
            //     die;
            // }
            // print_r($this->session->userdata);

            $data['users'] = $this->Admin_model->getUsersMember();

            $this->load->view('pages/header', $data);
            $this->load->view('pages/navigation', $data);
            $this->load->view('admin/migrasi/index', $data);
            $this->load->view('pages/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
    public function editMigrasi($id = null)
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']   = $session_data['id_users'];
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/migrasi');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $this->Admin_model->getUbahUsers($id);
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        // $data['parent'] = $this->Admin_model->getParent($data['id_users']);
        $data['parent'] = $this->Admin_model->getParentAll();
        $this->load->view('admin/migrasi/edit', $data);
    }


    public function UbahMigrasi()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']      = $session_data['id_users'];

        $data['level']      = $session_data['level'];
        $parent = $this->input->post('parent');
        $data['getParent'] = $this->Admin_model->getUsersByID($parent);
        $idbaru = "M-" . $this->generateRandomString();
        if (empty($this->input->post("nama"))) {
            $this->form_validation->set_rules('nama', 'Nama User', 'trim|required');
        } else if (!empty($this->input->post("nama"))) {
            $data = array(
                'parent' => $parent,
                'level' => $data['getParent']['level'] + 1,
                'member_id' => $idbaru
            );
            $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);
            $this->session->set_flashdata('flash', 'Data <strong>berhasil</strong> diubah!');
            $data['url'] = base_url('index.php/admin/migrasi');
            $this->load->view('pages/ajax_redirect', $data);
        }
        if ($this->form_validation->run() == FALSE) {
            $session_data       = $this->session->userdata('logged_in');
            $data['username']   = $session_data['username'];
            $data['user'] = $this->Admin_model->getUbahUsers($_POST['id_users']);
            $data['parent'] = $this->Admin_model->getParentAll();
            $this->load->view('admin/migrasi/edit', $data);
        } else {
            $data['url'] = base_url('index.php/admin/migrasi');
            $this->load->view('pages/ajax_redirect', $data);
        }
    }
    public function countBonus($id = null)
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']   = $session_data['id_users'];
        if (!isset($id)) {
            $data['url'] = base_url('index.php/admin/perhitungan_bonus');
            $this->load->view('pages/ajax_redirect', $data);
        }

        $data['user'] = $this->Admin_model->getUbahUsers($id);
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];
        $data['parent'] = $this->Admin_model->getParentAll();
        $this->load->view('admin/perhitungan_bonus/proses', $data);
    }


    public function hitungBonus()
    {
        $session_data       = $this->session->userdata('logged_in');
        $data['username']   = $session_data['username'];
        $data['id_users']      = $session_data['id_users'];
        $data['level']      = $session_data['level'];

        $parent = $this->Admin_model->getParentBonus($_POST['id_users']);
        $user = $this->Admin_model->getUsersByID($_POST['id_users']);
        $count = count($parent);
        if ($user['level'] == 1) {
            $lv2 = $this->Admin_model->getParentUsersLv2($_POST['id_users']);
            $lv3 = [];
            foreach ($lv2 as $x) {
                $lv3[] = $this->Admin_model->getParentUsersLv3($x['id_users']);
                // $lv3[] = $x['id_users'];
            }
            // var_dump(($lv3));
            // die();
            if ($lv3 || $lv3 != NULL || $lv3 != '') {
                // $countlv2 = count($lv2);
                $countlv2 = count(array_filter($lv2, function ($x) {
                    return !empty($x);
                }));
                // $countlv3 = count($lv3[0]);
                if (count($lv3) > 1) {
                    $level3 = $lv3;
                } else {
                    $level3 = $lv3[0];
                }
                $countlv3 = count(array_filter($level3, function ($x) {
                    return !empty($x);
                }));
                // var_dump($countlv3);
                // die();
                $bonus = (1 * $countlv2) + (0.5 * $countlv3);
            } else {
                $bonus = (1 * $count);
            }
            $data = array(
                'bonus' => $bonus,
            );
        } else {
            $bonus = 1 * $count;
            $data = array(
                'bonus' => $bonus,
            );
        }
        $this->Admin_model->ubahDataUsers($_POST['id_users'], $data);

        $this->session->set_flashdata('flash', 'Bonus <strong>berhasil</strong> di hitung!');
        $data['url'] = base_url('index.php/admin/perhitungan_bonus');
        $this->load->view('pages/ajax_redirect', $data);
    }
    public function tree_view()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data       = $this->session->userdata('logged_in');
            $data['nama']       = $session_data['nama'];
            $data['level']      = $session_data['level'];
            $data['status']     = $session_data['status'];
            $data['tahun']      = $session_data['tahun'];
            $data['id_users']      = $session_data['id_users'];
            $data['aktif']      = 'class="active treemenu"';
            $data['xaktif']     = 'class="active"';
            $data['title']      = "Tree View";
            $data['menu']       = "tree_view";

            if ($data['level'] == 0) {
                $data['users'] = $this->Admin_model->getUsersMemberMLM();
            } else {
                $data['users'] = $this->Admin_model->getUsersByParentMLM($data['id_users']);
            }
            $resultArray = [];
            foreach ($data['users'] as $key => $value) {
                $tambahkey = $key + 1;
                $bedasatu = $value['level'] + $tambahkey;
                if ($value['level'] != $bedasatu) {
                    $resultArray[$value['parent_name']][] = $value;
                } else {
                    $resultArray[$value['nama']] = [];
                }
            }
            $data['resultArray'] = $resultArray;

            // $this->load->view('pages/header', $data);
            // $this->load->view('pages/navigation', $data);
            $this->load->view('admin/tree_view/index', $data);
            // $this->load->view('pages/footer');
        } else {
            redirect('login', 'refresh');
        }
    }
}
