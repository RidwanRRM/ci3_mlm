<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('verifylogin/blocked');
        }
    }
}

function dd($var = "")
{
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    die;
}

function formatted_number($number, $default = '')
{
    return isset($number) && $number > 0 ? "" . build_currency_div(number_format($number, 0, ',', ',')) : $default;
}

function build_currency_div($number)
{
    echo '<div class="currency"><span>Rp. </span><span>' . $number . '</span></div>';
}

function formatted_percentage($percentage, $default = '')
{
    return isset($percentage) && $percentage > 0 ? round($percentage, 2) . "%" : $default;
}

function menu_active($menu, $menu_name)
{
    return $menu == $menu_name ? ' menu-open active' : '';
}

function sub_menu_active($menu, $sub_menu, $menu_name, $sub_menu_name)
{
    return $menu == $menu_name && $sub_menu == $sub_menu_name ? ' class="active"' : '';
}

function group_by($key, $data)
{
    $result = array();

    foreach ($data as $val) {
        if (array_key_exists($key, $val)) {
            $result[$val[$key]][] = $val;
        } else {
            $result[""][] = $val;
        }
    }

    return $result;
}

function bulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}
function triwulan($bln)
{
    switch ($bln) {
        case 1:
            return "TRIWULAN 1";
            break;
        case 2:
            return "TRIWULAN 2";
            break;
        case 3:
            return "TRIWULAN 3";
            break;
        case 4:
            return "TRIWULAN 4";
            break;
    }
}


function priority_color($prio)
{
    switch ($prio) {
        case "MENDAG":
            return "#00c0ef";
            break;
        case "DIRJEN":
            return "#f39c12";
            break;
        case "SESDITJEN":
            return "#d58ce2";
            break;
        case "DIREKTUR":
            return "#f72585";
            break;
        default:
            "";
    }
}

function unit_name($name)
{
    switch ($name) {
        case "SEKRETARIAT":
            return "SEKRETARIAT DIREKTORAT JENDERAL PDN";
            break;
        case "BAPOKTING":
            return "Direktorat Barang Kebutuhan Pokok dan Barang Penting";
            break;
        case "BINUS":
            return "Direktorat Bina Usaha dan Pelaku Distribusi";
            break;
        case "P3DN":
            return "Direktorat Penggunaan dan Pemasaran Produk Dalam Negeri";
            break;
        case "SARDISLOG":
            return "Direktorat Sarana Distribusi dan Logistik";
            break;
        default:
            "";
    }
}


function clean($string)
{
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
