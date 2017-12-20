<?php
include "../connectpgsql.php";
session_start();

if(isset($_POST["submit"])){
    
    $kd_jenis_barang = $_POST["kd_jenis_barang"];
    $jenis_barang = $_POST["jenis_barang"];

    if($_POST["submit"] == "insert"){

    $result = pg_query($con,"INSERT INTO jenis_barang(kd_jenis_barang,jenis_brg) VALUES('$kd_jenis_barang','$jenis_barang');");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data created successfully\n";
        }

    }else if($_POST["submit"] == "update"){
        $result = pg_query($con,"UPDATE jenis_barang SET  jenis_brg = '$jenis_barang'  WHERE kd_jenis_barang = '$kd_jenis_barang' ; ");
        
        if( pg_affected_rows($result) == 0 ){
           //echo pg_last_error($db);
           echo "Data Does not exist";
        } else {
           echo "Data Updated successfully\n";
        }

    }if($_POST["submit"] == "delete"){
        $result = pg_query($con,"DELETE FROM jenis_brg WHERE kd_jenis_barang = '$kd_jenis_barang' ; ");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data Deleted successfully\n";
        }
    }
}





?>