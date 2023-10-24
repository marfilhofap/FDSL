<?php
$id = $_GET['id'];
$materia = $get_table->get_table_uuid("", "materia", "id_area_materia", $id, "");
$area = $get_table->get_table_uuid("", "area_materia", "id_area_materia", $id, "");
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold">
                        <a href="?c=materia" class="text-primary">Materia</a>
                        &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                        Materia
                        <?php foreach ($area as $loop) {
                            echo $loop['area_materia'];
                        } ?>
                    </h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#aumenta_materia">
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
                                    <th>Materia</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($materia as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['nome_documentos'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="controller/j_materia/j_materia_handler.php?action=ExibirNoNavegador&id=' . $loop['id_materia'] . '" class="btn btn-sm btn-light btn-active-primary" target="_blank">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#hamos_materia" data-id_materia="' . $loop['id_materia'] . '" data-id_area_materia="' . $loop['id_area_materia'] . '" data-materia="' . $loop['nome_documentos'] . '">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
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
                                <?php
                                foreach ($area as $loop) {
                                    echo '<input type="text" class="form-control" value="' . $loop['area_materia'] . '" readonly>
                                        <input type="hidden" value="' . $loop['id_area_materia'] . '" id="id_area_materia" name="id_area_materia">';
                                }
                                ?>
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


<!-- Modal Hamos -->
<div class="modal fade" id="hamos_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Hamos Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <input type="hidden" id="id_materia" name="id_materia">
                            <input type="hidden" id="id_area_materia" name="id_area_materia">
                            <p>Tebes hakarak hamos <b id="materia_b"></b> ?</p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                            <button type="submit" class="btn btn-danger" name="hamos_materia">Sim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#hamos_materia').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_materia = button.data('id_materia')
            var id_area_materia = button.data('id_area_materia')
            var materia = button.data('materia')
            var modal = $(this)
            modal.find('#id_materia').val(id_materia)
            modal.find('#id_area_materia').val(id_area_materia)
            modal.find('#materia_b').text(materia)

        })
    })
</script>