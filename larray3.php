<?php

if(isset($_POST['simpan'])){
    $pilih = $_POST['nama'];
    $harga = $_POST['jumlah'];
    $jumlah = $_POST['jml'];
    $total=0;
    $totalb=0;

  }
  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tampilan Restoran</title>
    </head>
    <body>
      <center>
      <h1>Rekap Transaksi</h1>
          <br>
          <br>
          <table border =1>
           <tr>
              <th>Menu</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Total</th>
            </tr>

            <?php 
               for($a=0; $a<count($pilih); $a++){
            ?>

            <tr>
              <td><?php echo $pilih[$a]; ?></td>
              <td><?php echo $harga[$a]; ?></td>
              <td><?php echo $jumlah[$a]; ?></td>
              <td><?php echo 
                  $total =$harga[$a] * $jumlah[$a];
                  $totalb += $total;
                  $total;} ?></td>

            </tr>

            <tr>
              <td colspan= '3'> Total Bayar </td>
              <td><?php 
              echo $totalb; 
              ?></td>
            </tr>
               </center>
    </body>
    </html>


            