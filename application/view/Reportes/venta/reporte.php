<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php
require APP.  'Libs\reportes\vendor\autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;


try{
    ob_start();
    include APP . 'view/reportes/venta/lista.php';
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'es',true,'UTF-8',array(10,10,10,10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content);
    ob_end_clean();
    $html2pdf->output('Reporte_Ventas.pdf');

}catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}

?>