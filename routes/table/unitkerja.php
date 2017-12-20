<?php
        include "../connectpgsql.php";
        $result = pg_query($con,"SELECT * FROM unit_kerja ");
                
            while($row=pg_fetch_assoc($result)){
                    echo "<tr onclick=\"ModForm( $(this).children('.data') )\">";
                    echo "<td id='kd_unit_kerja' class='data'>".$row['kd_unit_kerja']."</td>";
                    echo "<td id='unit_kerja' class='data'>".$row['unit_kerja']."</td>";                             
                    echo "</tr>";
                            }

         pg_close($con);
                    ?>