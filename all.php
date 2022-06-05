<?php 
require_once 'index.php';

$statement = $dbConn -> query("select * from buku");
$statement->setfetchMode(PDO::FETCH_OBJ);
$result = $statement->fetchALL();
header("Content-Type: application/json; charset=UTF-8");
echo json_encode($result);

?>