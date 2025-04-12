<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Not Found</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #f6f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      text-align: center;
    }

    .container {
      animation: fadeIn 1s ease-in-out;
    }

    .icon {
      font-size: 120px;
      color: #ff6b6b;
      animation: float 2.5s ease-in-out infinite;
    }

    h1 {
      font-size: 36px;
      margin: 20px 0 10px;
      color: #333;
    }

    p {
      font-size: 18px;
      color: #666;
      max-width: 400px;
      margin: 0 auto 30px;
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

    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="icon">🚫</div>
    <h1>Event Tidak Ditemukan</h1>
    <p>Oops! Sepertinya event yang kamu cari tidak tersedia atau sudah dihapus.</p>
    <a href="{{ route('dashboard') }}" class="btn">Kembali ke Beranda</a>
  </div>
</body>
</html>
