<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
</head>
<body>
    <center>
    <h1>Menu Makanan & Minuman di Restoran<h1>
        <form method="POST" action="">
        <table>
            <tr>
                <td>Nama Pesanan</td>
                <td>:</td>
                <td><input type ="text" name ="nama"></td>
            </tr>

            <tr>
                <td>Jumlah Pesanan</td>
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
             $nama = $_POST['nama'];
             $pesanan = $_POST['jumlah'];
             echo "<form method = 'POST'action= larray3.php>";
             echo "";

            for ($i = 1; $i <= $pesanan; $i++){
                echo "<br>";
                echo "<br>";
                echo "<br>";
                

                echo "<tr>";
                echo "Pesanan ke-$i <br>";
            echo "<td>Pilih Paket : </td>";
            echo "<td><input type=text name=nama[] value=></td> <br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Harga : </td>";
            echo "<td><input type=number name=jumlah[] value=></td>";
            echo "<br>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Jumlah : </td>";
            echo "<td><input type=number name=jml[] value=></td> <br>";
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