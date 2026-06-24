# 🍜 Mie Ayam Top - Platform E-Commerce & Katalog Digital

Proyek web e-commerce berbasis kuliner ini dikembangkan sebagai pemenuhan tugas besar untuk mata kuliah **Web Framework**. Aplikasi ini mengintegrasikan platform katalog produk interaktif, sistem keranjang belanja (*shopping cart*) real-time, fleksibilitas metode pembayaran, serta sistem manajemen basis data (*back-end admin panel*) dengan kapabilitas manajemen data (CRUD) yang lengkap.

---

## 👥 Pengembang & Identitas Akademik
* **Nama:** Aminah
* **NIM:** E2457401013
* **Mata Kuliah:** Web Framework
* **Program Studi:** D3 Manajemen Informatika
* **Institusi:** STMIK Palangkaraya
* **Tahun Akademik:** 2026

---

## 🌐 Tautan Proyek & Kredensial Akses
* **Repositori GitHub:** [https://github.com/aminahmcl/Mie](https://github.com/aminahmcl/Mie)
* **Demo Website Live:** [https://topyam.gt.tc](https://topyam.gt.tc)
* **Kredensial Akses Panel Admin (Back-End):**
  * **Email:** `aminah@gmail.com`
  * **Password:** `123`

---

## 🚀 Fitur Utama Sistem

### 1. Antarmuka Pengunjung (Front-End)
* **Hero Section:** Tampilan utama interaktif dengan skema warna kuning hangat yang dirancang secara ergonomis untuk membangun impresi visual awal yang kuat, dilengkapi slogan utama *"Rasa Gurih, Bikin Nagih."*
* **Fitur Keunggulan (Features Section):** Representasi kartu visual untuk tiga pilar utama toko, yaitu *Mie Fresh*, *Bumbu Spesial*, dan *Harga Terjangkau*.
* **Bukti Sosial (Social Proof):** Dilengkapi dengan komponen *carousel* untuk galeri aktivitas suasana warung serta testimoni interaktif pelanggan dengan sistem penilaian akumulatif (Rating 4.9/5.0).
* **Navigasi Terstruktur & Katalog:** Implementasi *dropdown menu* yang memisahkan kategori produk secara efisien menjadi sub-menu Makanan dan Minuman (dilengkapi badge visual *"SEGAR"*).
* **Keranjang Belanja Real-Time:** Sistem *checkout* terintegrasi yang menghitung subtotal pesanan secara otomatis dengan pilihan opsi metode pembayaran dinamis (Tunai/COD, QRIS, dan Transfer Bank).
* **Aksesibilitas Informasi:** Integrasi Google Maps API untuk akurasi lokasi fisik toko (Jl. G. Obos No. 24, Palangka Raya) serta tombol pemesanan manual instan via WhatsApp Gateway.

### 2. Panel Kontrol Manajemen (Back-End Admin)
* **Autentikasi Aman:** Gerbang masuk admin dilengkapi dengan sistem *session-handling* formulir login (Email & Password) serta notifikasi *flash message* berbasis komponen UI hijau saat berhasil melakukan *logout*.
* **Dashboard Statistik:** Menyajikan ringkasan visual kuantitas data (*Total Menu*, *Total Makanan*, *Total Minuman*) beserta tabel *real-time execution* untuk pemantauan menu terbaru yang masuk ke database.
* **Sistem CRUD Data Produk:** Panel admin memiliki hak akses penuh untuk melakukan operasi data, meliputi penginputan menu baru (`+ Tambah Menu`), pembaruan informasi (`Edit`), serta penghapusan data (`Hapus`) langsung pada tabel katalog makanan dan minuman.

---

## 🛠️ Arsitektur Teknologi & Dependensi
* **Sisi Klien (Front-End):** HTML5, CSS3, Bootstrap Framework (styling komponen UI, Grid Layout, Dropdown, Modals, Carousel), JavaScript (interaktivitas Keranjang & Kalkulasi Total Belanja).
* **Sisi Server & Database (Back-End):** PHP Modern Environment / CodeIgniter MVC Framework, Relational Database Management System (MySQL/MariaDB) untuk persistensi data produk dan autentikasi admin.
* **Alat Pengembangan:** Sublime Text / VS Code, Git & GitHub Version Control, Web Hosting Server Environment.

---

## 📂 Struktur Direktori Utama Proyek
```text
mie-ayam-top/
├── app/                  # Logika aplikasi Backend (MVC Architecture)
│   ├── Controllers/      # Controller untuk mengatur alur data Front-End & Admin
│   ├── Models/           # Model untuk interaksi query ke database MySQL
│   └── Views/            # Template tampilan UI (Beranda, Katalog, Login, Dashboard)
├── public/               # Asset statis yang dapat diakses publik
│   ├── css/              # File konfigurasi stylesheet gaya tampilan web
│   ├── js/               # Skrip logika keranjang belanja dan interaktivitas
│   └── images/           # Direktori penyimpanan foto produk (mie ayam, minuman, dll.)
├── database/             # File dump script SQL (.sql) untuk skema database
└── README.md             # Dokumentasi teknis proyek (File ini)
