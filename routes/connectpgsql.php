<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = TMJ_JAYA";
   $credentials = "user = postgres password=273109";

   $con = pg_connect( "$host $port $dbname $credentials"  );
   if(!$con) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>