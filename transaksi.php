<?php
include "koneksi.php";

if(!isset($_POST['id_movies']) || !isset($_POST['tanggal']) || !isset($_POST['waktu']) || !isset($_POST['kursi'])){
  header("location:jadwal_film.php");
}
$id_movies = $_POST['id_movies'];
$sql = "SELECT * FROM movies WHERE id_movies = '$id_movies'";
$query = mysqli_query($koneksi, $sql);
$movies = mysqli_fetch_assoc($query);

$tanggal = $_POST['tanggal'];
$date = new DateTime($tanggal);

$hari = $date->format('l');
$tanggal_hari = $date->format('d');
$bulan = $date->format('F');
$tahun = $date->format('Y');

$waktu = new DateTime($_POST['waktu']);

$jam = $waktu->format('H');
$menit = $waktu->format('i');

$kursi = $_POST['kursi']; 
$jumlah_kursi = count($kursi);
$total = 35000 * $jumlah_kursi;
    

$nm_kursi = [
    '1' => 'A1', '2' => 'A2', '3' => 'A3', '4' => 'A4', '5' => 'A5', '6' => 'A6', '7' => 'A7', '8' => 'A8', '9' => 'A9', '10' => 'A10',
     '11' => 'A11', '12' => 'A12', '13' => 'B1', '14' => 'B2', '15' => 'B3', '16' => 'B4', '17' => 'B5', '18' => 'B6', '19' => 'B7', '20' => 'B8', 
     '21' => 'B9', '22' => 'B10', '23' => 'B11', '24' => 'B12', '25' => 'B13' , '26' => 'B14', '27' => 'C1', '28' => 'C2', '29' => 'C3',
     '30' => 'C4', '31' => 'C5', '32' => 'C6', '33' => 'C7', '34' => 'C8', '35' => 'C9', '36' => 'C10', '37' => 'C11', '38' => 'C12',
     '39' => 'D1', '40' => 'D2', '41' => 'D3', '42' => 'D4', '43' => 'D5', '44' => 'D6', '45' => 'D7', '46' => 'D8', '47' => 'D9', 
     '48' => 'D10', '49' => 'D11', '50' => 'E1', '51' => 'E2', '52' => 'E3', '53' => 'E4', '54' => 'E5', '55' => 'E6', '56' => 'E7', 
     '57' => 'E8', '58' => 'E9', '59' => 'E10', '60' => 'E11' , '61' => 'E12', '62' => 'E13'
];
$i = 1;

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AZFATiCKET.XXI</title>
  <style>
    body {
      margin: 0;
      background-color: #ffffff;
    }
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
        header {
      background-color: #f19c9c;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 24px;
    }
    .logo img {
      margin-right: 10px;
      height: 9%;
      width: 9%;
    }

    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #000;
      font-weight: bold;
    }

    .profile-icon {
      width: 40px;
      height: 40px;
      background-image: url('userputih.jpg');
      background-size: contain;
      border-radius: 50%;
    }

.ticket-container {
  display: flex;
  margin: 40px auto;
  width: 80%;
  background-color: #f3a5aa;
  border-radius: 30px;
  padding: 20px;
  align-items: center;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.poster img {
  width: 250px;
  border-radius: 20px;
}

.ticket-info {
  margin-left: 30px;
  color: #333;
}

.ticket-info h2 {
  font-family: 'Courier New', monospace;
  color: #6b6b6b;
}

.ticket-info h3 {
  margin-top: 5px;
  font-size: 1.5em;
}

.transaction-details {
  margin-top: 20px;
}

.transaction-details p {
  margin: 5px 0;
}

.transaction-details .total {
  margin-top: 10px;
  font-weight: bold;
}

input[type="submit"] {
  background-color: #ff5a5a;
  color: white;
  padding: 10px 20px;
  border: none;
  margin-top: 20px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
}

  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo_web.png" alt="" />
      AZFATICKET.XXI</div>
    <nav>
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
    </nav>
    <div class="profile-icon"></div>
  </header>

  <main class="ticket-container">
    <div class="poster">
      <img src="movie\<?= $movies['poster_image']?>" alt="">
    </div>
    <div class="ticket-info">
      <h2>AZFATiCKET.XXI</h2>
      <h3><?= strtoupper($movies['title'])?></h3>
      <p>BIOSKOP CINEMA XXI AZFA</p>
      <p><?= $hari ?>, <?=$tanggal_hari ?> <?= $bulan ?> <?= $tahun ?> <?= $jam ?>.<?= $menit ?></p>
      <hr />
      <div class="transaction-details">
        <p><strong>Detail Transaksi</strong></p>
        <p><?= $jumlah_kursi ?> Tiket <span class="seats"><?php foreach ($kursi as $nomor) {
            $array_kursi = "{$nm_kursi[$nomor]}";
            if($i !== 1){
                echo ", ";
            }
            $i += 1;

            echo htmlspecialchars($array_kursi);
        } ?></span></p>
        <p>KURSI REGULER <span>Rp. 35.000 x <?= $jumlah_kursi ?></span></p>
        <p class="total">Total Pembayaran: <strong>Rp. <?= $total ?></strong></p>
      </div>
      <form action="metode_payment.php" method="post">
        <input type="submit" value="CONFIRM PAYMENT">
      </form>
    </div>
  </main>

  
</body>
</html>
