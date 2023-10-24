<?php
$tipu_kartaun = $get_table->get_table("tipu_kartaun order by id_tipu_kartaun ASC");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tipu Kartaun</h6>
                    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#insert_tipu_kartaun">
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
                                    <th>Tipo Kartaun</th>
                                    <th>Assaun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tipu_kartaun as $loop) {
                                    echo '<tr>
                                        <td>' . $no++ . '</td>     
                                        <td>' . $loop['tipu_kartaun'] . '</td>
                                        <td>
                                            <div class="d-flex justify-content-center flex-shrink-0">
                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#edit_tipu_kartaun" 
                                                data-id_tipu_kartaun="' . $loop['id_tipu_kartaun'] . '" 
                                                data-tipu_kartaun="' . $loop['tipu_kartaun'] . '">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-light btn-active-primary" 
                                                data-toggle="modal" 
                                                data-target="#delete_tipu_kartaun" 
                                                data-id_tipu_kartaun="' . $loop['id_tipu_kartaun'] . '" 
                                                data-tipu_kartaun="' . $loop['tipu_kartaun'] . '">
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
<div class="modal fade" id="edit_tipu_kartaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Edit Tipo Assets</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_kartaun/j_kartaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tipu_kartaun">Tipo Assets:</label>
                                <input type="text" class="form-control" id="tipu_kartaun" name="tipu_kartaun">
                                <input type="hidden" class="form-control" id="id_tipu_kartaun" name="id_tipu_kartaun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="edit_tipu_kartaun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delete_tipu_kartaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Tipo Assets</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_kartaun/j_kartaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <p>Tebes hakarak hamos dados <b id="tipu_kartaun"></b> ne?</p>

                                <input type="hidden" class="form-control" id="id_tipu_kartaun" name="id_tipu_kartaun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Lae</button>
                    <button type="submit" class="btn btn-danger" name="delete_tipu_kartaun">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Aumenta -->
<div class="modal fade" id="insert_tipu_kartaun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Aumenta Tipu Kartaun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="controller/j_kartaun/j_kartaun_handler.php" method="POST" class="col p-4 position-static" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tipu_kartaun">Tipu Kartaun:</label>
                                <input type="text" class="form-control" id="tipu_kartaun" name="tipu_kartaun">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kansela</button>
                    <button type="submit" class="btn btn-success" name="insert_tipu_kartaun">Rai</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#edit_tipu_kartaun').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id_tipu_kartaun = button.data('id_tipu_kartaun')
            var tipu_kartaun = button.data('tipu_kartaun')

            var modal = $(this)
            modal.find('#id_tipu_kartaun').val(id_tipu_kartaun)
            modal.find('#tipu_kartaun').val(tipu_kartaun)

        })

        $('#delete_tipu_kartaun').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id_tipu_kartaun = button.data('id_tipu_kartaun')
            var tipu_kartaun = button.data('tipu_kartaun')

            var modal = $(this)
            modal.find('#id_tipu_kartaun').val(id_tipu_kartaun)
            modal.find('#tipu_kartaun').text(tipu_kartaun)

        })

    })
</script>