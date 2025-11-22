<?php
require_once "../../db-connect/koneksi.php";

if (!isset($_GET['id'])) {
    die("Lapangan tidak ditemukan.");
}

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM lapangan WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data lapangan tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Description Lapangan</title>
    <link rel="stylesheet" href="description.css">
</head>

<body>
    <header class="navbar">
        <div class="container-nav">

            <img src="../asset/LOGO-goaltime.png" alt="GoalTime-LOGO" class="logo">

            <div class="tulisan-headerrr">
                <h2><a href="../../homepage/Pages/homepage.php">Home</a></h2>
                <h2><a href="../../discover/pages/discover.php">Discover</a></h2>
                <h2><a href="../../testimoni/pages/index.php">Testimoni</a></h2>
                <h2><a href="../../about-us/pages/about-us.php">About Us</a></h2>
            </div>
        </div>
    </header>

    <!-- FOTO UTAMA DINAMIS -->
    <div class="container-foto-utama-description">
        <img src="../../discover/asset/<?php echo $data['img']; ?>" alt="foto" class="foto-utama-description">
    </div>

    <div class="bagian-atas">
        <div class="bagian-kiri-description">

            <div class="nama-lapangan-description">
                
                <!-- NAMA DINAMIS -->
                <h1 style="font-size: 60px;"><?php echo $data['name']; ?></h1>

                <div class="rating-lokasi">
                    <img src="../asset/Star 1.png" alt="" style="width: 30px; height: 30px;">

                    <!-- RATING DINAMIS -->
                    <p style="font-size: 30px;"><?php echo number_format($data['rating'], 2); ?></p>

                    <div style="color: rgb(255, 111, 0); height: 12px; width: 12px; border-radius: 100%; background-color: rgb(255, 111, 0);"></div>

                    <!-- LOKASI DINAMIS -->
                    <p style="font-size: 30px;"><?php echo $data['location']; ?></p>
                </div>
            </div>

            <div class="deskripsi">
                <h1 style="font-size: 40px; margin-bottom: 20px;">Deskripsi</h1>
                <p style="font-size: 25px;">
                    Lapangan ini menyediakan berbagai fasilitas dan kondisi rumput yang bagus serta 
                    dikelilingi oleh pemandangan yang menarik.
                </p>
            </div>

            <div class="aturan">
                <h1 style="font-size: 40px; margin-bottom: 20px;">Aturan</h1>

                <ol type="1" style="font-size: 25px;">
                    <li>Tidak membawa senjata api dan senjata tajam</li>
                    <li>Tidak merokok dan menggunakan narkoba</li>
                    <li>Tidak membuat onar</li>
                    <li>Tidak membawa minuman beralkohol</li>
                    <li>Tidak merusak fasilitas yang disediakan</li>
                </ol>
            </div>

            <div class="lokasi-venue">
                <a href="https://maps.google.com">
                    <button class="tombol-lokasi-venue">
                        <h1>Lokasi Venue</h1>
                        <p><?php echo $data['location']; ?></p>
                    </button>
                </a>
            </div>

        </div>

        <div class="bagian-kanan-description">

            <div class="booking">

                <!-- HARGA DINAMIS -->
                <h1 style="font-size: 40px;">
                    Mulai dari Rp <?php echo number_format($data['price'], 0, ',', '.'); ?> <br> per sesi
                </h1>

                <a href="../../payment/pages/payment.php?id=<?php echo $data['id']; ?>">
                    <button class="tombol-booking">Booking</button>
                </a>


            </div>

            <div class="fasilitas">

                <h1 style="font-size: 50px; font-weight: bold;"><u>Fasilitas</u></h1>

                <ul style="font-size: 30px; font-weight: bold;">
                    <li>Cafe dan Resto</li>
                    <li>Jual Makanan Ringan</li>
                    <li>Jual Minuman Ringan</li>
                    <li>Ruang Santai</li>
                    <li>Wifi Berbayar</li>
                </ul>

            </div>

        </div>
    </div>

    <!-- LIST LAPANGAN (STATIC SESUAI PERMINTAAN) -->
    <div class="baris-bawah">
        <div class="bagian-bawah">

            <div class="container-list-lapangan">
                <img src="../asset/list-lapangan.jpg" alt="">
            </div>

            <div style="color: rgb(255, 111, 0); width: 1px; height: 250px; background-color: rgb(255, 111, 0);"></div>

            <div class="Bagian-kanan-listlapangan">

                <div class="nama-spesifikasi">
                    <h1 style="font-size: 30px;">Lapangan Futsal 1</h1>
                    <p>Lapangan Futsal Alas Rumput</p>
                </div>

                <div class="Spesifikasi" style="margin-left: 20px;">
                    <ul>
                        <li>Indoor</li>
                        <li>Alas rumput</li>
                        <li>Futsal</li>
                    </ul>
                </div>

                <button class="Pesan-lapangan">Pesan Lapangan</button>

            </div>
        </div>

        <!-- STATIC COPY 2 -->
        <div class="bagian-bawah">

            <div class="container-list-lapangan">
                <img src="../asset/list-lapangan.jpg" alt="">
            </div>

            <div style="color: rgb(255, 111, 0); width: 1px; height: 250px; background-color: rgb(255, 111, 0);"></div>

            <div class="Bagian-kanan-listlapangan">

                <div class="nama-spesifikasi">
                    <h1 style="font-size: 30px;">Lapangan Futsal 2</h1>
                    <p>Lapangan Futsal Alas Rumput</p>
                </div>

                <div class="Spesifikasi" style="margin-left: 20px;">
                    <ul>
                        <li>Indoor</li>
                        <li>Alas rumput</li>
                        <li>Futsal</li>
                    </ul>
                </div>

                <button class="Pesan-lapangan">Pesan Lapangan</button>

            </div>
        </div>

        <!-- STATIC COPY 3 -->
        <div class="bagian-bawah">

            <div class="container-list-lapangan">
                <img src="../asset/list-lapangan.jpg" alt="">
            </div>

            <div style="color: rgb(255, 111, 0); width: 1px; height: 250px; background-color: rgb(255, 111, 0);"></div>

            <div class="Bagian-kanan-listlapangan">

                <div class="nama-spesifikasi">
                    <h1 style="font-size: 30px;">Lapangan Futsal 3</h1>
                    <p>Lapangan Futsal Alas Rumput</p>
                </div>

                <div class="Spesifikasi" style="margin-left: 20px;">
                    <ul>
                        <li>Indoor</li>
                        <li>Alas rumput</li>
                        <li>Futsal</li>
                    </ul>
                </div>

                <button class="Pesan-lapangan">Pesan Lapangan</button>

            </div>
        </div>
    </div>

    <!-- FOOTER STATIC -->
    <footer class="footer">
        <div class="footer-container">

            <div class="footer-section footer-about">
                <div class="logo-aboutus">
                    <img src="../../homepage/asset/LOGO-goaltime.png" alt="GoalTime Logo" class="footer-logo" style="margin-top: -38px;">
                    <p style="margin-top: -51px;">
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
                    <li>📞 +62. 684189547</li>
                    <li>📍 Alamat Lapangan</li>
                    <li>📧 GoalTime@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Copyright © 2025 ReservasiFutsal. All Rights Reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <span>|</span>
                <a href="#">Terms of Use</a>
            </div>
        </div>
    </footer>

</body>

</html>

