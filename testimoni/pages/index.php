<?php
require_once "../../db-connect/koneksi.php";

// jumlah data per load
$limit = 6;

// cek apakah load more ditekan
$load = isset($_GET['load']) ? intval($_GET['load']) : 0;

// ambil data testimoni dari database
$query = mysqli_query($connection, "SELECT * FROM testimoni LIMIT $limit OFFSET $load");
$nextLoad = $load + $limit;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Testimoni</title>
    <link rel="stylesheet" href="testimoni.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="header">
        <div class="dalam-header">
            <img src="../../homepage/asset/LOGO-goaltime.png" class="logo">

            <div class="tulisan-header">
                <h2><a href="../../homepage/Pages/homepage.php">Home</a></h2>
                <h2><a href="../../discover/pages/discover.php">Discover</a></h2>
                <h2><a href="../../testimoni/pages/index.php">Testimoni</a></h2>
                <h2><a href="../../about-us/pages/about-us.php">About Us</a></h2>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <img src="../asset/BANNER.png" alt="hero">
    </section>

    <!-- TESTIMONI -->
    <h2 class="testimoni-anda">Testimoni Anda</h2>

<section class="testimoni container">
    <div class="grid-testimoni">

        <div class="baris-kotak">
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>

                <div class="kotak">

                    <div class="bagian-kiri">
                        <img class="profil" src="../asset/<?= $row['foto']; ?>" alt="user">
                        <h4><?= $row['user_name']; ?>, <?= $row['user_city']; ?></h4>
                    </div>

                    <div class="bagian-kanan">
                        <div class="tulisan-kotak">
                            <p style="font-size: 22px; margin-right: 40px; margin-left: 40px;">
                                "<?= $row['komentar']; ?>"
                            </p>
                        </div>

                        <div class="baris-bintang">
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                $img = ($i <= $row['rating']) ? "Star 1.png" : "star putih.png";
                                echo "<img class='stars' src='../asset/$img'>";
                            }
                            ?>
                        </div>
                    </div>

                </div>

            <?php } ?>
        </div>

        <!-- LOAD MORE BUTTON -->
        <div class="kotak-load-more">
            <a href="?load=<?= $nextLoad; ?>">
                <button class="btn-orange">Load More</button>
            </a>
        </div>

    </div>
</section>


    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-section footer-about">
                <div class="logo-aboutus">
                    <img src="../../homepage/asset/LOGO-goaltime.png" class="footer-logo">
                    <p>
                        Platform reservasi futsal secara online untuk memudahkan Anda
                        dalam memesan lapangan dengan mudah, cepat, dan praktis.
                    </p>
                </div>
            </div>

            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="../../about-us/pages/about-us.php">Tentang Kami</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="../../testimoni/pages/index.php">Testimoni</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Pusat Bantuan</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Cara reservasi</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Contact Us</h4>
                <ul>
                    <li>📞 +62 684189547</li>
                    <li>📍 Alamat Lapangan</li>
                    <li>📧 GoalTime@gmail.com</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>Copyright © 2025 ReservasiFutsal. All Rights Reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a><span>|</span>
                <a href="#">Terms of Use</a>
            </div>
        </div>
    </footer>

</body>

</html>
