<?php
$tipu_publikasaun = $get_table->get_table("tipu_publikasaun");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tipu Publikasaun</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#insert_tipu_publikasaun">
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
                                    <th>Tipu Publikasaun</th>
                                    <th class="text-center">Asaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tipu_publikasaun as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['tipu_publikasaun'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#update_tipu_publikasaun" data-id_tipu_publikasaun="' . $loop['id_tipu_publikasaun'] . '" data-tipu_publikasaun="' . $loop['tipu_publikasaun'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-toggle="modal" data-target="#delete_tipu_publikasaun" data-id_tipu_publikasaun="' . $loop['id_tipu_publikasaun'] . '" data-tipu_publikasaun="' . $loop['tipu_publikasaun'] . '">
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


<!-- Modal Insert -->
<div class="modal fade" id="insert_tipu_publikasaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Tipu Publikasaun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_publikasaun/j_publikasaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="tipu_publikasaun">Tipu Publikasaun:</label>
                                <input type="text" class="form-control" id="tipu_publikasaun" name="tipu_publikasaun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="insert_tipu_publikasaun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Update -->
<div class="modal fade" id="update_tipu_publikasaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Area Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_publikasaun/j_publikasaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label for="tipu_publikasaun">Tipu Publikasaun:</label>
                                <input type="hidden" class="form-control" id="id_tipu_publikasaun" name="id_tipu_publikasaun">
                                <input type="text" class="form-control" id="tipu_publikasaun" name="tipu_publikasaun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="update_tipu_publikasaun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delete_tipu_publikasaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Hamos Area Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_publikasaun/j_publikasaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <input type="hidden" id="id_tipu_publikasaun" name="id_tipu_publikasaun">
                            <p>Tebes hakarak hamos <b id="tipu_publikasaun_p"></b> ?</p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                            <button type="submit" class="btn btn-danger" name="delete_tipu_publikasaun">Sim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#update_tipu_publikasaun').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)

            var id_tipu_publikasaun = button.data('id_tipu_publikasaun')
            var tipu_publikasaun = button.data('tipu_publikasaun')

            var modal = $(this)

            modal.find('#id_tipu_publikasaun').val(id_tipu_publikasaun)
            modal.find('#tipu_publikasaun').val(tipu_publikasaun)

        })

        $('#delete_tipu_publikasaun').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_tipu_publikasaun = button.data('id_tipu_publikasaun')
            var tipu_publikasaun = button.data('tipu_publikasaun')
            var modal = $(this)
            modal.find('#id_tipu_publikasaun').val(id_tipu_publikasaun)
            modal.find('#tipu_publikasaun_p').text(tipu_publikasaun)

        })
    })
</script>