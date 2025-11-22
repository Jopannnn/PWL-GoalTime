<?php
require_once "../../db-connect/koneksi.php";

if (!isset($_GET['id'])) {
    die("Lapangan tidak ditemukan!");
}

$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM lapangan WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die("Data lapangan tidak ditemukan.");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <div class="container-nav">

            <img src="../../homepage/asset/LOGO-goaltime.png" alt="GoalTime-LOGO" class="logo">

            <div class="tulisan-headerrr">
                <h2><a href="../../homepage/Pages/homepage.php">Home</a></h2>
                <h2><a href="../../discover/pages/discover.php">Discover</a></h2>
                <h2><a href="../../testimoni/pages/index.php">Testimoni</a></h2>
                <h2><a href="../../about-us/pages/about-us.php">About Us</a></h2>
            </div>
        </div>
    </header>


    <div class="keseluruhan">
        <div class="bagian-kanan-payment">
            <div class="kotak-1">

                <div class="container-judul">
                    <div class="judul-lapangan">
                        <h1><?php echo $data['name']; ?></h1>
                    </div>

                    <div class="rating-lokasi-payment">
                        <img src="../asset/Star 1.png" alt="" style="width: 30px; height: auto;">
                        <p style="font-weight: bold;"><?php echo number_format($data['rating'], 2); ?></p>
                        <p><?php echo $data['location']; ?></p>
                    </div>
                </div>

                <div style="width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>


                <p style="font-size: 20px; margin-bottom: 10px; margin-left: 30px;">Lapangan Futsal 1</p>


                <div class="Container-waktu">

                    <div class="box-waktu">

                        <div class="waktu">
                            <p>Rab, 20 Agustus 2025 | 23:00-00:00 <br> Rp<?php echo number_format($data['price'], 0, ',', '.'); ?></p>
                        </div>

                        <img src="../asset/delete-logo.png" alt="" style="width: 40px;height: 40px;">

                    </div>

                </div>


                <div style="width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>

                <div class="tambahkan-jadwal">
                    <img src="../asset/panah.png" alt="" style="width: 70px; height: 70px;">
                    <h1>Tambahkan Jadwal</h1>

                </div>

            </div>



            <div class="kotak-2">

                <div class="judul-lapangan">
                    <h1>Metode Pembayaran</h1>
                </div>

                <div style="width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>

                <div class="container-metode-pembayaran">
                    <img src="../asset/gopay-removebg-preview.png" alt="" style="width: 350px; height: auto;">
                    <img src="../asset/dana-removebg-preview.png" alt="" style="width: 300px; height: auto;">
                    <img src="../asset/bca-removebg-preview.png" alt="" style="width: 280px; height: auto;">
                </div>

            </div>

        </div>

        <div class="bagian-kiri-payment">
            <div class="kotak-3">

                <h1 style="font-size: 40px;">Rincian Biaya</h1>

                <div style=" width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>

                <div class="container-biaya">
                    <div class="container-biaya-total">
                        <p>Biaya Sewa</p>
                        <p>Rp<?php echo number_format($data['price'], 0, ',', '.'); ?></p>
                    </div>

                    <div class="container-biaya-total">
                        <p>Biaya Produk Tambahan</p>
                        <p>Rp0</p>
                    </div>
                </div>

                <div style=" width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>

                <div class="container-biaya-total" style="font-weight: bold; margin-top: 20px;">
                    <p>Total Pembayaran</p>
                    <p>Rp<?php echo number_format($data['price'], 0, ',', '.'); ?></p>
                </div>
            </div>

            <div class="kotak-4">

                <h1>Atur Pembayaran</h1>

                <div style=" width: 100%; display: flex; justify-content: center; margin: 15px 0;">
                    <div style=" background-color: rgb(74, 76, 78); color: rgb(74, 76, 78); height: 3px; width: 950px;
            border-radius: 50px;">
                    </div>
                </div>

                <div class="atur-pembayaran">
                    <p>Bayar Lunas</p>
                    <p>Rp<?php echo number_format($data['price'], 0, ',', '.'); ?></p>
                </div>

            </div>


            <form action="process_booking.php" method="POST">
                <input type="hidden" name="lapangan_id" value="<?php echo $data['id']; ?>">
                <input type="hidden" name="nama_lapangan" value="<?php echo $data['name']; ?>">
                <input type="hidden" name="harga" value="<?php echo $data['price']; ?>">

                <button type="submit" class="button-pesan">Pesan</button>
            </form>




        </div>
    </div>




    <footer class="footer">
        <div class="footer-container">


            <div class="footer-section footer-about">
                <div class="logo-aboutus">
                    <img src="../asset/LOGO-goaltime.png" alt="GoalTime Logo" class="footer-logo"
                        style="margin-top: -38px;">
                    <p style="margin-top: -51px;">
                        Platform reservasi futsal secara online untuk yang <br>memudahkan Anda
                        dalam memesan lapangan <br> dengan mudah, cepat, dan praktis
                    </p>
                </div>
            </div>


            <div class="footer-section">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Testimoni</a></li>
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