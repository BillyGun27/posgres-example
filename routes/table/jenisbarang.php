<?php
        include "../connectpgsql.php";
        $result = pg_query($con,"SELECT * FROM jenis_barang ");
    
            while($row=pg_fetch_assoc($result)){
                    echo "<tr onclick=\"ModForm( $(this).children('.data') )\">";
                    echo "<td id='kd_jenis_barang' class='data'>".$row['kd_jenis_barang']."</td>";
                    echo "<td id='jenis_barang' class='data'>".$row['jenis_brg']."</td>";                             
                    echo "</tr>";
                }
        
                pg_close($con);
                    ?>