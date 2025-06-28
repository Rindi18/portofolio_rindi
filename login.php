<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #000; /* hitam */
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-box {
      background-color: #ccc; /* abu-abu terang */
      padding: 40px 30px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
    }

    .login-title {
      text-align: center;
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 30px;
      color: #000;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 20px;
      border: 1px solid #888;
      border-radius: 6px;
      font-size: 16px;
    }

    .log-in-btn {
      background-color: #2196F3;
      color: white;
      border: none;
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .log-in-btn:hover {
      background-color: #1976D2;
    }

    .footer-text {
      text-align: center;
      font-size: 13px;
      color: #555;
      margin-top: 20px;
    }

    @media (max-width: 480px) {
      .login-box {
        padding: 30px 20px;
      }

      .login-title {
        font-size: 22px;
      }

      input,
      .log-in-btn {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>
  <form class="login-box" action="login2.php" method="POST">
    <div class="login-title">Login Admin</div>
    <input type="text" name="username" placeholder="Masukkan Username" required />
    <input type="password" name="password" placeholder="Masukkan Password" required />
    <button type="submit" class="log-in-btn">Login</button>
    <div class="footer-text">Akses hanya untuk admin terdaftar</div>
  </form>
</body>
</html>
