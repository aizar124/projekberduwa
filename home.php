<?php
include "koneksi.php";
session_start();

// if(!isset($_SESSION['username'])){
//   $username = "AZFATICKET.XXI!";
//   exit;
// }else{
//   $username = $_SESSION['username']."!";
//   exit;
// }


?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AZFATICKET.XXI</title>
  <style>
    /* daftar font */
    @font-face {
            src: url('font/KeaniaOne.ttf') format('truetype');
            font-family: 'KeaniaOne';
            font-weight: normal;
            font-style: normal;
        }
    /* Reset dasar */
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

    /* Welcome section */
    .welcome {
      font-family: "KeaniaOne";
      text-align: center;
      font-size: 34px;
      margin: 30px 0;
    }

    .voucher-container {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-bottom: 40px;
    }

    .voucher {
      width: 180px;
      height: 100px;
      background-color: #f8dcdc;
      border-radius: 10px;
    }

    /* Movie selection */
    .movie-section {
      text-align: center;
      margin-bottom: 40px;
    }

    .movie-section h2 {
      font-size: 28px;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .movie-list {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
    }

    .movie {
      width: 140px;
      height: 210px;
      background-color: #ddd;
      border-radius: 8px;
    }

    /* Update section */
    .update-section {
      text-align: center;
      margin-bottom: 40px;
    }

    .update-section h2 {
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .about-us {
      width: 60%;
      margin: 0 auto;
      font-size: 14px;
      line-height: 1.6;
    }

    /* Footer */
    footer {
      background-color: #d41d1d;
      color: white;
      padding: 30px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .social-media, .download, .contact {
      width: 30%;
    }

    .social-media h4,
    .download h4,
    .contact h4 {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .social-media p,
    .contact p {
      margin-bottom: 5px;
      font-size: 14px;
    }

    .download img {
      width: 120px;
      margin-right: 10px;
    }

    .copyright {
      width: 100%;
      text-align: center;
      font-size: 12px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- Header -->
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

  <!-- Welcome -->
  <div class="welcome">welcome to </div>

  <!-- Voucher Section -->
  <div class="voucher-container">
    <div class="voucher"></div>
    <div class="voucher"></div>
    <div class="voucher"></div>
    <div class="voucher"></div>
  </div>

  <!-- Movie Section -->
  <div class="movie-section">
    <h2>MOVIE SELECTION</h2>
    <div class="movie-list">
      <div class="movie"></div>
      <div class="movie"></div>
      <div class="movie"></div>
      <div class="movie"></div>
      <div class="movie"></div>
    </div>
  </div>

  <!-- Update Section -->
  <div class="update-section">
    <h2>AZFA UPDATE</h2>
    <h3>About Us</h3>
    <p class="about-us">
      Azfa Bioskop adalah tempat terbaik untuk menikmati film dengan pengalaman menonton yang nyaman, modern, dan seru. Kami menyajikan berbagai film pilihan dari dalam dan luar negeri, lengkap dengan teknologi layar dan suara terkini. <br><br>
      Bukan sekadar bioskop, Azfa adalah ruang berkumpul untuk keluarga, sahabat, dan komunitas pecinta film. Kami hadir untuk menghadirkan hiburan berkualitas dan momen tak terlupakan di setiap tayangan. <br><br>
      AZFATICKET.XXI – Tempat cerita dimulai!
    </p>
  </div>

  <!-- Footer -->
  <footer>
    <div class="social-media">
      <h4>social media</h4>
      <p>@azfabioskop_1indonesia</p>
      <p>@azfabioskopindonesia</p>
    </div>
    <div class="download">
      <h4>Download by</h4>
      <img src="#" alt="Google Play (placeholder)">
      <img src="#" alt="App Store (placeholder)">
    </div>
    <div class="contact">
      <h4>contact me</h4>
      <p>Jl. Kenyamanan Blok A no. 4 Jakarta pusat</p>
      <p>+62 857 8663 7284</p>
      <p>azfaticket@gmail.com</p>
    </div>
    <div class="copyright">
      COPYRIGHT 2025. AZFA XXI ALL RIGHTS RESERVED.
    </div>
  </footer>

</body>
</html>
