<?php
include 'model_member.php';
if (isset($_POST['submit_member'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$model = new Model();
	$model->insert_member($nama, $alamat, $tlp);
	header('location:member.php');
}
?>