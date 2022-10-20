<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//function pdf_create($html, $filename='', $stream=TRUE)
function pdf_create()
{
	define('DOMPDF_ENABLE_AUTOLOAD', false);
	require_once('./vendor/dompdf/dompdf/dompdf_config.inc.php');

	$html = '<html><body><p>Put your html here, or generate it with your favourite templating system.</p></body></html>';

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream($filename . ".pdf", array("Attachment" => 0));
	if ($stream) {
		$dompdf->stream($filename . ".pdf", array("Attachment" => 0));
	} else {
		return $dompdf->output();
	}
}
//NEBENG UNTUK CSRF
if (!function_exists('get_csrf_token')) {
	function get_csrf_token()
	{
		$ci = get_instance();
		if (!$ci->session->csrf_token) {
			$ci->session->csrf_token = hash('sha1', time());
		}
		return $ci->session->csrf_token;
	}
}
if (!function_exists('get_csrf_name')) {
	function get_csrf_name()
	{
		return "token";
	}
}
function cek_csrf()
{
	$ci = get_instance();
	if ($ci->input->post('token') != $ci->session->csrf_token || !$ci->input->post('token') || !$ci->session->csrf_token) {
		$ci->session->unset_userdata('csrf_token');
		$ci->output->set_status_header(403);
		show_error('Token salah, silakan tekan tombol kembali pada browser anda');
		return false;
	}
}
function csrf()
{
	return "<input type='hidden' name='" . get_csrf_name() . "' value='" . get_csrf_token() . "' />";
}
