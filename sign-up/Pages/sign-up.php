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
          <button type="submit" class="google" style="width: 100%;">
            <img src="../Sign Up asset/Google.png" alt="Google" /> Google
          </button>
        </form>

        <form action="facebook.php" method="POST" style="width: 100%;">
          <button type="submit" class="facebook" style="width: 100%;">
            <img src="../Sign Up asset/Facebook.png" alt="Facebook" /> Facebook
          </button>
        </form>
      </div>

      <hr>

      <form action="process-signup.php" method="POST">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" name="confirm_password" required>

    <button type="submit" name="signup" class="SignUp-btn">Sign Up</button>
</form>

</button>

      </form>
    </div>
  </div>

  <!-- <script src="Sign Up.js"></script> -->
</body>
</html>
