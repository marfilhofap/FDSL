<?php
$area_materia = $get_table->get_table("area_materia");
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Area Materia</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#aumenta_area_materia">
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
                                    <th>Area Materia</th>
                                    <th>Code (Fontawesome)</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($area_materia as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['area_materia'] . '</td>
                                        <td>' . $loop['code'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#muda_area_materia" data-id_area_materia="' . $loop['id_area_materia'] . '" data-area_materia="' . $loop['area_materia'] . '" data-code="' . $loop['code'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#hamos_area_materia" data-id_area_materia="' . $loop['id_area_materia'] . '" data-area_materia="' . $loop['area_materia'] . '">
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
<div class="modal fade" id="aumenta_area_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Area Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="area_materia">Area:</label>
                                <input type="text" class="form-control" id="area_materia" name="area_materia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="code">Code (Fontawesome):</label>
                                <input type="text" class="form-control" id="code" name="code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="aumenta_area_materia">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- Modal Muda -->
<div class="modal fade" id="muda_area_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Muda Area Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="area_materia">Area:</label>
                                <input type="hidden" class="form-control" id="id_area_materia" name="id_area_materia">
                                <input type="text" class="form-control" id="area_materia" name="area_materia">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="code">Code (Fontawesome):</label>
                                <input type="text" class="form-control" id="code" name="code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="muda_area_materia">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Hamos -->
<div class="modal fade" id="hamos_area_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Hamos Area Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_materia/j_materia_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <input type="hidden" id="id_area_materia" name="id_area_materia">
                            <!-- <input readonly class="form-control" id="area_materia"> -->
                            <p>Tebes hakarak hamos <b id="materia_p"></b> ?</p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                            <button type="submit" class="btn btn-danger" name="hamos_area_materia">Sim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#muda_area_materia').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)

            var id_area_materia = button.data('id_area_materia')
            var area_materia = button.data('area_materia')
            var code = button.data('code')

            var modal = $(this)

            modal.find('#id_area_materia').val(id_area_materia)
            modal.find('#area_materia').val(area_materia)
            modal.find('#code').val(code)

        })

        $('#hamos_area_materia').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_area_materia = button.data('id_area_materia')
            var area_materia = button.data('area_materia')
            var modal = $(this)
            modal.find('#id_area_materia').val(id_area_materia)
            modal.find('#materia_p').text(area_materia)

        })
    })
</script>