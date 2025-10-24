<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page - GoalTime</title>
  <link rel="stylesheet" href="Sign Up.css">
</head>
<body>
  <div class="container">
    <!-- Bagian kiri: gambar kiri -->
    <div class="left">
      <img src="../Sign Up asset/Gambar Kiri.png" alt="">
    </div>

    <!-- Bagian kanan: form login -->
    <div class="right">
      <div class="logo">
        <img src="../Sign Up asset/Logo.png" alt="logo">
      </div>

      <h1>Create Account</h1>
      <p>Yuk bikin akun sebelum melihat banyak lapangan yang kamu sukai!</p>

      <div class="social-login">
        <form action="google.php" method="POST" style="width: 100%;">
          <button class="google">
            <img src="../Sign Up asset/Google.png" alt="Google"> Google
          </button>
        </form>

        <form action="facebook.php" method="POST" style="width: 100%;">
          <button class="facebook">
            <img src="../Sign Up asset/Facebook.png" alt="Facebook"> Facebook
          </button>
        </form>
      </div>

      <hr>

      <form action="process-signup.php" method="POST">
        <label for="username">Username</label>
        <input type="username" name="username" id="username" required />

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required />

        <label for="password">Make Password</label>
        <input type="password" name="password" id="password" required />

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>


        <button type="submit" class="SignUp-btn" name="signup">Sign Up</button>
      </form>
    </div>
  </div>

  <!-- <script src="Sign Up.js"></script> -->
</body>
</html>
