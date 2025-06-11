<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Kontak</title>
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

    /* ========== NAVBAR =========== */
    

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

    /* ===== RESPONSIF ===== */
    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar .menu {
        flex-wrap: wrap;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

  

  <!-- MAIN CONTENT -->
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
