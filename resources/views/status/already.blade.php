<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sudah Terdaftar Dua Kali</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      color: #333;
    }

    .container {
      max-width: 500px;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.08);
      animation: fadeIn 0.8s ease-out;
    }

    .icon {
      font-size: 100px;
      color: #ff5722;
      animation: bounce 2s ease-in-out infinite;
    }

    h1 {
      font-size: 32px;
      margin: 20px 0;
      color: #333;
    }

    p {
      color: #666;
      font-size: 18px;
      margin-bottom: 30px;
    }

    .message {
      font-size: 20px;
      font-weight: bold;
      color: #e53935;
      margin-bottom: 20px;
    }

    .btn {
      padding: 12px 24px;
      background-color: #4a90e2;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #357ab8;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Ikon Peringatan: Sudah Terdaftar Dua Kali -->
    <div class="icon">⚠️</div>
    <h1>Oops! Kamu Sudah Terdaftar Dua Kali</h1>
    <p>Kami mendeteksi bahwa kamu telah mendaftar lebih dari sekali untuk event ini. Jangan khawatir, kamu hanya perlu satu pendaftaran saja! 🎉</p>
    <div class="message">✅ Tidak perlu mendaftar lagi, cukup menunggu informasi lebih lanjut.</div>
    <a href="{{ route('dashboard') }}" class="btn">Kembali ke Beranda</a>
  </div>
</body>
</html>
