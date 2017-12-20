<?php
include "connectpgsql.php";
session_start();

$oldPassword = $_POST["password_lama"];
$newPassword = $_POST["password_baru"];
$id = $_SESSION["id"];
$result = pg_query($con,"UPDATE pengguna SET pass_login = '$newPassword' WHERE kd_pengguna = '$id'  AND pass_login = '$oldPassword';");

if( pg_affected_rows($result) > 0 ){
    header('Location: ../user.php?change=succeed');
}else{
    header('Location: ../user.php?change=fail');
}

pg_close($con);
?>