<?php
 
class Pdfgenerator
{
	public function generate($html,$filename,$stream=FALSE)
	{
		define('DOMPDF_ENABLE_AUTOLOAD', false);
		require './vendor/dompdf/dompdf/dompdf_config.inc.php';
			 
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->set_paper("A4", "portrait");
		
		//$canvas->page_text(16, 800, $font, 8, array(0,0,0));
		//$dompdf->set_font("10px");
		$dompdf->render();
		$dompdf->stream($filename.'.pdf',array("Attachment"=>0));
	}
}

?>