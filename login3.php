<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
      @font-face {
            src: url('font/Monoton.ttf') format('truetype');
            font-family: 'Monoton';
            font-weight: normal;
            font-style: normal;
      }
      @font-face {
            src: url('font/AMC Theaters.woff') format('woff');
            font-family: 'AMC Theaters';
            font-weight: normal;
            font-style: normal;
      }
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
      background: linear-gradient(to right,rgba(244, 67, 54, 0.68), #f48fb1);
      padding: 27px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      display: flex;
      align-items: center;
      font-size: 27px;
      font-family: 'Monoton';
      color:rgb(240, 240, 240);
    }
    .logo img {
      margin-right: 10px;
      height: 9%;
      width: 9%;
    }

    nav a {
      margin: 0 15px;
      color: white;
      text-decoration: none;
      font-family: 'AMC Theaters';
    }
    svg {
      color: white;
      width: 30px;
      height: auto;
    }
    .profile img {
      width: 40px;
      height: 40px;
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

        /* LOGIN BOX */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            padding: 20px;
        }
        .login-box{
            display : flex;
            background: #f08080;
            border-radius: 40px;
            padding: 40px;
            gap: 40px;
            box-shadow; 0 5px 15px rgba(0,0,0,0.2);
        }
        .login-left{
            text-align: center;
            color: white;
        }
        .login-left img{
            height: 70px;
            margin-bottom: 10px;
            margin-top : 20px;
        }
        .login-left h2{
            font-size: 24px;
            margin: 0;
        }
        .login-left p{
            margin: 0;
            letter-spacing: 2px;
        }

        /* LOGIN FORM */
        .login-form{
            background: rgba(255,228,225,0.39);
            padding: 30px;
            border-radius: 20px;
            min-width: 250px;
            text-align: center;
        }
        .login-form h3{
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #d9534f;
        }
        .login-form form{
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .login-form input {
            padding: 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            background: transparent;
            outline: none;
            color: #333;
        }
        .login-form button{
            margin-top: 15px;
            background: #f08080;
            border: none;
            padding: 10px;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .forgot { 
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #d9534f;
            text-decoration: none;
        }

    </style>
</head>
<body>
     
        <!-- HEADER -->
    <header>
    <div class="logo">
      <img src="logo_web.png" alt="" />
      AZFATicket.XXI</div>
    <nav>
      
        <a href="home.php">HOME</a>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path fill-rule="evenodd" d="M1.5 6.375c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v3.026a.75.75 0 0 1-.375.65 2.249 2.249 0 0 0 0 3.898.75.75 0 0 1 .375.65v3.026c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 17.625v-3.026a.75.75 0 0 1 .374-.65 2.249 2.249 0 0 0 0-3.898.75.75 0 0 1-.374-.65V6.375Zm15-1.125a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0V6a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0v.75a.75.75 0 0 0 1.5 0v-.75Zm-.75 3a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-1.5 0v-.75a.75.75 0 0 1 .75-.75Zm.75 4.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-.75ZM6 12a.75.75 0 0 1 .75-.75H12a.75.75 0 0 1 0 1.5H6.75A.75.75 0 0 1 6 12Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
      </svg>
        <a href="cinema.php">CINEMA</a>
      <a href="contact_azfa.php">CONTACT</a>
    </nav>
    <div class="profile" onclick="toggleDropdown()">
      <img src="userputih.jpg" alt="">
      <div class="dropdown" id="dropdownMenu">
        <a href="login.php"><button>Sign In</button></a>
        <a href="register.php"><button>Sign Up</button></a> 
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

    <!-- LOGIN SECTION -->
     <div class="login-container">
        <div class="login-box">
            <!-- LEFT SECTION -->
            <div class="login-left">
              <!-- <img src="logo_web.png" alt=""> -->
                <h2>AZFATICKET.XXI</h2>
                <p>CITY MALL</p>
                
            </div>

            <!-- RIGHT SECTION: LOGIN FORM -->
             <div class="login-form">
                <h3>Login</h3>
                <form action="proses_login.php" method="post">
                    <input type="text" name="username" placeholder="username" id="">
                    <input type="password" name="password" placeholder="password" id="">
                    <button type="submit">Login</button>
                    <a class="forgot" href="forget_password">Forgot password</a>
                </form>
             </div>
        </div>
     </div>
</body>
</html>