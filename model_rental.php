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
 $sql = "SELECT  m.member_id, b.mobil_id, r.lamarental FROM member m,mobil b,rental r where m.member_id = r.member_id ";

 
$bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if (!empty($baris)) {
 return $baris;
 }
 }
 }
 ?>