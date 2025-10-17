<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page - GoalTime</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <div class="container">
    <!-- Bagian kiri: gambar bola -->
    <div class="left">
      <img src="../Login Asset/Gambar Kiri.png" alt="Gambar Kiri" />
    </div>

    <!-- Bagian kanan: form login -->
    <div class="right">
      <div class="logo">
        <img src="../Login Asset/Logo.png" alt="Logo" />
      </div>

      <h1>Welcome Back!</h1>
      <p>Waktunya bermain! Login untuk booking lapangan favoritmu sekarang ⚽</p>

      <div class="social-login">
        <button class="google">
          <img src="../Login Asset/Google.png" alt="Google" /> Google
        </button>
        <button class="facebook">
          <img src="../Login Asset/Facebook.png" alt="Facebook" /> Facebook
        </button>
      </div>

      <hr />

      <form action="process.php" method="POST" id="loginForm">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />

        <a href="../../sign-up/Pages/sign-up.php" class="forgot"><u>Forgot Password?</u></a>

        <button type="submit" name="login" class="login-btn">Login</button>
      </form>
    </div>
  </div>

  <!-- <script src="login.js"></script> -->
</body>
</html>
