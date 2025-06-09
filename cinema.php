<?php
include "koneksi.php";

$sql = "SELECT * FROM movies WHERE genre = 'horor'";
$query = mysqli_query($koneksi, $sql);

$sql2 = "SELECT * FROM movies WHERE genre = 'komedi'";
$query2 = mysqli_query($koneksi, $sql2);

$sql3 = "SELECT * FROM movies WHERE genre = 'romance'";
$query3 = mysqli_query($koneksi, $sql3);

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AZFATICKET.XXI</title>
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
    h1 {
      text-align: center;
      margin: 20px 0 10px;
      font-size: 24px;
    }
    hr {
      width: 300px;
      margin: 0 auto 30px;
      border-top: 2px solid #000;
    }
    .studio {
      margin: 30px;
    }
    .studio h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }
    .movie-list {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
    }
    .movie-list img {
      width: 130px;
      height: 190px;
      object-fit: cover;
      border-radius: 10px;
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

  <h1>welcome cinema studio</h1>
  <hr>

  <div class="studio">
    <h2>STUDIO 1</h2>
    <div class="movie-list">
        <?php while($horor = mysqli_fetch_assoc($query)){ ?>
            <a href="detail_film.php?id_movies=<?= $horor['id_movies'] ?>"><img src="movie\<?= $horor['poster_image']?>" alt=""></a>
        <?php } ?>
    </div>
  </div>

  <div class="studio">
    <h2>STUDIO 2</h2>
    <div class="movie-list">
        <?php while($komedi = mysqli_fetch_assoc($query2)){ ?>
            <a href="detail_film.php?id_movies=<?= $komedi['id_movies'] ?>"><img src="movie\<?= $komedi['poster_image']?>" alt=""></a>
        <?php } ?>
    </div>
  </div>

  <div class="studio">
    <h2>STUDIO 3</h2>
    <div class="movie-list">
        <?php while($romance = mysqli_fetch_assoc($query3)){ ?>
            <a href="detail_film.php?id_movies=<?= $romance['id_movies'] ?>"><img src="movie\<?= $romance['poster_image']?>" alt=""></a>
        <?php } ?>
    </div>
  </div>
</body>
</html>
