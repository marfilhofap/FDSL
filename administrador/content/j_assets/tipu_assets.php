<?php
$tipo_assets = $get_table->get_table("tipo_assets order by id_tipo_assets ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tipo Assets</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#insert_tipo_assets">
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
                                    <th>Tipo Assets</th>
                                    <th>Assaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tipo_assets as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['tipo_assets'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#edit_tipo_assets" 
                                                data-id_tipo_assets="' . $loop['id_tipo_assets'] . '" 
                                                data-tipo_assets="' . $loop['tipo_assets'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#delete_tipo_assets" 
                                                data-id_tipo_assets="' . $loop['id_tipo_assets'] . '" 
                                                data-tipo_assets="' . $loop['tipo_assets'] . '">
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

<!-- Modal Edit -->
<div class="modal fade" id="edit_tipo_assets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Tipo Assets</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_assets/j_assets_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tipo_assets">Tipo Assets:</label>
                                <input type="text" class="form-control" id="tipo_assets" name="tipo_assets">
                                <input type="hidden" class="form-control" id="id_tipo_assets" name="id_tipo_assets">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="edit_tipo_assets">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delete_tipo_assets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Tipo Assets</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_assets/j_assets_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Tebes hakarak hamos dados <b id="tipo_assets"></b> ne?</p>

                                <input type="hidden" class="form-control" id="id_tipo_assets" name="id_tipo_assets">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Lae</button>
                    <button type="submit" class="btn btn-danger" name="delete_tipo_assets">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Aumenta -->
<div class="modal fade" id="insert_tipo_assets" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_assets/j_assets_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tipo_assets">Tipo Assets:</label>
                                <input type="text" class="form-control" id="tipo_assets" name="tipo_assets">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="insert_tipo_assets">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#edit_tipo_assets').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id_tipo_assets = button.data('id_tipo_assets')
            var tipo_assets = button.data('tipo_assets')

            var modal = $(this)
            modal.find('#id_tipo_assets').val(id_tipo_assets)
            modal.find('#tipo_assets').val(tipo_assets)

        })

        $('#delete_tipo_assets').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id_tipo_assets = button.data('id_tipo_assets')
            var tipo_assets = button.data('tipo_assets')

            var modal = $(this)
            modal.find('#id_tipo_assets').val(id_tipo_assets)
            modal.find('#tipo_assets').text(tipo_assets)

        })

    })
</script>