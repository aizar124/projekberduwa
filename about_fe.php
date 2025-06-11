<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me Popup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS UTAMA - Mengatur tampilan dasar dan font */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* TOMBOL TRIGGER - Style untuk tombol yang membuka popup */
        .trigger-btn {
            background: linear-gradient(135deg, #ff4d4d, #cc0000);
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(204, 0, 0, 0.3);
            transition: all 0.3s ease;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .trigger-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(204, 0, 0, 0.4);
        }

        .trigger-btn:active {
            transform: translateY(1px);
        }

        /* OVERLAY - Latar belakang gelap saat popup muncul */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease-out;
        }

        /* POPUP CONTAINER - Kotak utama popup */
        .popup-container {
            background-color: white;
            width: 90%;
            max-width: 600px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: scale(0.9);
            animation: popIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            position: relative;
        }

        /* HEADER POPUP - Bagian judul dengan gradient merah */
        .popup-header {
            background: linear-gradient(135deg, #ff4d4d, #cc0000);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .popup-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* TOMBOL CLOSE - 'X' untuk menutup popup */
        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: white;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .close-btn:hover {
            transform: rotate(90deg) scale(1.1);
        }

        /* BODY POPUP - Isi konten form */
        .popup-body {
            padding: 30px;
        }

        .info-item {
            margin-bottom: 20px;
            animation: slideIn 0.5s ease-out forwards;
            opacity: 0;
        }

        .info-item:nth-child(1) { animation-delay: 0.1s; }
        .info-item:nth-child(2) { animation-delay: 0.2s; }
        .info-item:nth-child(3) { animation-delay: 0.3s; }
        .info-item:nth-child(4) { animation-delay: 0.4s; }
        .info-item:nth-child(5) { animation-delay: 0.5s; }

        .info-label {
            font-weight: bold;
            color: #cc0000;
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .info-value {
            background-color: #f9f9f9;
            border-left: 4px solid #cc0000;
            padding: 12px 15px;
            border-radius: 0 5px 5px 0;
            font-size: 16px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }

        .description {
            background-color: #fff5f5;
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid #ffcccc;
            line-height: 1.6;
            animation: fadeInUp 0.6s 0.6s ease-out forwards;
            opacity: 0;
        }

        /* ANIMASI - Berbagai efek animasi */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes popIn {
            0% { transform: scale(0.9); opacity: 0; }
            80% { transform: scale(1.05); }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* FOOTER POPUP - Bagian bawah */
        .popup-footer {
            text-align: center;
            padding: 15px;
            background-color: #f9f9f9;
            border-top: 1px solid #eee;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .social-icons a {
            color: #cc0000;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: #ff4d4d;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <!-- Tombol untuk memunculkan popup -->
    <button class="trigger-btn" id="triggerBtn">
        <i class="fas fa-user"></i> TENTANG SAYA
    </button>

    <!-- Overlay dan Popup Container -->
    <div class="overlay" id="overlay">
        <div class="popup-container">
            <div class="popup-header">
                <h2>ABOUT US FRONT END</h2>
                <span class="close-btn" id="closeBtn">&times;</span>
            </div>
            <div class="popup-body">
                <div class="info-item">
                    <span class="info-label">Nama:</span>
                    <div class="info-value">DAFFA AUFAA PRATAMA IRAWAN</div>
                </div>
                <div class="info-item">
                    <span class="info-label">Kelas:</span>
                    <div class="info-value">XI REKAYASA PERANGKAT LUNAK 2</div>
                </div>
                <div class="info-item">
                    <span class="info-label">Absen:</span>
                    <div class="info-value">10</div>
                </div>
                <div class="info-item">
                    <span class="info-label">Asal Sekolah:</span>
                    <div class="info-value">SMK NEGERI 1 PURBALINGGA</div>
                </div>
                <div class="description">
                    Saya adalah seorang front end yang mendesain web, dengan keseluruhan tampilan, dengan ketelitian dan logika saya saya telah membuat website ini dengan melewati berbagai rintangan.
                </div>
            </div>
            <div class="popup-footer">
                <p>Hubungi saya di media sosial:</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript untuk mengontrol tampilan popup
        const triggerBtn = document.getElementById('triggerBtn');
        const closeBtn = document.getElementById('closeBtn');
        const overlay = document.getElementById('overlay');

        // Buka popup saat tombol diklik
        triggerBtn.addEventListener('click', () => {
            overlay.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Mencegah scroll saat popup terbuka
        });

        // Tutup popup saat tombol close diklik
        closeBtn.addEventListener('click', () => {
            overlay.style.display = 'none';
            document.body.style.overflow = 'auto'; // Mengembalikan scroll
        });

        // Tutup popup saat klik di luar area popup
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    </script>
</body>
</html>