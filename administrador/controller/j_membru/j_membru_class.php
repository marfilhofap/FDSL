<?php
class j_membru
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

    // Materia
    public function hatama_membru_foun($naran_kompletu, $sexu, $data_moris, $id_tipu_jerasaun, $nu_telemovel, $email, $id_rejistu)
    {
        $sql = $this->conn->prepare("INSERT INTO identidade_pesoal (naran_kompletu, sexu, data_moris, nu_telemovel, email, id_rejistu) VALUES (:naran_kompletu, :sexu, :data_moris, :nu_telemovel, :email, :id_rejistu) returning id_identidade");
        $sql->bindParam(":naran_kompletu", $naran_kompletu);
        $sql->bindParam(":sexu", $sexu);
        $sql->bindParam(":data_moris", $data_moris);
        $sql->bindParam(":nu_telemovel", $nu_telemovel);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":id_rejistu", $id_rejistu);
        $sql->execute();

        $id_identidade = $sql->fetchColumn();

        $sql_1 = $this->conn->prepare("INSERT INTO jerasaun_fdsl (id_identidade, id_tipu_jerasaun) VALUES (:id_identidade, :id_tipu_jerasaun)");
        $sql_1->bindParam(":id_identidade", $id_identidade);
        $sql_1->bindParam(":id_tipu_jerasaun", $id_tipu_jerasaun);
        $sql_1->execute();
        return header("location: ../../index.php?c=membru_klik&id=$id_tipu_jerasaun");
    }

    public function generate_id_rejistu($id_tipu_jerasaun)
    {
        try {
            $sql = "SELECT * FROM jerasaun_fdsl where id_tipu_jerasaun='$id_tipu_jerasaun'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function check_jerasaun($id_tipu_jerasaun)
    {
        try {
            $sql = "SELECT * FROM tipu_jerasaun where id_tipu_jerasaun='$id_tipu_jerasaun'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function jerasaun_fdsl($id_jerasaun_fdsl, $id_tipu_estrutura_fdsl, $data_inisiu)
    {
        $sql = $this->conn->prepare("INSERT INTO estrutura_fdsl (id_jerasaun_fdsl, id_tipu_estrutura_fdsl, data_inisiu) VALUES (:id_jerasaun_fdsl, :id_tipu_estrutura_fdsl, :data_inisiu)");
        $sql->bindParam(":id_jerasaun_fdsl", $id_jerasaun_fdsl);
        $sql->bindParam(":id_tipu_estrutura_fdsl", $id_tipu_estrutura_fdsl);
        $sql->bindParam(":data_inisiu", $data_inisiu);



        $sql->execute();
        return header("location: ../../index.php?c=estrutura");
    }

    public function view_estrutura_fdsl()
    {
        $sql = "SELECT i.naran_kompletu,
        i.sexu,
        i.id_rejistu,
        i.nu_telemovel,
        i.email,    
        i.data_moris,
        tj.tipu_jerasaun,
        te.tipu_estrutura_fdsl,
        e.data_inisiu,
        e.data_fim
       FROM estrutura_fdsl e
         JOIN jerasaun_fdsl j ON j.id_jerasaun_fdsl = e.id_jerasaun_fdsl
         JOIN identidade_pesoal i ON i.id_identidade = j.id_identidade
         JOIN tipu_jerasaun tj ON tj.id_tipu_jerasaun = j.id_tipu_jerasaun
         JOIN tipu_estrutura_fdsl te ON te.id_tipu_estrutura_fdsl = e.id_tipu_estrutura_fdsl";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
