<?php 

require_once("config.php");

$sql = new SQL("mysql:dbname=bdphp7;host=localhost", "root", "");

$result = $sql->select("SELECT * FROM tb_usuario order by deslogin", array());

echo json_encode($result);


 ?>