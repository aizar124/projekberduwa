<?php
include "koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AZFA - About & Contact</title>
  <style>
    /* ======== RESET DAN DASAR ========== */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #fff;
      color: #333;
      animation: fadeInBody 1s ease;
    }

    @keyframes fadeInBody {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    a {
      text-decoration: none;
      color: inherit;
    }
    /* === NAVBAR === */
    header {
      background-color: #c62828;
      color: white;
      padding: 25px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      border-radius: 0 0 50px 50px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
      animation: navFadeIn 1s ease-in-out;
    }

    @keyframes navFadeIn {
      0% {
        opacity: 0;
        transform: translateY(-50px) scale(0.9);
      }
      100% {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .logo {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 28px;
    }

    .logo img {
      margin-right: 10px;
      height: 50px;
      width: auto;
    }

    nav a {
      margin: 0 18px;
      text-decoration: none;
      color: white;
      font-weight: bold;
      font-size: 18px;
      position: relative;
      transition: all 0.4s ease;
    }

    nav a::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: white;
      transition: width 0.3s;
      position: absolute;
      bottom: -5px;
      left: 0;
    }

    nav a:hover::after {
      width: 100%;
    }

    nav a:hover {
      transform: scale(1.1);
    }

    .profile img {
      width: 50px;
      height: 50px;
      background-size: contain;
      border-radius: 50%;
      cursor: pointer;

    }
    .profile a{
      text-decoration: none;
    }

    .dropdown {
      position: absolute;
      top: 65px;
      right: 0;
      background: rgba(255,255,255,0.9);
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      backdrop-filter: blur(8px);
      padding: 10px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: 0.3s ease;
      z-index: 100;
    }

    .dropdown.active {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .dropdown button {
      display: block;
      background: linear-gradient(to right, #ff8a80, #ff5252);
      color: white;
      font-size: 18px;
      font-weight: 500;
      padding: 12px 20px;
      margin: 10px 0;
      width: 200px;
      border: none;
      border-radius: 12px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .dropdown button:hover {
      background: linear-gradient(to right, #ff1744, #e53935);
      transform: scale(1.05);
    }

    /* ========= LAYOUT KONTAK ========== */
    .container {
      display: flex;
      gap: 30px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
      animation: slideUp 1s ease;
    }

    @keyframes slideUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .card {
      flex: 1;
      background-color: #fff0f0;
      border: 1px solid #ffcccc;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card h2 {
      margin-bottom: 10px;
      color: #b30000;
    }

    .card p, .card li {
      margin-bottom: 8px;
    }

    /* ====== FORMULIR ====== */
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
      background-color: #fff;
      transition: border 0.3s;
    }

    form input:focus, form textarea:focus {
      border: 1px solid #b30000;
      outline: none;
    }

    form button {
      background-color: #b30000;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    form button:hover {
      background-color: #800000;
    }

    /* ====== IKON KONTAK ====== */
    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 20px;
    }

    .contact-icon {
      width: 35px;
      height: 35px;
      background-color: #b30000;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
    }

    /* ABOUT SECTION STYLES */
    .about-section {
      background: linear-gradient(to bottom right, #ffffff, #fff5f5);
      padding: 60px 20px;
      color: #800000;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .about-section h1 {
      text-align: center;
      font-size: 3rem;
      margin-bottom: 50px;
      color: #b30000;
      position: relative;
    }

    .about-section h1::after {
      content: "";
      display: block;
      width: 100px;
      height: 4px;
      background: #ff4d4d;
      margin: 10px auto 0;
      border-radius: 4px;
    }

    .about-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 50px;
      max-width: 1300px;
      margin: auto;
    }

    .profile-box {
      background: #fffafa;
      border: 2px solid #ffe0e0;
      border-radius: 25px;
      width: 420px;
      padding: 40px 30px;
      text-align: center;
      box-shadow: 0 8px 25px rgba(255, 102, 102, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s;
      animation: floatUp 1s ease forwards;
    }

    .profile-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(238, 15, 15, 0.96);
    }

    @keyframes floatUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .profile-image {
      width: 130px;
      height: 130px;
      margin: 0 auto 20px;
      background-color:rgb(237, 26, 26);
      background-image: url('https://via.placeholder.com/130');
      background-size: cover;
      background-position: center;
      border-radius: 50%;
      border: 5px solidrgb(250, 16, 16);
      animation: pulse 2.5s infinite ease-in-out;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .profile-name {
      font-size: 1.7rem;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-role {
      font-size: 1.2rem;
      color: #cc0000;
      margin-bottom: 25px;
    }

    .about-button {
      padding: 12px 24px;
      background-color: #ff4d4d;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s;
    }

    .about-button:hover {
      background-color: #e60000;
      transform: scale(1.05);
    }

    /* ===== RESPONSIF ===== */
    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .profile-box {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <header>
        <div class="logo">
            <img src="logo_web.png" alt="AZFATICKET Logo">
            AZFATICKET.XXI
        </div>
        <nav>
            <a href="home.php">MOVIE</a>
            <a href="cinema.php">CINEMA</a>
            <a href="contact_azfa.php">CONTACT</a>
        </nav>
        <div class="profile" onclick="toggleDropdown()">
        <img src="userputih.jpg" alt="">
        <div class="dropdown" id="dropdownMenu">
            <?php if(isset($_SESSION['username'])){ ?>
                <a href="profil_azfa.php"><button>Profil <?= $_SESSION['username'] ?></button></a>
                <a href="logout.php"><button>Logout</button></a>
            <?php }else{ ?>
                <a href="login.php"><button>Sign In</button></a>
                <a href="register.php"><button>Sign Up</button></a> 
            <?php } ?>
        </div>
        
    </header>
    <script>
    function toggleDropdown() {
      document.getElementById("dropdownMenu").classList.toggle("active");
    }

    window.onclick = function(e) {
      if (!e.target.closest('.profile')) {
        document.getElementById("dropdownMenu").classList.remove("active");
      }
    }
  </script>

  <!-- ABOUT SECTION -->
  <section class="about-section">
    <h1>CONTACT AZFATICKET.XXI</h1>

    <div class="about-container">
      <!-- FRONT END -->
      <div class="profile-box">
      <div class="profile-image"></div>
      <div class="profile-name">Daffa Aufaa Pratama Irawan</div>
      <div class="profile-role">Front-End Developer</div>
      <a href="about_fe.php" class="about-button">ABOUT US</a>
      </div>

      <!-- BACK END -->
      <div class="profile-box">
        <div class="profile-image"></div>
        <div class="profile-name">Aizar faruq Nafiul Umam</div>
        <div class="profile-role">Back-End Developer</div>
        <a href="about_be.php" class="about-button">ABOUT US</a>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->
  <div class="container">
    <!-- INFORMASI KONTAK -->
    <div class="card">
      <h2>ABOUT AZFA</h2>
      <p>CONTACT US</p>

      <div class="contact-item">
        <div class="contact-icon">📍</div>
        <div>
          <strong>Alamat</strong><br>
          Jl. PADAMARA PERUM PERMATA B07 PUBALINGA LOR
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-icon">📞</div>
        <div>
          <strong>Telepon</strong><br>
          0857-8653-7284<br>
          067-1234-8701
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-icon">📧</div>
        <div>
          <strong>Email</strong><br>
          AZFATICKETXII@mail.com
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-icon">⏰</div>
        <div>
          <strong>CIPTA</strong><br>
          AIZAR FARUQ NAFIUL UMAM - 5<br>
          DAFFA AUFAA PRATAMA IRAWAN - 10
        </div>
      </div>
    </div>

    <!-- FORM KIRIM PESAN -->
    <div class="card">
      <h2>REPORT A PROBLEM</h2>
      <p>please report what your prolem IS</p>
      <form>
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Nama Anda">

        <label>Email</label>
        <input type="email" placeholder="Email Anda">

        <label>Nomor Telepon</label>
        <input type="tel" placeholder="Nomor Telepon">

        <label>Pesan</label>
        <textarea rows="5" placeholder="Tulis pesan Anda..."></textarea>

        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </div>

</body>
</html>