<?php
class dbinfo
{
    public $host;
    public $user;
    public $pass;
    public $db;
    public function getdbinfo($h,$u,$p,$d)
    {
        $this->host=$h;
        $this->user=$u;
        $this->pass=$p;
        $this->db=$d;
        $con=mysqli_connect($this->host,$this->user,$this->pass,
        $this->db);
        if($con)
        {
            echo"connection done";
        }
        else {
        echo"error";
        }
        

    }
}
$dbcon=new dbinfo();
if(isset($_POST['save']))
{
    $dbcon->getdbinfo($_POST['host'],
                    $_POST['user'],
                    $_POST['pass'],
                      $_POST['db']);
}
else
{
    echo"error....";
}

?>