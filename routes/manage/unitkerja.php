<?php
include "../connectpgsql.php";
session_start();

if(isset($_POST["submit"])){
    
    $kd_unit_kerja = $_POST["kd_unit_kerja"];
    $unit_kerja = $_POST["unit_kerja"];

    if($_POST["submit"] == "insert"){

    $result = pg_query($con,"INSERT INTO unit_kerja(kd_unit_kerja,unit_kerja) VALUES('$kd_unit_kerja','$unit_kerja');");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data created successfully\n";
        }

    }else if($_POST["submit"] == "update"){
        $result = pg_query($con,"UPDATE unit_kerja SET  unit_kerja = '$unit_kerja'  WHERE kd_unit_kerja = '$kd_unit_kerja' ; ");
        
        if( pg_affected_rows($result) == 0 ){
           //echo pg_last_error($db);
           echo "Data Does not exist";
        } else {
           echo "Data Updated successfully\n";
        }

    }if($_POST["submit"] == "delete"){
        $result = pg_query($con,"DELETE FROM unit_kerja WHERE kd_unit_kerja = '$kd_unit_kerja' ; ");
        
        if(!$result) {
           echo pg_last_error($db);
        } else {
           echo "Data Deleted successfully\n";
        }
    }
}





?>