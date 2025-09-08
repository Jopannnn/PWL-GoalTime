# 🥅 GoalTime  

Website **GoalTime** adalah aplikasi reservasi lapangan futsal online yang **mudah, praktis, dan tersedia banyak pilihan lapangan di seluruh Indonesia**.  

---

## 📦 Features
- Registrasi & login pengguna  
- Reservasi online yang mudah dan praktis  
- Informasi lapangan yang lengkap & jelas  
- Testimoni dari atlet profesional  
- Lokasi lapangan yang akurat  
- Foto lapangan yang jelas  
- Berbagai metode pembayaran tersedia  

---

## 🛠️ Teknologi yang digunakan
| Teknologi | Deskripsi |
|-----------|-----------|
| 🎨 Figma | Mendesain UI/UX |
| 🌐 HTML | Struktur utama halaman web |
| 🎨 CSS | Styling tampilan web |
| ⚡ JavaScript | Interaksi dinamis & responsif |
| 🖥️ PHP | Backend untuk memproses data & logika server |
| 🗄️ MySQL | Database untuk menyimpan data pengguna, lapangan, & reservasi |
| 🖥️ Laragon / XAMPP | Local server untuk menjalankan PHP & database |

---

## 🧑‍💻 Cara Penggunaan
1. Buka halaman utama **GoalTime**  
2. Registrasi akun atau login  
3. Pilih lapangan futsal yang tersedia  
4. Lakukan pembayaran  
5. Konfirmasi reservasi  

---

## 🏗️ Arsitektur Proyek

### 🖼️ Frontend
Halaman yang tersedia:
- **Homepage** → Halaman utama / Landing Page  
- **Discover** → Cari lapangan lebih banyak  
- **Testimoni** → Review dari pengguna  
- **About Us** → Informasi tentang website  
- **Reservasi** → Formulir pendaftaran lapangan  
- **Payment** → Proses transaksi pembayaran  
- **Login** → Halaman login pengguna  
- **Sign Up** → Pendaftaran akun  

### 🗄️ Back End
Data yang tersedia:
- **Users** — Data pengguna (nama, email, password)  
- **Lapangan** — Data lapangan (nama, lokasi, harga, deskripsi, rating)  
- **Data Booking** — Data pemesanan (id_user, id_lapangan)  

---

## ⚙️ Instalasi

1. Clone Repository
   ```bash
   git clone https://github.com/Jopannnn/PWL-GoalTime.git
   cd PWL-GoalTime 
   
2. Install dan Jalankan Server
- Install Laragon atau XAMPP
- Aktifkan Apache & MySQL

3. Import Database
 - Buka phpMyAdmin di browser: http://localhost/phpmyadmin
 - Buat database baru, misalnya **web_futsal**
 - Pilih database tersebut, lalu masuk ke tab Import
- Klik Choose File dan pilih file **web_futsal.sql** dari folder project
- Klik Go untuk menjalankan import

4. Konfigurasi Database
- **$host = "localhost"**;
- **$user = "root"**;
- **$pass = ""**;
- **$db   = "web_futsal"**;

5. Jalankan Website
http://localhost/PWL-GoalTime

## 🤝 Kontribusi ## 
1. Clone repository ini
2. Buat branch baru contohnya **(git checkout -b fitur-baru)**
3. Commit perubahan contohnya ** (git commit -m "Tambah fitur baru")**
4. Push ke branch **(git push origin fitur-baru)**
5. Ajukan Pull Request

## 📜 Lisensi ## 
Proyek ini dibuat untuk tujuan pembelajaran.
Bebas digunakan & dikembangkan lebih lanjut. 

## 👥 Tim Pengembang ##
- Jovan Albert William ( Front End Developer)
- Devon Austin Vintjhe ( Back End Developer)
- Michelle Nathaliu ( UI/UX Designer )

## 📩 Hubungi Kami ##
Jika Anda memiliki pertanyaan, saran, atau ingin berkolaborasi, jangan ragu untuk menghubungi kami: 
- Jovan Albert William ( Front End ) => jov132009@gmail.com
- Devon Austin Vintjhe ( Back End ) => devonaustin042@gmail.com

## 🙌 Terima Kasih ##
Terima kasih telah mengunjungi proyek GoalTime. Kami harap proyek ini bermanfaat, baik sebagai referensi pembelajaran maupun inspirasi untuk karya Anda berikutnya.

Selamat Berkarya dan memodifikasi website ini!
