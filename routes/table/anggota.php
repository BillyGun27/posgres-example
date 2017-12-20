<?php
        include "../connectpgsql.php";
        if(isset($_GET["cari"]) ){
            $search = $_GET["cari"];
            $result = pg_query($con,"SELECT * FROM public.\"Anggota\" WHERE nm_anggota ILIKE '%$search%'");
        }else{
            $result = pg_query($con,"SELECT * FROM public.\"Anggota\" ");
        }
        
    
            while($row=pg_fetch_assoc($result)){
                    echo "<tr onclick=\"ModForm( $(this).children('.data') )\">";
                    echo "<td id='kd_anggota' class='data'>".$row['kd_anggota']."</td>";
                    echo "<td id='kd_unit_kerja' class='data'>".$row['kd_unit_kerja_unit_kerja']."</td>";
                    echo "<td id='npp' class='data'>".$row['npp']."</td>";
                    echo "<td id='nm_anggota' class='data'>".$row['nm_anggota']."</td>";
                    echo "<td id='tmp_lahir'  class='data'>".$row['tmp_lahir']."</td>"; 
                    echo "<td id='tgl_lahir'  class='data'>".$row['tgl_lahir']."</td>";
                    echo "<td id='jenis_kelamin'  class='data'>".$row['jenis_kelamin']."</td>";
                    echo "<td id='alamat'  class='data'>".$row['alamat']."</td>"; 
                    echo "<td id='tgl_jadi_anggota'  class='data'>".$row['tgl_jadi_anggota']."</td>"; 

                    echo "</tr>";
                }
    
                pg_close($con);
                    ?>