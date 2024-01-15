<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs bg-white">
  <div class="container">

    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Verifika Kartaun</li>
    </ol>

  </div>
</section><!-- End Breadcrumbs -->

<?php
if ($id != '') {
  $kartaun = $get_table->get_table_uuid('', 'view_kartaun', 'verifikasaun', $id, '');

?>

  <!-- ======= Team Section ======= -->
  <section class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>
          Verifikasaun Kartaun FDSL
        </h2>
      </div>

      <div class="row">

        <?php
        foreach ($kartaun as $loop) {
          echo '<div class="col-lg-4">
          <table border="0" cellpadding="1" cellspacing="0">
          <tbody>
            <tr>
              <td width="150" align="left"> Naran </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['naran_kompletu'] . ' </td>
            </tr>
            <tr>
              <td width="150" align="left"> Sexu </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['sexu'] . ' </td>
            </tr>
            <tr>
              <td width="150" align="left"> Data Moris </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['data_de_nascimento'] . ' </td>
            </tr>
            <tr>
              <td width="150" align="left"> Jerasaun </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['tipu_jerasaun'] . ' </td>
            </tr>
            <tr>
              <td width="150" align="left"> Tlf </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['nu_telemovel'] . ' </td>
            </tr>
            <tr>
              <td width="150" align="left"> Email </td>
              <td width="20"> : </td>
              <td width="300"> ' . $loop['email'] . ' </td>
            </tr>
          </tbody>
        </table>
              </div>';
        }
        ?>

      </div>

    </div>
  </section><!-- End Team Section -->

<?php } else { ?>
  <section class="team section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>
          Atensaun
        </h2>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="member d-flex align-items-start">
            <div class="member-info">
              <span>
                Presija ID Kartaun nebe Los hodi bele halo Verifikasaun
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php } ?>