# 🥅 GoalTime  

**GoalTime** adalah aplikasi reservasi lapangan futsal online yang memudahkan pemain futsal dalam mencari, memilih, dan memesan lapangan dengan cepat, praktis, dan akurat. Aplikasi ini dirancang untuk membantu manajemen penyewaan lapangan dan memberikan pengalaman pemesanan yang modern tanpa perlu datang langsung ke lokasi.

---

## 🎯 Tujuan Aplikasi
- Mempermudah pengguna dalam menemukan lapangan futsal terdekat
- Menghemat waktu proses pemesanan
- Meminimalisir double booking
- Mendukung digitalisasi manajemen penyewaan lapangan futsal

---

## 📦 Fitur Utama
- Registrasi & Login pengguna  
- Pencarian dan pemilihan lapangan futsal
- Reservasi lapangan berbasis tanggal dan jam
- Informasi lapangan lengkap (foto, lokasi, harga, rating)
- Testimoni dan ulasan pengguna
- Berbagai metode pembayaran
- Konfirmasi pemesanan otomatis
- Riwayat booking pengguna

---

## 🛠️ Teknologi yang Digunakan
| Teknologi | Deskripsi |
|-----------|-----------|
| 🎨 Figma | Desain UI/UX |
| 🌐 HTML | Struktur halaman |
| 🎨 CSS | Styling tampilan |
| ⚡ JavaScript | Interaksi dinamis |
| 🖥️ PHP | Backend & server processing |
| 🗄️ MySQL | Database |
| 🖥️ Laragon / XAMPP | Web server lokal |

---

## 🧑‍💻 Cara Penggunaan
1. Buka website **GoalTime**
2. Registrasi atau login akun pengguna
3. Pilih lapangan yang tersedia dari menu Discover
4. Pilih tanggal & waktu
5. Lakukan pembayaran
6. Sistem mengirimkan konfirmasi booking

---

## 🔁 Alur Sistem (Flow)
```
User → Login/Signup → Pilih Lapangan → Pilih Jadwal → Pembayaran → Konfirmasi → Booking Tersimpan
```

---

## 🧱 Entitas & Struktur Database

### Entitas yang Digunakan
| Entitas | Deskripsi |
|---------|-----------|
| **Users** | Data akun pengguna |
| **Lapangan** | Informasi lapangan futsal |
| **Booking** | Data pemesanan lapangan |
| **Testimoni** | Ulasan & rating pengguna |

### Struktur Field Utama
| Tabel | Field |
|-------|--------|
| **users** | id_user, username, email, password, foto |
| **lapangan** | id_lapangan, name, rating, location, price, img |
| **booking** | id_booking, lapangan_id, nama_lapangan, tanggal, waktu_mulai, waktu_selesai, harga, status, dibuat_pada |
| **testimoni** | id_testimoni, user_name, user_city, komentar, rating, foto |

---

## ⚙️ Instalasi & Setup Database

### 1. Clone Repository
```bash
git clone https://github.com/Jopannnn/PWL-GoalTime.git
cd PWL-GoalTime
```

### 2. Install & Jalankan Server
- Install **XAMPP / Laragon**
- Aktifkan **Apache & MySQL**

### 3. Import Database
- Buka phpMyAdmin  
  http://localhost/phpmyadmin
- Buat database baru **web_futsal**
- Import file `web_futsal.sql`

### 4. Konfigurasi Database
```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "web_futsal";
```

### 5. Jalankan Website
```
http://localhost/PWL-GoalTime
```

---

## 🚀 Rencana Pengembangan (Future Improvement)
- Integrasi pembayaran otomatis (QRIS / VA)
- Notifikasi email / WhatsApp otomatis
- Dashboard admin untuk manajemen lapangan
- Multi-cabang penyedia lapangan
- Integrasi Google Maps API

---

## 🤝 Kontribusi
```bash
git checkout -b fitur-baru
git commit -m "Tambah fitur baru"
git push origin fitur-baru
```
Ajukan Pull Request

---

## 📜 Lisensi
Proyek ini dibuat untuk tujuan pembelajaran.  
Bebas digunakan & dikembangkan lebih lanjut.

---

## 👥 Tim Pengembang
| Nama | Peran |
|-------|--------|
| Jovan Albert William | Front End Developer |
| Devon Austin Vintjhe | Back End Developer |
| Michelle Nathaliu | UI/UX Designer |

---

## 📩 Kontak
- Jovan — **jov132009@gmail.com**
- Devon — **devonaustin042@gmail.com**

---

## 🙌 Terima Kasih
Terima kasih telah mengunjungi proyek GoalTime.  
Semoga bermanfaat dan menginspirasi untuk pengembangan selanjutnya.

**Selamat Berkarya! ⚽🔥**

