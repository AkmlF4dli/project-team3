<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sudah Terdaftar di Event Ini</title>
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
      color: #4caf50;
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
      color: #388e3c;
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
    <!-- Ikon Pemberitahuan: Sudah Terdaftar -->
    <div class="icon">✅</div>
    <h1>Selamat! Kamu Sudah Terdaftar</h1>
    <p>Kamu sudah berhasil terdaftar di event ini. Kami senang bisa bertemu denganmu di sana!</p>
    <div class="message">🎉 Terima kasih telah bergabung!</div>
    <a href="{{ route('joined') }}" class="btn">Lihat Event - Event yang kamu ikuti</a>
  </div>
</body>
</html>
