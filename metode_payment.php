<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
if (!isset($_POST['kursi']) ){
  header("location:kursi.php");
}
$kursi = $_POST['kursi'];
$id_movies = $_POST['id_movies'];
$waktu= $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Payment Method - AZFATICKET.XXI</title>
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

.payment-container {
  text-align: center;
  margin-top: 40px;
  padding: 0 20px;
}

.payment-container h2 {
  font-family: 'Courier New', monospace;
  font-size: 1.8rem;
}

.select-text {
  font-weight: bold;
  margin-top: 10px;
}

.divider {
  width: 60%;
  margin: 15px auto;
  border: 1px solid black;
}

.payment-method {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
  margin-top: 20px;
}

.bank {
  width: 70%;
  max-width: 400px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 3px solid red;
  border-radius: 25px;
  padding: 10px 20px;
}

.bank img {
  height: 30px;
}

.bank input[type="radio"] {
  display: none;
}
.bank label {
  background-color: white;
  border: 2px solid red;
  border-radius: 20px;
  padding: 5px 15px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  color: red;
}

.bank input[type="radio"]:checked + label {
  background-color: red;
  color: white;
}

.buy-now input[type="submit"] {
  margin-top: 30px;
  background-color: red;
  color: white;
  font-weight: bold;
  font-size: 1.1rem;
  padding: 12px 40px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
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

  <main class="payment-container">
    <h2>PAYMENT METHOD</h2>
    <hr class="divider">
    <p class="select-text">PLEASE YOUR SELECT</p>
    <hr class="divider">

    <div class="payment-method">
      <div class="bank">
        <img src="bank/BCA.jpg" alt="">
        <input type="radio" id="a"  name="button" value="bca" required>
        <label for="a">Select</label>
      </div>
      <div class="bank">
        <img src="bank/BRI.jpg" alt="">
        <input type="radio" id="b"  name="button" value="bri">
        <label for="b">Select</label>
      </div>
      <div class="bank">
        <img src="bank/BNI.jpg" alt="">
        <input type="radio" id="c"  name="button" value="bni">
        <label for="c">Select</label>
      </div>
      <div class="bank">
        <img src="bank/MANDIRI.jpg" alt="">
        <input type="radio" id="d"  name="button" value="mandiri">
        <label for="d">Select</label>
      </div>
      <div class="bank">
        <img src="bank/DANA.jpg" alt="">
        <input type="radio" id="e"  name="button" value="dana">
        <label for="e">Select</label>
      </div>
    </div>

    <hr class="divider">
    <form action="prs_metode_payment.php" method="post">
      <?php foreach($kursi as $input){ ?>
          <input type="hidden" name="kursi[]" value="<?= $input ?>">
      <?php } ?>
      <input type="hidden" name="id_movies" value="<?= $id_movies ?>">
      <input type="hidden" name="tanggal" value="<?= $tanggal ?>">
      <input type="hidden" name="waktu" value="<?= $waktu ?>">
      <input type="hidden" name="total" value="<?= $total ?>">

      <div class="buy-now"><input type="submit" value="BUY NOW"></div>
    </form>
    
  </main>
</body>
</html>
