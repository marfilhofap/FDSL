<?php
$publikasaun = $get_table->get_table("publikasaun p join tipu_publikasaun t on t.id_tipu_publikasaun=p.id_tipu_publikasaun");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Publikasaun</h6>
                    <a href="?c=insert_publikasaun" class="btn btn-success btn-icon-split">
                        <span class="text">Aumenta</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Titulu</th>
                                    <th>Tipu</th>
                                    <th>Data</th>
                                    <th>Publikasaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($publikasaun as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['titulu'] . '</td>
                                        <td>' . $loop['tipu_publikasaun'] . '</td>     
                                        <td>' . $loop['data_publikasaun'] . '</td>
                                        <td>' . $loop['publikasaun'] . '</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>