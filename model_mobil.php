<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function tampil_data()
 {
 $sql = "SELECT * FROM mobil";
$bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if (!empty($baris)) {
 return $baris;
 }
 }


 public function insert_mobil($merktipe ,$thnkeluaran, $tarif){
            
    $sql = "INSERT INTO `mobil`(`merktipe`, `thnkeluaran`, `tarif`) VALUES 
     ('$merktipe','$thnkeluaran', '$tarif')";
    $this->conn->query($sql);
}
 }
 ?>