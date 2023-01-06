<?php
Class Connection{
    private $server = "mysql:host=mysql-cvven.alwaysdata.net;dbname=cvven_bdd_projet_hotel";
    private $username = "cvven";
    private $password = "G;d,Q7)=4wXj36qL";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $conn;

    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        }
        catch (PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
    public function close(){
        $this->conn = null;
    }
}
?>