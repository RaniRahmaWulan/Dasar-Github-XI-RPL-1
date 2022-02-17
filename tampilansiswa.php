<?php

if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indonesia = $_POST['indo'];
    $inggris = $_POST['ingg'];
    $matematika = $_POST['mtk'];
    $produktif = $_POST['rpl'];
    $total=0;
    $rata=0;

  }
  ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tampilan Nilai</title>
    </head>
    <body>
      <center>

      
      <h1>Data Siswa Kelas XI RPL</h1>
          <br>
          <br>
          <table border =1>
           <tr>
              <th>NIS</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Bahasa Indonesia</th>
              <th>Bahasa  Inggris</th>
              <th>Matematika</th>
              <th>Produktif</th>
              <th>Total Nilai</th>
              <th>Rata-rata</th>
              <th>Grade</th>
            </tr>

            <?php 
               for($a=0; $a<count($nis); $a++){
            ?>

            <tr>
              <td><?php echo $nis[$a]; ?></td>
              <td><?php echo $nama[$a]; ?></td>
              <td><?php echo $kelas[$a]; ?></td>
              <td><?php echo $indonesia[$a]; ?></td>
              <td><?php echo $inggris[$a]; ?></td>
              <td><?php echo $matematika[$a]; ?></td>
              <td><?php echo $produktif[$a]; ?></td>
              <td><?php echo 
                  $total =$indonesia[$a] + $inggris[$a] + $matematika[$a] + $produktif[$a];
                  $total; ?></td>

              <td><?php $rata = $total / 4;
              echo $rata; ?></td>
              <td><?php if($rata <= 75 && $rata >= 0){
                echo "Tidak LULUS ";
              }

              else if($rata >= 75 && $rata <= 100){
                echo "LULUS ";
              }

              else{
                echo "ERROR ";
              }}

              ?>
                 </td>

            </tr>
               </center>
    </body>
    </html>