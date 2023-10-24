<?php
$area_materia = $get_table->get_table("area_materia order by area_materia ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Materia tuir kada Area</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#aumenta_materia">
                        <span class="text">Aumenta</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php
                        $no = 1;
                        foreach ($area_materia as $loop) {
                            $materia = $get_table->get_table_uuid("", "materia", "id_area_materia", $loop['id_area_materia'], "");
                            echo '<div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <a href="?c=materia_klik&id=' . $loop['id_area_materia'] . '" class="text-decoration-none">
                                                <div class="row no-gutters align-items-center">
                                                
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            ' . $loop['area_materia'] . '</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">' . count($materia) . '</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-' . $loop['code'] . ' fa-2x text-gray-300"></i>
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

<!-- Modal Aumenta -->
<div class="modal fade" id="aumenta_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="file">Materia:</label>
                                <input type="file" class="form-control" id="file" name="file">
                                <input type="hidden" name="action" value="enviar" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="id_area_materia">Area:</label>
                                <select class="form-control" id="id_area_materia" name="id_area_materia">
                                    <?php
                                    echo '<option selected hidden>- Hili Area Materia -</option>';
                                    foreach ($area_materia as $loop) {
                                        echo '<option value="' . $loop['id_area_materia'] . '">' . $loop['area_materia'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="aumenta_materia">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>