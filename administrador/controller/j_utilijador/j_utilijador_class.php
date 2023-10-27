<?php
class j_utilijador
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

    public function insert_utilijador($id_jerasaun_fdsl, $naran_kompletu, $email, $username, $password)
    {
        /*  $lista_jerasaun_fdsl = $this->check_utilijador($username);
        if (count($lista_jerasaun_fdsl) >= 0) {
            return header("location: ../../index.php?c=utilijador#Utilijador_jaexiste");
        } */

        $sql = $this->conn->prepare("INSERT INTO public.utilijador(id_jerasaun_fdsl, naran_kompletu, username, email, password)
            VALUES (:id_jerasaun_fdsl, :naran_kompletu, :username, :email, :pw);");
        $sql->bindParam(":id_jerasaun_fdsl", $id_jerasaun_fdsl);
        $sql->bindParam(":naran_kompletu", $naran_kompletu);
        $sql->bindParam(":username", $username);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":pw", $password);
        $sql->execute();
        return header("location: ../../index.php?c=utilijador");
    }

    function check_utilijador($username)
    {
        $sql = "SELECT count(id_rejistu) FROM view_jerasaun_fdsl WHERE id_rejistu = '$username'";
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function lista_utilizador()
    {
        $sql = $this->conn->prepare("SELECT * FROM public.utilijador");
        $res = pg_query($this->db_pgconnect, $sql) or die(pg_last_error($this->db_pgconnect));
        return $menbru = pg_fetch_array($res, null, PGSQL_ASSOC);
    }

    public function verifika_login_utilijador($id_rejistu, $password)
    {
        $query = $this->conn->prepare("SELECT * FROM public.view_utilijador WHERE id_rejistu = '$id_rejistu' AND password = '$password'");
        $query->execute();
        $menbru = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($menbru);
        if (count($menbru) > 0) {
            foreach ($menbru as $mbr) {
                $_SESSION['id_rejistu'] = $mbr['id_rejistu'];
                $_SESSION['password'] = $mbr['password'];
                $_SESSION['naran_kompletu'] = $mbr['naran_kompletu'];
                $_SESSION['email'] = $mbr['email'];
            }

            header('location: ../../index.php');
        } else {
            header('location:../../login.php#login_lalos');
        }
    }

    public function verifika_login()
    {
        if (empty($_SESSION['id_rejistu']) && empty($_SESSION['password'])) {
            header('location: login.php#seidauk_login');
        }
    }

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
}
