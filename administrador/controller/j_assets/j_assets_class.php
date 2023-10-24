<?php
class j_assets
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

    // Insert
    public function insert_tipo_assets($tipo_assets)
    {
        $sql = $this->conn->prepare("INSERT INTO tipo_assets (tipo_assets) VALUES (:tipo_assets)");
        $sql->bindParam(":tipo_assets", $tipo_assets);

        $sql->execute();
        return header("location: ../../index.php?c=tipu_assets");
    }

    public function edit_tipo_assets($id_tipo_assets, $tipo_assets)
    {
        $sql = $this->conn->prepare("UPDATE tipo_assets SET tipo_assets='$tipo_assets' 
        WHERE id_tipo_assets='$id_tipo_assets'");

        $sql->execute();
        return header("location: ../../index.php?c=tipu_assets");
    }
}
