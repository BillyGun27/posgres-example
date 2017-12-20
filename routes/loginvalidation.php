<?php
include "connectpgsql.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$result = pg_query($con,"SELECT * FROM pengguna WHERE nm_login = '$username' ");

if( pg_num_rows($result) ){
    while($row=pg_fetch_assoc($result)){
            if($row['pass_login'] == $password){
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row['kd_pengguna'];
                $_SESSION["nama"] = $row['nm_pengguna'];
              header('Location: ../main.php');
            }else{
                header('Location: ../index.php?auth=!password');
            }
        }
}else{
    header('Location: ../index.php?auth=!email');
}

pg_close($con);
?>