<?php
include "../connectpgsql.php";
session_start();

if(isset($_POST["submit"])){
    
    $kd_barang = $_POST["kd_barang"];
    $kd_jenis_barang_jenis_barang = $_POST["kd_jenis_barang_jenis_barang"];
    $nm_barang = $_POST["nm_barang"];
    $hrg_beli = $_POST["hrg_beli"];
    $hrg_jual = $_POST["hrg_jual"];
    $stock_barang = $_POST["stock_barang"];
    $keterangan_barang = $_POST["keterangan_barang"];

echo "jhh".$stock_barang.$keterangan_barang;
    if($_POST["submit"] == "insert"){

    $result = pg_query($con,"INSERT INTO barang( kd_barang, kd_jenis_barang_jenis_barang, nm_barang, hrg_beli, hrg_jual, stock_barang, keterangan_barang) VALUES('$kd_barang' ,'$kd_jenis_barang_jenis_barang', '$nm_barang','$hrg_beli', '$hrg_jual', '$stock_barang','$keterangan_barang' );");
        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data created successfully\n";
        }

    }else if($_POST["submit"] == "update"){
        $result = pg_query($con,"UPDATE barang SET kd_jenis_barang_jenis_barang = '$kd_jenis_barang_jenis_barang', nm_barang = '$nm_barang', hrg_beli = $hrg_beli, hrg_jual = $hrg_jual, stock_barang = $stock_barang, keterangan_barang = '$keterangan_barang' WHERE kd_barang = '$kd_barang' ; ");
        
        if( pg_affected_rows($result) == 0 ){
           //echo pg_last_error($db);
           echo "Data Does not exist";
        } else {
           echo "Data Updated successfully\n";
        }

    }if($_POST["submit"] == "delete"){
        $result = pg_query($con,"DELETE FROM barang WHERE kd_barang = '$kd_barang' ; ");
        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data Deleted successfully\n";
        }
    }
}





?>