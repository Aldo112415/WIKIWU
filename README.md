Tentu! Berikut adalah contoh README.md untuk proyek GitHub Anda yang menjelaskan cara memasang database menggunakan **XAMPP**, dengan nama database yang telah ditetapkan.  

---

# 📌 Panduan Instalasi Database dengan XAMPP  

## 📂 Persyaratan  
Sebelum memulai, pastikan Anda telah menginstal:  
- **XAMPP** (Unduh di [https://www.apachefriends.org](https://www.apachefriends.org))  
- **MySQL** (sudah termasuk dalam XAMPP)  

## ⚙️ Cara Mengatur Database  

1. **Jalankan XAMPP**  
   - Buka **XAMPP Control Panel**  
   - Aktifkan **Apache** dan **MySQL** dengan menekan tombol **Start**  

2. **Buka phpMyAdmin**  
   - Akses **phpMyAdmin** melalui browser:  
     ```
     http://localhost/phpmyadmin/
     ```  

3. **Buat Database Baru**  
   - Klik **"Database"**  
   - Masukkan nama database: **nama_database_saya** (ganti sesuai keinginan)  
   - Pilih **utf8_general_ci** sebagai collation  
   - Klik **"Buat"**  

4. **Import Struktur Database**  
   - Klik **database yang telah dibuat**  
   - Pilih tab **"Import"**  
   - Klik **"Choose File"** dan pilih file **database.sql** yang ada di repo ini  
   - Klik **"Go"** untuk mengimpor  

5. **Konfigurasi Koneksi Database**  
   Pastikan file **config.php** sudah sesuai dengan pengaturan berikut:  

   ```php
   <?php
   $host = "localhost";
   $user = "root"; // default XAMPP user
   $pass = ""; // kosongkan jika tidak ada password
   $dbname = "nama_database_saya"; // sesuaikan dengan nama database

   $conn = mysqli_connect($host, $user, $pass, $dbname);

   if (!$conn) {
       die("Koneksi gagal: " . mysqli_connect_error());
   }
   ?>
   ```  

## ✅ Selesai!  
Sekarang database Anda telah berhasil dipasang dan siap digunakan.  

