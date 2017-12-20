<?php
        include "routes/connectpgsql.php";
        $result = pg_query($con,"SELECT * FROM unit_kerja ");
                
            while($row=pg_fetch_assoc($result)){  
                    echo "<option value=\"".$row['kd_unit_kerja']."\">".$row['unit_kerja']."</option>";
                    }
                    
?>