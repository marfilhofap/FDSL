<?php
class j_publikasaun
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

    // Tipu Publikasaun
    public function insert_tipu_publikasaun($tipu_publikasaun)
    {
        $sql = $this->conn->prepare("INSERT INTO tipu_publikasaun (tipu_publikasaun) VALUES (:tipu_publikasaun)");
        $sql->bindParam(":tipu_publikasaun", $tipu_publikasaun);
        $sql->execute();
        return header("location: ../../index.php?c=tipu_publikasaun");
    }
    public function update_tipu_publikasaun($id, $tipu_publikasaun)
    {
        $sql = "UPDATE tipu_publikasaun SET tipu_publikasaun = '$tipu_publikasaun' WHERE id_tipu_publikasaun = '$id'";
        $this->conn->exec($sql);
        return header("location: ../../index.php?c=tipu_publikasaun");
    }

}
