<?php
include_once "../controller/config.php";
$database = new Config();
$db = $database->getConnection();

include_once '../controller/kriteria.inc.php';
$pro = new kriteria($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete()){
	echo "<script>location.href='kriteria.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='kriteria.php';</script>";
		
}
?>
