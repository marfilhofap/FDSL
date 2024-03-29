<?php
$programa = $get_table->get_table("programa p join tipu_programa t on t.id_tipu_programa=p.id_tipu_programa");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Programa</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#jerasaun_fdsl">
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
                                    <th>Data Hahu</th>
                                    <th>Data Remata</th>
                                    <th>Programa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($programa as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['titulu'] . '</td>
                                        <td>' . $loop['tipu_programa'] . '</td>     
                                        <td>' . $loop['data_hahu'] . '</td>
                                        <td>' . $loop['data_remata'] . '</td>
                                        <td>' . $loop['programa'] . '</td>
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