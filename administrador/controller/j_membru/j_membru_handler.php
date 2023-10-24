<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_membru_class.php';

$class_j_membru = new j_membru(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

// Insert

// Area Materia 
if (isset($_POST['hatama_membru_foun'])) {
    // var_dump($_POST);
    $naran_kompletu = $_POST['naran_kompletu'];
    $sexu = $_POST['sexu'];
    $data_moris = $_POST['data_moris'];
    $id_tipu_jerasaun = $_POST['id_tipu_jerasaun'];
    $nu_telemovel = $_POST['nu_telemovel'];
    $email = $_POST['email'];

    // // Sura ID
    $id_rejistu = '';
    $generate_id = $class_j_membru->generate_id_rejistu($id_tipu_jerasaun);
    $jerasaun = $class_j_membru->check_jerasaun($id_tipu_jerasaun);

    if (count($generate_id) < 1) {
        $id_rejistu = $jerasaun[0]['tipu_jerasaun'] . '-001';
    } else {
        $id_rejistu = $jerasaun[0]['tipu_jerasaun'] . '-00' . count($generate_id) + 1;
    }


    // End Sura ID

    $insert_status = $class_j_membru->hatama_membru_foun($naran_kompletu, $sexu, $data_moris, $id_tipu_jerasaun, $nu_telemovel, $email, $id_rejistu);
}

// Hamos 

// Area_materia
if (isset($_POST['hamos_area_materia'])) {
    $tabela = 'area_materia';
    $id = 'id_area_materia';
    $id_dados = $_POST['id_area_materia'];

    $update_status = $class_j_membru->delete($tabela, $id, $id_dados);
    return header("location: ../../index.php?c=area");
}

if (isset($_POST['jerasaun_fdsl'])) {
    // var_dump($_POST);
    $id_jerasaun_fdsl = $_POST['id_jerasaun_fdsl'];
    $id_tipu_estrutura_fdsl = $_POST['id_tipu_estrutura_fdsl'];
    $data_inisiu = $_POST['data_inisiu'];



    $insert_status = $class_j_membru->jerasaun_fdsl($id_jerasaun_fdsl, $id_tipu_estrutura_fdsl, $data_inisiu);
}
