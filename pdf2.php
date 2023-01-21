<?php 

   require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

  ob_start();
?>





<?php 

$html2pdf = new Html2Pdf('P','A4','fr');
$content = ob_get_clean();
$html2pdf->writeHTML($content);
$html2pdf->pdf->SetDisplayMode('fullpage');
$html2pdf->output('document_pdf.pdf');

?>