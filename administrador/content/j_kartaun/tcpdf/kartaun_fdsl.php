<?php
$id_kartaun = isset($_GET['id']) ? $_GET['id'] : '';

if ($id_kartaun != '') {

  require_once('tcpdf_include.php');
  include_once '../../../../config/parametros_db.php';
  include_once '../../../access_control/connection.php';

  $conn = new connection(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);;
  $a = $conn->open_pgconnect();

  $export = pg_query($a, "SELECT * from view_kartaun where id_kartaun='$id_kartaun'");

  // create new PDF document
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Fundasaun Dezenvolvimento Software Livre');
  $pdf->SetTitle('Kartaun FDSL');
  $pdf->SetSubject('FDSL');
  $pdf->SetKeywords('FDSL, Timor-Leste');

  // remove default header/footer
  $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);

  // set style for barcode
  $style = array(
    'border' => 0,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0, 0, 0),
    'bgcolor' => array(255, 255, 255), //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
  );

  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetMargins(1, 3, 1);

  // set auto page breaks
  $pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);

  // set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

  // set some language-dependent strings (optional)
  if (@file_exists(dirname(__FILE__) . '/lang/bra.php')) {
    require_once(dirname(__FILE__) . '/lang/bra.php');
    $pdf->setLanguageArray($l);
  }

  // -----------------------------------------------------------------------------------------


  // add a page
  $pdf->AddPage('P', array(54, 86));


  $pdf->SetMargins(2, 3, 1);

  // Logo RDTL
  $watermarkImagePath = K_PATH_IMAGES . 'LogoFDSL.jpeg';
  $imageWidth = 50;
  $imageHeight = 50;
  $pageWidth = $pdf->getPageWidth();
  $pageHeight = $pdf->getPageHeight();
  $imageX = ($pageWidth - $imageWidth) / 2;
  $imageY = ($pageHeight - $imageHeight) / 2;

  $pdf->setPageMark();

  // Save current graphic state
  $pdf->StartTransform();

  // Set transparency for watermark image
  $pdf->SetAlpha(0.09);

  // Add watermark image behind all content
  $pdf->Image($watermarkImagePath, $imageX, $imageY, $imageWidth, $imageHeight, 'jpeg', '', '', false, 300, '', false, false, 0);

  // Restore graphic state
  $pdf->StopTransform();

  // Reset transparency to default
  $pdf->SetAlpha(1);


  // set font
  $pdf->SetFont('times', '', 7);

  $txt = '<table style="float: center; height: 1px;" width="367px">
            <tbody>
              <tr>
                <td style="width: 31px;"><img style="margin: 0px;" src="images/LOGO_RDTL.png" alt="test alt attribute" width="46" height="46" border="0" /></td>
                <td style="text-align:center">Fundasaun Dezenvolvimento Software Livre<br></td>
                <td style="width: 31px;"><img style="margin: 0px;" src="images/LogoFDSL.jpeg" alt="test alt attribute" width="46" height="46" border="0" /></td>
              </tr>
              <tr>
                <td colspan="3">
                  <hr>
                </td>
              </tr>
              <tr>
                <td colspan="3" style="text-align:center">Kartaun Membru FDSL</td>
              </tr>
            </tbody>
          </table>';

  $pdf->writeHTML($txt, true, false, false, false, '');

  // -----------------------------------------------------------------------------------------

  $row = pg_fetch_all($export);

  $verifikasaun = '';

  foreach ($row as $key => $dados) {

    $verifikasaun = $dados['verifikasaun'];

    // set font
    $pdf->SetFont('times', '', 7);

    $txt = '<table border="0" cellpadding="1" cellspacing="0">
            <tbody>
              <tr>
                <td width="50" align="left"> Naran </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['naran_kompletu'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Sexu </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['sexu'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Data Moris </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['data_de_nascimento'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Jerasaun </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['tipu_jerasaun'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Tlf </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['nu_telemovel'] . ' </td>
              </tr>
              <tr>
                <td width="50" align="left"> Email </td>
                <td width="15"> : </td>
                <td width="115"> ' . $dados['email'] . ' </td>
              </tr>
            </tbody>
          </table>';

    $pdf->writeHTML($txt, true, false, false, false, '');
  }

  // -----------------------------------------------------------------------------------------


  $qrcode = '192.168.250.36/fdsl/website/index.php?c=verifika_kartaun&id=' . $verifikasaun;

  $pdf->write2DBarcode($qrcode, 'QRCODE,H', 17, 53, 20, 20, $style, 'N');

  // -----------------------------------------------------------------------------------------

  // set font
  $pdf->SetFont('times', '', 6);

  $txt = 'ID Verifikasaun: ' . $verifikasaun;

  $pdf->writeHTML($txt, true, false, false, false, '');

  $pdf->Output('Kartaun' . date('Y-m-d-G-i-s') . '.pdf', 'I');
} else {
  var_dump($id_kartaun);
}
