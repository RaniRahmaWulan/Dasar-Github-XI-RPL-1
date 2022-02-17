<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    <center>
    <h1>Data Nilai Ujian Kelas XI RPL<h1>
        <form method="POST" action="">
        <table>
            <tr>
                <td>Jumlah Siswa</td>
                <td>:</td>
                <td><input type ="number" name ="jumlah"></td>
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="save" value="Proses"></td>
            </tr>
        </table>
        </form>

        <?php
        if (isset($_POST['save'])) {
            $jumlah = $_POST['jumlah'];
            echo "<form method = 'POST'action= tampilansiswa.php>";

           for ($i = 1; $i <= $jumlah; $i++){
            echo "<br>";

           echo"<table>";
           echo "<tr>";
           echo "Data Siswa ke-$i ";
           echo "<br>";
           echo "<td>NIS</td>";
           echo "<td>:</td>";
           echo "<td><input type=number name=nis[]></td>";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Nama  </td>";
           echo "<td>:</td>";
           echo "<td><input type=text name=nama[]></td>";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Kelas  </td>";
           echo "<td>:</td>";
           echo "<td><input type=text name=kelas[]></td> ";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Bahasa Indonesia  </td>";
           echo "<td>:</td>";
           echo "<td><input type=number name=indo[]></td>";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Bahasa Inggris  </td>";
           echo "<td>:</td>";
           echo "<td><input type=number name=ingg[]></td>";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Matematika  </td>";
           echo "<td>:</td>";
           echo "<td><input type=number name=mtk[]></td>";
           echo "</tr>";

           echo "<tr>";
           echo "<td>Produktif  </td>";
           echo "<td>:</td>";
           echo "<td><input type=number name=rpl[]></td>";
           echo "</tr>";
           echo "</table>";

       }

   echo "<tr>";
   echo "<td></td>";
   echo "<input type=submit name=simpan value=Simpan>";
   echo "</tr>";
   echo "</form>";     
       }
       ?>
       </center>
</body>
    </html>