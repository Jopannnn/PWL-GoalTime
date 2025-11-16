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
      <div class="form-wrapper">
        <div class="logo">
          <img src="../Login Asset/Logo.png" alt="Logo" />
        </div>

        <h1>Welcome Back!</h1>
        <p>Waktunya bermain! Login untuk booking lapangan favoritmu sekarang ⚽</p>

        <div class="social-login">
          <form action="google.php" method="POST" style="width: 100%;">
            <button type="submit" class="google" style="width: 100%;">
              <img src="../Login Asset/Google.png" alt="Google" /> Google
            </button>
          </form>



        <form action="facebook.php" method="POST" style="width: 100%;">
          <button type="submit" class="facebook" style="width: 100%;">
            <img src="../Login Asset/Facebook.png" alt="Facebook" /> Facebook
          </button>
        </form>

        </div>

        <hr />

        <form action="process.php" method="POST" id="loginForm">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" required placeholder="Enter Email"/>

          <label for="password">Password</label>
          <input type="password" name="password" id="password" required placeholder="Enter Password"/>

          <a href="../../sign-up/Pages/sign-up.php" class="forgot"><u>Forgot Password?</u></a>

          <button type="submit" name="login" class="login-btn">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- <script src="login.js"></script> -->
</body>
</html>
