<?php
$id = $_GET['id'];
$publikasaun = $get_table->get_table_uuid('', 'publikasaun', 'id_publikasaun', $id, '');
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs bg-white">
  <div class="container">

    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Publikasaun Detalho</li>
    </ol>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Team Section ======= -->
<section class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>
        <?php foreach ($publikasaun as $loop) {
          echo $loop['titulu'];
        } ?>
      </h2>
    </div>

    <div class="row">

      <?php
      foreach ($publikasaun as $loop) {
      ?>
        <div class="row content">
          <div class="col-lg-8">
            <p class="text-justify">
              Fundasaun Dezenvolvimento Software Livre (FDSL), antes ne'e ho naran Timor-Leste Open Source Community
              (TOSC), hanesan organizasaun ida ne'ebe eziste iha Timor-Leste no involve husi Estudante Universidades,
              Ensino Secundaria no Komunidade ne'ebe ativu iha Utilizasaun Open Source Software (OSS). Antes sai hanesan
              Fundasaun, TOSC komesa ativu hodi organiza eventu barak ona desde hari'i iha loron Sabadu, 17 Dezembru
              2011.
              Fundasaun Dezenvolvimento Software Livre (FDSL), antes ne'e ho naran Timor-Leste Open Source Community
              (TOSC), hanesan organizasaun ida ne'ebe eziste iha Timor-Leste no involve husi Estudante Universidades,
              Ensino Secundaria no Komunidade ne'ebe ativu iha Utilizasaun Open Source Software (OSS). Antes sai hanesan
              Fundasaun, TOSC komesa ativu hodi organiza eventu barak ona desde hari'i iha loron Sabadu, 17 Dezembru
              2011.
              Fundasaun Dezenvolvimento Software Livre (FDSL), antes ne'e ho naran Timor-Leste Open Source Community
              (TOSC), hanesan organizasaun ida ne'ebe eziste iha Timor-Leste no involve husi Estudante Universidades,
              Ensino Secundaria no Komunidade ne'ebe ativu iha Utilizasaun Open Source Software (OSS). Antes sai hanesan
              Fundasaun, TOSC komesa ativu hodi organiza eventu barak ona desde hari'i iha loron Sabadu, 17 Dezembru
              2011.
              Fundasaun Dezenvolvimento Software Livre (FDSL), antes ne'e ho naran Timor-Leste Open Source Community
              (TOSC), hanesan organizasaun ida ne'ebe eziste iha Timor-Leste no involve husi Estudante Universidades,
              Ensino Secundaria no Komunidade ne'ebe ativu iha Utilizasaun Open Source Software (OSS). Antes sai hanesan
              Fundasaun, TOSC komesa ativu hodi organiza eventu barak ona desde hari'i iha loron Sabadu, 17 Dezembru
              2011.
              Fundasaun Dezenvolvimento Software Livre (FDSL), antes ne'e ho naran Timor-Leste Open Source Community
              (TOSC), hanesan organizasaun ida ne'ebe eziste iha Timor-Leste no involve husi Estudante Universidades,
              Ensino Secundaria no Komunidade ne'ebe ativu iha Utilizasaun Open Source Software (OSS). Antes sai hanesan
              Fundasaun, TOSC komesa ativu hodi organiza eventu barak ona desde hari'i iha loron Sabadu, 17 Dezembru
              2011.
            </p>
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0">
            
          </div>
        </div>
      <?php }
      ?>

    </div>

  </div>
</section><!-- End Team Section -->