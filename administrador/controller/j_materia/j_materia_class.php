<?php
// include_once '../../access_control/connection.php';
// include_once '../../config/parametros_db.php';

class j_materia
{
    protected $conn = null;
    protected $db_pgconnect = null;
    public  $PSQLHOST;
    public  $PSQLUSER;
    public  $PSQLDB;
    public $PSQLPW;
    public function __construct($PSQLHOST, $PSQLUSER, $PSQLPW, $PSQLDB)
    {
        $con = new connection($PSQLHOST, $PSQLUSER, $PSQLPW, $PSQLDB);
        $this->conn = $con->open();
        $this->db_pgconnect = $con->open_pgconnect();
    }

    // View Dokumentu iha Navegador
    public function get_documentos($id)
    {

        $query = "SELECT  dados_documentos, nome_documentos, tipo_documentos FROM materia WHERE id_materia = '$id'";
        $res = pg_query($this->db_pgconnect, $query) or die(pg_last_error($this->db_pgconnect));
        $arquivo = pg_fetch_array($res, null, PGSQL_ASSOC);

        header('Content-type: ' . $arquivo["tipo_documentos"]);
        echo pg_unescape_bytea($arquivo["dados_documentos"]);
    }

    //  Hamos dadus husi tabela base de dadus sira
    public function delete($table_name, $id, $id_dados)
    {
        try {
            $sql = "DELETE FROM $table_name WHERE $id='$id_dados'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    // Materia
    public function aumenta_materia($id_area_materia, $dados_documentos, $nome_documentos, $tipo_documentos, $tamanho_documentos)
    {
        $sql = $this->conn->prepare("INSERT INTO materia (id_area_materia, dados_documentos, nome_documentos, tipo_documentos, tamanho_documentos) VALUES (:id_area_materia, :dados_documentos, :nome_documentos, :tipo_documentos, :tamanho_documentos)");
        $sql->bindParam(":id_area_materia", $id_area_materia);
        $sql->bindParam(":dados_documentos", $dados_documentos);
        $sql->bindParam(":nome_documentos", $nome_documentos);
        $sql->bindParam(":tipo_documentos", $tipo_documentos);
        $sql->bindParam(":tamanho_documentos", $tamanho_documentos);

        $sql->execute();
        return header("location: ../../index.php?c=materia_klik&id=$id_area_materia");
    }

    // Area Materia
    public function aumenta_area_materia($area_materia, $code)
    {
        $sql = $this->conn->prepare("INSERT INTO area_materia (area_materia, code) VALUES (:area_materia, :code)");
        $sql->bindParam(":area_materia", $area_materia);
        $sql->bindParam(":code", $code);

        $sql->execute();
        return header("location: ../../index.php?c=area");
    }
    public function muda_area_materia($id, $area_materia, $code)
    {
        $sql = "UPDATE area_materia SET area_materia = '$area_materia', code = '$code' WHERE id_area_materia = '$id'";

        $this->conn->exec($sql);
        return header("location: ../../index.php?c=area");
    }
}
