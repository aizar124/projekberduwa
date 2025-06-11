<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Account - AZFATICKET.XXI</title>
  <style>
    /* ==== HEADER SECTION ==== */
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


    /* ==== MAIN CONTAINER (REGISTER SECTION) ==== */
    .register-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
      padding: 20px;
    }
    .register-box {
      display: flex;
      background: #f08080; /* Warna dasar box */
      border-radius: 40px;
      padding: 40px;
      gap: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    /* ==== FORM DI SEBELAH KIRI ==== */
    .register-form {
      background: #ffe4e1; /* Latar belakang form */
      padding: 30px;
      border-radius: 20px;
      min-width: 250px;
      text-align: center;
    }
    .register-form h3 {
      font-size: 20px;
      margin-bottom: 20px;
      font-weight: bold;
      color: #d9534f;
      text-transform: lowercase;
    }
    .register-form form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .register-form input {
      padding: 8px;
      border: none;
      border-bottom: 1px solid #ccc;
      background: transparent;
      outline: none;
      color: #333;
    }
    .register-form button {
      margin-top: 15px;
      background: #f08080;
      border: none;
      padding: 10px;
      border-radius: 20px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      text-transform: lowercase;
    }

    /* ==== LOGO DAN TEKS DI KANAN ==== */
    .register-right {
      text-align: center;
      color: white;
    }
    .register-right img {
      height: 100px;
      margin-bottom: 10px;
    }
    .register-right h2 {
      font-size: 24px;
      margin: 0;
      color: red;
    }
    .register-right p {
      margin: 0;
      letter-spacing: 2px;
      color: red;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
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

  <!-- REGISTER SECTION -->
  <div class="register-container">
    <div class="register-box">
      <!-- FORM KIRI -->
      <div class="register-form">
        <h3>create account</h3>
        <form action="proses_register.php" method="POST">
          <input type="text" name="username" placeholder="username" required>
          <input type="password" name="password" placeholder="password" required>
          <button type="submit">create</button>
        </form>
      </div>

      <!-- LOGO KANAN -->
      <div class="register-right">
        <img src="logo.png" alt="logo"> <!-- Ganti sesuai path -->
        <h2>AZFATICKET.XXI</h2>
        <p>CITY MALL</p>
      </div>
    </div>
  </div>

</body>
</html>
