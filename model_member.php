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
 $sql = "SELECT * FROM member";
$bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if (!empty($baris)) {
 return $baris;
 }
 }
 
 
 public function insert_member( $nama, $alamat, $tlp){
            
    $sql = "INSERT INTO `member`( `nama`, `alamat`, `tlp`)
    VALUES ('$nama', '$alamat', '$tlp')";
    $this->conn->query($sql);
}

public function delete_member($member_id){ 
    $sql = "DELETE FROM member WHERE member_id='$member_id'";
    $this->conn->query($sql);
}

public function edit_member($member_id){
    $sql = "SELECT * FROM member WHERE member_id='$member_id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
        $baris = $obj;
    }
    return $baris;
}

public function hapus_member($member_id){ 
    $sql = "DELETE FROM member WHERE member_id='$member_id'";
    $this->conn->query($sql);
}

}
?>