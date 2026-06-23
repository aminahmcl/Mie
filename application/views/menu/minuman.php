<div id="preloader">
    <div class="loader-content">
        <img src="<?= base_url('assets/Images/logo.png'); ?>" class="logo-loader">
        <div class="modern-bar">
            <div class="progress-line"></div>
        </div>
        <p class="loading-text">MEMUAT MENU MINUMAN...</p>
    </div>
</div>

<section class="catalog-hero">
    <div class="container text-center">
        <p class="hero-small">MIE AYAM TOP</p>
        <h1>Katalog Minuman</h1>
        <p class="hero-desc">
            Minuman segar pilihan sebagai pelengkap menu favorit kamu.
        </p>
    </div>
</section>

<section class="catalog-section">
<div class="container">

    <div class="row">
        <?php foreach($menu as $m): ?>
        <div class="col-sm-6 col-md-4">

            <div class="product-card">

                <div class="badge-new">SEGAR</div>

                <div class="product-img-box">
                    <img src="<?= base_url('assets/Images/'.$m['gambar']); ?>" class="product-img">
                </div>

                <div class="product-info">
                    <h3><?= $m['nama']; ?></h3>
                    <p>Minuman segar Mie Ayam Top</p>
                    <h4>Rp <?= number_format($m['harga'],0,',','.'); ?></h4>
                </div>

                <a href="<?= site_url('menu/tambah_keranjang/'.$m['id']); ?>" class="cart-circle">
                    <i class="fas fa-shopping-bag"></i>
                </a>

            </div>

        </div>
        <?php endforeach; ?>
    </div>

</div>
</section>

<style>
body{
    background:#fff8ef;
    font-family:'Plus Jakarta Sans', sans-serif;
}

.catalog-hero{
    text-align:center;
    padding:50px 0 35px;
}

.hero-small{
    color:#8B0000;
    font-weight:800;
    letter-spacing:3px;
    margin-bottom:10px;
}

.catalog-hero h1{
    font-size:42px;
    font-weight:900;
    color:#2b140b;
    margin-bottom:10px;
}

.hero-desc{
    color:#666;
    font-size:15px;
}

.catalog-section{
    padding:20px 0 60px;
}

.product-card{
    background:#fff;
    border-radius:25px;
    padding:20px;
    margin-bottom:30px;
    box-shadow:0 8px 25px rgba(0,0,0,0.08);
    position:relative;
    min-height:420px;
    transition:.3s;
}

.product-card:hover{
    transform:translateY(-5px);
}

.badge-new{
    position:absolute;
    top:15px;
    right:15px;
    width:65px;
    height:65px;
    border:2px dashed #c20b35;
    border-radius:50%;
    color:#c20b35;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:11px;
    font-weight:800;
}

.product-img-box{
    height:210px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.product-img{
    max-width:100%;
    max-height:200px;
    object-fit:contain;
}

.product-info{
    margin-top:15px;
}

.product-info h3{
    font-size:20px;
    font-weight:900;
    color:#b40022;
    margin-bottom:8px;
    text-transform:uppercase;
}

.product-info p{
    color:#555;
    font-size:14px;
}

.product-info h4{
    color:#8B0000;
    font-size:20px;
    font-weight:900;
    margin-top:10px;
}

.cart-circle{
    position:absolute;
    bottom:20px;
    right:20px;
    width:55px;
    height:55px;
    border-radius:50%;
    background:#8B0000;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:18px;
    text-decoration:none;
}

.cart-circle:hover{
    background:#a30000;
    color:white;
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
</style>

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