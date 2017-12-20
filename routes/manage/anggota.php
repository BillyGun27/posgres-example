<?php
include "../connectpgsql.php";
session_start();

if(isset($_POST["submit"])){
    
    $kd_anggota = $_POST["kd_anggota"];
    $kd_unit_kerja_unit_kerja = $_POST["kd_unit_kerja_unit_kerja"];
    if(isset($_POST["npp"])){
        $npp = $_POST["npp"]; 
    }else{
        $npp = 0 ;
    }      
    $nm_anggota= $_POST["nm_anggota"];
    $tmp_lahir = $_POST["tmp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $tgl_jadi_anggota = $_POST["tgl_jadi_anggota"];

    if($_POST["submit"] == "insert"){

    $result = pg_query($con,"INSERT INTO public.\"Anggota\"(kd_anggota, kd_unit_kerja_unit_kerja, npp, nm_anggota, tmp_lahir, tgl_lahir, jenis_kelamin, alamat, tgl_jadi_anggota) VALUES('$kd_anggota','$kd_unit_kerja_unit_kerja','$npp','$nm_anggota','$tmp_lahir','$tgl_lahir','$jenis_kelamin','$alamat','$tgl_jadi_anggota');");
        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data created successfully\n";
        }

    }else if($_POST["submit"] == "update"){
        $result = pg_query($con,"UPDATE public.\"Anggota\" SET  kd_unit_kerja_unit_kerja = '$kd_unit_kerja_unit_kerja' , npp = '$npp', nm_anggota = '$nm_anggota', tmp_lahir = '$tmp_lahir' , tgl_lahir ='$tgl_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', tgl_jadi_anggota = '$tgl_jadi_anggota' WHERE kd_anggota = '$kd_anggota' ; ");
        
        if( pg_affected_rows($result) == 0 ){
           //echo pg_last_error($db);
           echo "Data Does not exist";
        } else {
           echo "Data Updated successfully\n";
        }

    }if($_POST["submit"] == "delete"){
        $result = pg_query($con,"DELETE FROM public.\"Anggota\" WHERE kd_anggota = '$kd_anggota' ; ");
        
        if(!$result) {
           echo pg_last_error($con);
        } else {
           echo "Data Deleted successfully\n";
        }
    }
}





?>