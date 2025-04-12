<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Dengan Kuota Terbatas</title>
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
      color: #ff9800;
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

    .warning {
      font-size: 20px;
      font-weight: bold;
      color: #e53935;
      margin-bottom: 20px;
    }

    .btn {
      padding: 12px 24px;
      background-color: #4a90e2;
      color: white;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
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
    <div class="icon">⚠️</div>
    <h1>Kuota Event Terbatas!</h1>
    <p>Hurry up! Kuota untuk event ini sudah hampir penuh </p>
    <div class="warning">⚡️ Lain kali segera daftar sebelum kehabisan!</div>
    <a href="{{ route('dashboard') }}" class="btn">Cari event lain</a>
  </div>
</body>
</html>
