<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="discover.css">
    <title>Discover</title>
</head>
<body>
    <header class="header reveal">
        <div class="dalam-header">
            <img src="../../discover/asset/LOGO-goaltime.png" class="logo">
            <div class="tulisan-header">
                <h2><a href="../../homepage/Pages/homepage.php">Home</a></h2>
                <h2><a href="../../discover/pages/discover.php">Discover</a></h2>
                <h2><a href="../../testimoni/pages/index.php">Testimoni</a></h2>
                <h2><a href="../../about-us/pages/about-us.php">About Us</a></h2>
            </div>
        </div>
    </header>

    <img src="../asset/hero-pctr.jpg" class="foto-utama">

    <h1 style="font-size: 70px; margin-left: 110px; margin-top: 100px;">Sewa Lapangan</h1>

    <form method="GET">
        <div class="tombol-cari-lapangan reveeal">
            <div class="search-container">
                <img src="../asset/search-interface-symbol.png" style="width: 40px; height: 40px;">
                <input type="search" name="search" placeholder="Cari Nama Lapangan" class="search-input">
                <input type="hidden" name="kota" id="inputKota">
            </div>

            <div class="pilih-kota">
                <div class="dalam-pilih-kota">
                    <img src="../asset/location.png" style="width: 40px; height: 40px; margin-left: 20px; margin-right: 10px;">
                    <p style="font-size: 21px; font-weight: 600;">Pilih kota</p>
                    <span class="arrow"></span>
                </div>

                <ul class="pilihan-kota" id="dropdownKota">
                    <li>Balikpapan</li>
                    <li>Banda Aceh</li>
                    <li>Bandar Lampung</li>
                    <li>Bandung</li>
                    <li>Banjarbaru</li>
                    <li>Banjarmasin</li>
                    <li>Batam</li>
                    <li>Bogor</li>
                    <li>Bekasi</li>
                    <li>Denpasar</li>
                    <li>Depok</li>
                    <li>Jakarta</li>
                    <li>Jambi</li>
                    <li>Jawa Timur</li>
                    <li>Jayapura</li>
                    <li>Makassar</li>
                    <li>Malang</li>
                    <li>Manado</li>
                    <li>Medan</li>
                    <li>Pekanbaru</li>
                    <li>Palembang</li>
                    <li>Pontianak</li>
                    <li>Samarinda</li>
                    <li>Semarang</li>
                    <li>Surabaya</li>
                    <li>Tangerang</li>
                    <li>Yogyakarta</li>
                </ul>
            </div>

            <button type="submit" class="cari-venue">Cari Venue</button>
        </div>
    </form>

    <div class="foto-lapangan-futsal">
        <?php 
        require_once "../../db-connect/koneksi.php";
        $initial = 9;
        $increment = 3;
        $load = isset($_GET['load']) ? $_GET['load'] : 0;
        $limit = $initial + ($load * $increment);

        $search = isset($_GET['search']) ? $_GET['search'] : "";
        $kota = isset($_GET['kota']) ? $_GET['kota'] : "";

        if ($search != "" && $kota != "") {
            $query = mysqli_query($connection, "SELECT * FROM lapangan WHERE name LIKE '%$search%' AND location LIKE '%$kota%' LIMIT $limit");
        } elseif ($search != "") {
            $query = mysqli_query($connection, "SELECT * FROM lapangan WHERE name LIKE '%$search%' LIMIT $limit");
        } elseif ($kota != "") {
            $query = mysqli_query($connection, "SELECT * FROM lapangan WHERE location LIKE '%$kota%' LIMIT $limit");
        } else {
            $query = mysqli_query($connection, "SELECT * FROM lapangan LIMIT $limit");
        }

        while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="lapangan-1">
                <img src="../asset/<?php echo $row['img']; ?>" style="width:450px;height:250px;border-top-left-radius:40px;border-top-right-radius:40px;">
                <h1 style="margin-left:20px;font-size:38px;"><?php echo $row['name']; ?></h1>

                <div class="judul-baris-1">
                    <img src="../asset/bintang-removebg-preview.png" style="width:20px;height:20px;">
                    <p><?php echo $row['rating']; ?></p>
                    <div style="color:#ff6f00;height:6px;width:6px;border-radius:50%;background:#ff6f00;"></div>
                    <p><?php echo $row['location']; ?></p>
                </div>

                <div class="judul-baris-2">
                    <h3>Mulai</h3>
                    <h1>Rp <?php echo number_format($row['price']); ?></h1>
                    <p>/sesi</p>
                </div>

                <div class="bagian-tombol-pesan">
                    <hr style="width:380px;border:3px solid rgb(255,111,0);border-radius:40px;">
                    <div class="tombol-pesan" style="margin-top:15px;">
                        <a href="../../description/pages/description.php?id=<?= $row['id']; ?>">
                            <h1>Pesan</h1>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php 
    $total = mysqli_fetch_assoc(mysqli_query($connection, "SELECT COUNT(*) AS total FROM lapangan"))['total'];
    if ($limit < $total) { ?>
        <form method="GET" style="text-align:right;margin:20px 50px;">
            <input type="hidden" name="load" value="<?= $load + 1 ?>">
            <button type="submit" class="load-more-btn">Load More</button>
        </form>
    <?php } ?>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section footer-about">
                <div class="logo-aboutus">
                    <img src="../asset/LOGO-goaltime.png" class="footer-logo" style="margin-top: -38px;">
                    <p style="margin-top: -51px;">Platform reservasi futsal secara online untuk yang <br>memudahkan Anda dalam memesan lapangan <br> dengan mudah, cepat, dan praktis</p>
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

    <script>
        const pilihKota = document.querySelector(".pilih-kota");
        const dropdown = document.getElementById("dropdownKota");
        const teksKota = document.querySelector(".dalam-pilih-kota p");
        const arrow = document.querySelector(".arrow");

        pilihKota.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.classList.toggle("show");
            arrow.classList.toggle("rotate");
        });

        dropdown.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", () => {
                teksKota.textContent = item.textContent;
                document.getElementById("inputKota").value = item.textContent;
                dropdown.classList.remove("show");
                arrow.classList.remove("rotate");
            });
        });

        document.addEventListener("click", () => {
            dropdown.classList.remove("show");
            arrow.classList.remove("rotate");
        });
    </script>
</body>
</html>
