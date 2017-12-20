<?php
include "../connectpgsql.php";
session_start();

if(isset($_POST["submit"])){
    $kd_pengguna = $_POST["kd_pengguna"];
    $nm_pengguna = $_POST["nm_pengguna"];
    $nm_login = $_POST["nm_login"];
    $pass_login = $_POST["pass_login"];
    $level = $_POST["level"];
    

    if($_POST["submit"] == "insert"){

    $result = pg_query($con,"INSERT INTO pengguna(kd_pengguna,nm_pengguna,nm_login,pass_login,level) VALUES('$kd_pengguna','$nm_pengguna','$nm_login','$pass_login','$level');");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data created successfully\n";
        }

    }else if($_POST["submit"] == "update"){
        $result = pg_query($con,"UPDATE pengguna SET kd_pengguna = '$kd_pengguna',nm_pengguna = '$nm_pengguna',nm_login = '$nm_login',pass_login = '$pass_login',level = '$level' WHERE kd_pengguna = '$kd_pengguna' ; ");
        
        if( pg_affected_rows($result) == 0 ){
           //echo pg_last_error($db);
           echo "Data Does not exist";
        } else {
           echo "Data Updated successfully\n";
        }

    }if($_POST["submit"] == "delete"){
        $result = pg_query($con,"DELETE FROM pengguna WHERE kd_pengguna = '$kd_pengguna' ; ");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data Deleted successfully\n";
        }
    }
}





?>