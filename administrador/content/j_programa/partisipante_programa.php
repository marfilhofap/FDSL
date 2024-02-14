<?php
$programa = $get_table->get_table("programa order by data_hahu DESC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Partisipante Programa</h6>
                </div>
                <div class="card-body">

                    <div class="row">
                        <?php
                        $no = 1;
                        foreach ($programa as $loop) {
                            $partisipante = $get_table->get_table_uuid("", "view_programa_partisipante", "id_programa", $loop['id_programa'], "");
                            echo '<div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <a href="?c=partisipante_programa_detalho&id=' . $loop['id_programa'] . '" class="text-decoration-none">
                                                <div class="row no-gutters align-items-center">
                                                
                                                    <div class="col mr-2 text-center">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            ' . $loop['titulu'] . '</div>
                                                        <div class="h6 mb-0 text-gray-800">
                                                        (' . $loop['data_hahu'] . ' to ' . $loop['data_remata'] . ')
                                                        </div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        ' . count($partisipante) . '
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-network fa-2x text-gray-300"></i>
                                                    </div>
                                                
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>';
                        }
                        ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>