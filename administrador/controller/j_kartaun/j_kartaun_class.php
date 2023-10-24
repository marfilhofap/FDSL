<?php
class j_kartaun
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

    // Tipu Kartaun
    public function insert_tipu_kartaun($tipu_kartaun)
    {
        $sql = $this->conn->prepare("INSERT INTO tipu_kartaun (tipu_kartaun) VALUES (:tipu_kartaun)");
        $sql->bindParam(":tipu_kartaun", $tipu_kartaun);

        $sql->execute();
        return header("location: ../../index.php?c=tipu_kartaun");
    }
    public function edit_tipu_kartaun($id_tipu_kartaun, $tipu_kartaun)
    {
        $sql = $this->conn->prepare("UPDATE tipu_kartaun SET tipu_kartaun='$tipu_kartaun' 
        WHERE id_tipu_kartaun='$id_tipu_kartaun'");

        $sql->execute();
        return header("location: ../../index.php?c=tipu_kartaun");
    }

    // Tipu Kartaun
    public function insert_kartaun($id_identidade, $id_tipu_kartaun, $verifikasaun, $data_oras)
    {
        $sql = $this->conn->prepare("INSERT INTO kartaun (id_identidade, id_tipu_kartaun, verifikasaun, data_oras) VALUES (:id_identidade, :id_tipu_kartaun, :verifikasaun, :data_oras)");
        $sql->bindParam(":id_identidade", $id_identidade);
        $sql->bindParam(":id_tipu_kartaun", $id_tipu_kartaun);
        $sql->bindParam(":verifikasaun", $verifikasaun);
        $sql->bindParam(":data_oras", $data_oras);

        $sql->execute();
        return header("location: ../../index.php?c=dados_kartaun");
    }
}
