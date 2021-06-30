<?php
include 'model_mobil.php';
if (isset($_POST['submit_mobil'])) {
	$merktipe = $_POST['merktipe'];
	$thnkeluaran = $_POST['thnkeluaran']; 
	$tarif = $_POST['tarif'];
	$model = new Model();
	$model->insert_mobil($merktipe,$thnkeluaran, $tarif);
	header('location:mobil.php');
}
?>