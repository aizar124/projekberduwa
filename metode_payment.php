<?php
include "koneksi.php";

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
      <img src="logo_web.png" alt="" />
      AZFATICKET.XXI</div>
    <nav>
      <a href="#">MOVIE</a>
      <a href="#">CINEMA</a>
      <a href="#">CONTACT</a>
    </nav>
    <div class="profile-icon"></div>
  </header>

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
