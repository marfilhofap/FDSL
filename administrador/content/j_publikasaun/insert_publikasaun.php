<?php
$publikasaun = $get_table->get_table("publikasaun p join tipu_publikasaun t on t.id_tipu_publikasaun=p.id_tipu_publikasaun");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Publikasaun</h6>
                </div>
                <div class="card-body">
                    <div class="row justify-content-md-center mt-4">
                        <div class="col-md-12">
                            <textarea id="editor">
                                Marfilho Fidel Alvares Pereira
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // CKEDITOR.replace('editor');

    CKEDITOR.replace('editor', {
        extraPlugins: 'license',
        licenseKey: 'your-gpl-compatible-license-key'
    });
</script>