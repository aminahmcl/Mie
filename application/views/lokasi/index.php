<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800;900&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body{
    background:#fff7e8;
    font-family:'Plus Jakarta Sans', sans-serif;
    color:#3b2418;
}

/* HERO LOKASI */
.lokasi-hero{
    background:#ffcc4d;
    padding:85px 0 70px;
    border-radius:0 0 80px 80px;
    position:relative;
    overflow:hidden;
}

.lokasi-hero:before{
    content:"";
    position:absolute;
    width:360px;
    height:360px;
    background:#fff0b8;
    border-radius:50%;
    right:-90px;
    top:40px;
}

.lokasi-hero:after{
    content:"";
    position:absolute;
    width:240px;
    height:240px;
    background:#8B0000;
    border-radius:50%;
    left:-80px;
    bottom:-80px;
}

.lokasi-hero-content{
    position:relative;
    z-index:2;
    text-align:center;
}

.lokasi-label{
    display:inline-block;
    background:#8B0000;
    color:white;
    padding:9px 18px;
    border-radius:30px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:15px;
}

.lokasi-hero h1{
    font-family:'Playfair Display', serif;
    font-size:58px;
    font-weight:800;
    color:#2b140b;
    margin:0 0 15px;
}

.lokasi-hero p{
    font-size:17px;
    color:#5d3925;
}

/* CONTENT */
.lokasi-section{
    padding:70px 0;
}

.info-card{
    background:white;
    border-radius:32px;
    padding:30px;
    box-shadow:0 14px 35px rgba(0,0,0,.07);
    margin-bottom:25px;
    height:100%;
}

.info-icon{
    width:70px;
    height:70px;
    background:#fff0d0;
    color:#8B0000;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    margin-bottom:18px;
}

.info-card h3{
    font-weight:900;
    color:#2b140b;
    margin-top:0;
}

.info-card p{
    color:#5d3925;
    line-height:1.7;
    margin-bottom:8px;
}

.map-card{
    background:white;
    border-radius:38px;
    padding:18px;
    box-shadow:0 14px 35px rgba(0,0,0,.08);
    overflow:hidden;
}

.map-header{
    padding:18px 15px 25px;
}

.map-header h3{
    font-weight:900;
    color:#2b140b;
    margin:0 0 8px;
}

.map-header p{
    color:#5d3925;
    margin:0;
}

.map-container{
    width:100%;
    height:470px;
    border-radius:28px;
    overflow:hidden;
}

.map-container iframe{
    width:100%;
    height:100%;
    border:0;
}

.action-box{
    background:#8B0000;
    color:white;
    border-radius:35px;
    padding:35px;
    margin-top:35px;
    box-shadow:0 14px 35px rgba(139,0,0,.18);
}

.action-box h3{
    font-weight:900;
    margin-top:0;
}

.action-box p{
    color:#ffe7a7;
}

.btn-lokasi{
    display:inline-block;
    background:#ffcc4d;
    color:#2b140b;
    padding:12px 24px;
    border-radius:30px;
    font-weight:900;
    text-decoration:none;
    margin-top:10px;
}

.btn-lokasi:hover{
    background:white;
    color:#8B0000;
    text-decoration:none;
}

/* PRELOADER */
#preloader{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:#0f172a;
    z-index:99999;
    display:flex;
    align-items:center;
    justify-content:center;
    transition:opacity .5s ease;
}

.loader-content{
    text-align:center;
}

.logo-loader{
    width:110px;
    animation:floatingLogo 2s ease-in-out infinite;
}

@keyframes floatingLogo{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
}

.modern-bar{
    width:160px;
    height:4px;
    background:rgba(255,255,255,.1);
    margin:0 auto;
    border-radius:10px;
    overflow:hidden;
}

.progress-line{
    width:40%;
    height:100%;
    background:linear-gradient(90deg,#8B0000,#ff4d4d);
    border-radius:10px;
    animation:loadingBar 1.5s infinite linear;
}

@keyframes loadingBar{
    0%{margin-left:-40%;}
    100%{margin-left:100%;}
}

.loading-text{
    color:#94a3b8;
    margin-top:15px;
    font-size:13px;
    letter-spacing:2px;
    font-weight:700;
}

@media(max-width:768px){
    .lokasi-hero h1{
        font-size:42px;
    }

    .map-container{
        height:330px;
    }
}
</style>

<div id="preloader">
    <div class="loader-content">
        <img src="<?= base_url('assets/Images/logo.png'); ?>" class="logo-loader">
        <div class="modern-bar">
            <div class="progress-line"></div>
        </div>
        <p class="loading-text">MEMUAT PETA LOKASI...</p>
    </div>
</div>

<section class="lokasi-hero">
    <div class="container lokasi-hero-content">
        <span class="lokasi-label">LOKASI KAMI</span>
        <h1>Temukan Mie Ayam Top</h1>
        <p>Datang langsung ke tempat kami dan nikmati mie ayam favorit dengan suasana nyaman.</p>
    </div>
</section>

<section class="lokasi-section">
<div class="container">

    <div class="row">
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-map-location-dot"></i>
                </div>
                <h3>Alamat</h3>
                <p>Jl. G. Obos No. 24</p>
                <p>Palangka Raya</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Jam Buka</h3>
                <p>Senin - Minggu</p>
                <p>09.00 - 21.00 WIB</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Kontak</h3>
                <p>WhatsApp Pemesanan</p>
                <p>0812-3456-7890</p>
            </div>
        </div>
    </div>

    <div class="map-card">
        <div class="map-header">
            <h3><i class="fas fa-location-dot"></i> Peta Lokasi</h3>
            <p>Gunakan peta di bawah untuk melihat lokasi Mie Ayam Top.</p>
        </div>

        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63788.72618176158!2d113.87556508713668!3d-2.2305030739218794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb3f58611afe7%3A0x21fe8fa505aa3f9c!2sMie%20Ayam%20Maliboro!5e0!3m2!1sen!2sus!4v1775528194460!5m2!1sen!2sus"
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <div class="action-box text-center">
        <h3>Mau Pesan Sekarang?</h3>
        <p>Klik tombol di bawah untuk langsung memesan menu favorit melalui WhatsApp.</p>

        <a href="https://wa.me/6281234567890?text=Halo%20saya%20mau%20pesan%20Mie%20Ayam%20Top"
           target="_blank"
           class="btn-lokasi">
           <i class="fab fa-whatsapp"></i> Pesan via WhatsApp
        </a>
    </div>

</div>
</section>

<script>
window.addEventListener("load", function(){
    var preloader = document.getElementById("preloader");

    setTimeout(function(){
        preloader.style.opacity = "0";

        setTimeout(function(){
            preloader.style.display = "none";
        }, 500);
    }, 700);
});
</script>