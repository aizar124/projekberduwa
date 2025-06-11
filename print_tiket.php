<?php
include "koneksi.php";
session_start();
$kursi = $_POST['kursi'];

$waktu= $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];

$id_movies = $_POST['id_movies'];
$sql = "SELECT * FROM movies WHERE id_movies = '$id_movies'";
$query = mysqli_query($koneksi, $sql);
$movies = mysqli_fetch_array($query);

$waktu= $_POST['waktu'];
$time = new DateTime($waktu);
$jam = $time->format('H');
$menit = $time->format('i');

$tanggal = $_POST['tanggal'];
$date = new DateTime($tanggal);

$tanggal_hari = $date->format('d');
$bulan = $date->format('M');
$tahun = $date->format('Y');

$total = $_POST['total'];

$kursi = $_POST['kursi'];
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
if($movies['genre']=='horor'){
  $g = 1;
}elseif($movies['genre']=='komedi'){
  $g = 2;
}else{
  $g = 3;
}

$username = $_SESSION['username'];
$sql2 = "SELECT * FROM users WHERE username='$username'";
$query2 = mysqli_query($koneksi,$sql2);
$users = mysqli_fetch_assoc($query2);

$id_bookings = $_POST['id_bookings'];
$f = 1;
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cetak Tiket - AZFATiCKET.XXI</title>
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
    a:hover {
      transform: scale(1.1);
    }
    a:hover::after {
      width: 100%;
    }
    a::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: black;
      transition: width 0.3s;
      position: absolute;
      bottom: -5px;
      left: 0;
    }
    a {
      margin: 0 18px;
      margin-top: 70px;
      text-decoration: none;
      color: black;
      font-weight: bold;
      font-size: 18px;
      position: relative;
      transition: all 0.4s ease;
    }
     


/* batas */
.ticket-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 40px;
}

.ticket-card {
  width: 300px;
  background-color: #c62828;
  color: black;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  text-align: center;
  
}

.poster{
   height: 50%; 
  
}
.poster img{
  width: 100%;
  height: 380px;
  border-radius: 10px;
  margin: 10px 0;
}

h2 {
  font-weight: bold;
}

.genre {
  font-weight: normal;
}

.subtext {
  font-size: 0.8em;
  color: #333;
  margin-bottom: 15px;
}

.ticket-details {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  font-size: 0.9em;
  text-align: left;
  margin-bottom: 10px;
}

hr {
  margin: 10px 0;
  border-top: 2px dashed #000;
}

.barcode {
  width: 100%;
  height: 60px;
  background-image: repeating-linear-gradient(
    to right,
    #000,
    #000 2px,
    transparent 2px,
    transparent 4px
  );
}

button {
  margin-top: 30px;
  background-color: red;
  color: white;
  font-weight: bold;
  padding: 12px 30px;
  border: none;
  border-radius: 20px;
  font-size: 1rem;
  cursor: pointer;
}

@media print {
  .navbar, button {
    display: none;
  }

  .ticket-wrapper {
    margin: 0;
    padding: 0;
  }

  body {
    background-color: white;
  }
}

  </style>
</head>
<body>
  <a href="home.php">MOVIE</a>

  <main class="ticket-wrapper">
    <div class="ticket-card" id="ticket">
      <h2>TICKET</h2>
      <div class="poster"><img  src="movie\<?= $movies['poster_image']?>" alt=""></div>
      <h3><?= strtoupper($movies['title']) ?> - <span class="genre"><?= $movies['genre'] ?></span></h3>
      <p class="subtext">Show this ticket at the entrance</p>

      <div class="ticket-details">
        <div>
          <strong>CINEMA</strong><br>AZFA BIOSKOP MALL XXI
        </div>
        <div>
          <strong>DATE</strong><br><?= $tanggal_hari ?> <?= $bulan ?> <?= $tahun ?>
        </div>
        <div>
          <strong>TIMER</strong><br><?= $jam ?>:<?= $menit ?>
        </div>
        <div>
          <strong>STUDIO</strong><br><?= $g ?>
        </div>
        <div>
          <strong>SEAT</strong><br><?php foreach ($kursi as $nomor) {
            $array_kursi = "{$nm_kursi[$nomor]}";
            if($i !== 1){
                echo ", ";
            }
            $i += 1;

            echo htmlspecialchars($array_kursi);
        } ?>
        </div>
        <div>
          <strong>COST</strong><br>Rp. <?= $total ?>
        </div>
        <div>
          <strong>ID ORDER</strong><br><?php foreach ($id_bookings as $id) {
          
            if($i !== 1){
                echo ", ";
            }
            $i += 1;

            echo htmlspecialchars($id);
        }?>
        </div>
      </div>

      <hr />
      <div class="barcode"></div>
    </div>

    <button onclick="window.print()">PRINT</button>
  </main>
</body>
</html>
