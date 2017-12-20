<?php
        include "../connectpgsql.php";
        if(isset($_GET["cari"]) ){
                $search = $_GET["cari"];
                $result = pg_query($con,"SELECT * FROM barang WHERE nm_barang ILIKE '%$search%'");
            }else{
        $result = pg_query($con,"SELECT * FROM barang ");
            }
            while($row=pg_fetch_assoc($result)){
                    echo "<tr onclick=\"ModForm( $(this).children('.data') )\">";
                    echo "<td class='data'>".$row['kd_barang']."</td>";
                    echo "<td  class='data'>".$row['kd_jenis_barang_jenis_barang']."</td>";
                    echo "<td  class='data'>".$row['nm_barang']."</td>";
                    echo "<td  class='data'>".$row['hrg_beli']."</td>";
                    echo "<td   class='data'>".$row['hrg_jual']."</td>"; 
                    echo "<td   class='data'>".$row['stock_barang']."</td>";
                    echo "<td   class='data'>".$row['keterangan_barang']."</td>";
                    echo "</tr>";
                }
 
        pg_close($con);
        ?>