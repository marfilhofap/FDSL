<?php
include_once '../../access_control/connection.php';
include_once '../../../config/parametros_db.php';
include_once 'j_utilijador_class.php';
include_once '../get_table.php';

$class_j_utilijador = new j_utilijador(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);
$get_table = new gestaoTabelas(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);

// Tpu Publikasaun
if (isset($_POST['insert_utilijador'])) {
    $id_jerasaun_fdsl = $_POST['id_jerasaun_fdsl'];
    $lista_menbru = $get_table->get_table("view_jerasaun_fdsl");
    $naran_kompletu = null;
    $email =  null;
    $username = null;
    // var_dump($lista_menbru);
    foreach ($lista_menbru as $lista) {
        if ($lista['id_jerasaun_fdsl'] == $id_jerasaun_fdsl) {
            $naran_kompletu = $lista['naran_kompletu'];
            $email = $lista['email'];
            $username = $lista['id_rejistu'];
        }
    }

    $password = "password";

    $insert_utilijador = $class_j_utilijador->insert_utilijador($id_jerasaun_fdsl, $naran_kompletu, $email, $username, $password);
}


if (isset($_POST['login_utilijador'])) {
    $id_rejistu = $_POST['id_rejistu'];
    $password = $_POST['password'];
    #$id_menbru = $_POST['id_menbru']; // Depois muuda fali ba iha ne
    $login = $class_j_utilijador->verifika_login_utilijador($id_rejistu, $password);
}

if (isset($_POST['hamos_utilijador'])) {
    $table_name = 'utilijador';
    $id = 'id_utilijador';
    $id_dados = $_POST['id_utilijador'];

    $update_status = $class_j_utilijador->delete($table_name, $id, $id_dados);
    return header("location: ../../index.php?c=utilijador");
}
