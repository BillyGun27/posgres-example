<?php
        include "routes/connectpgsql.php";
        $result = pg_query($con,"SELECT * FROM jenis_barang ");
                
            while($row=pg_fetch_assoc($result)){  
                    echo "<option value=\"".$row['kd_jenis_barang']."\">".$row['jenis_brg']."</option>";
                    }
                    
?>