<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800;900&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body{
    background:#fff7e8;
    font-family:'Plus Jakarta Sans', sans-serif;
    color:#3b2418;
}

.home-hero{
    min-height:90vh;
    background:#ffcc4d;
    border-radius:0 0 80px 80px;
    position:relative;
    overflow:hidden;
    display:flex;
    align-items:center;
}

.home-hero:before{
    content:"";
    position:absolute;
    width:420px;
    height:420px;
    background:#fff0b8;
    border-radius:50%;
    right:-120px;
    top:80px;
}

.home-hero:after{
    content:"";
    position:absolute;
    width:280px;
    height:280px;
    background:#8B0000;
    border-radius:50%;
    left:-90px;
    bottom:-90px;
    opacity:.9;
}

.hero-content{
    position:relative;
    z-index:2;
    padding:60px 0;
}

.hero-label{
    display:inline-block;
    background:#8B0000;
    color:white;
    padding:9px 18px;
    border-radius:30px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:20px;
}

.hero-title{
    font-family:'Playfair Display', serif;
    font-size:76px;
    font-weight:800;
    color:#2b140b;
    line-height:1;
    margin:0 0 20px;
}

.hero-desc{
    font-size:18px;
    color:#5d3925;
    max-width:520px;
    line-height:1.7;
    margin-bottom:30px;
}

.hero-btn{
    display:inline-block;
    background:#8B0000;
    color:white;
    padding:14px 24px;
    border-radius:30px;
    font-weight:800;
    text-decoration:none;
    box-shadow:0 10px 20px rgba(139,0,0,.25);
    margin:5px 5px 5px 0;
}

.hero-btn:hover{
    background:#a30000;
    color:white;
    text-decoration:none;
}

.hero-img-box{
    position:relative;
    z-index:2;
    background:white;
    padding:22px;
    border-radius:45px;
    box-shadow:0 25px 45px rgba(0,0,0,.15);
}

.hero-img-box img{
    width:100%;
    height:420px;
    object-fit:cover;
    border-radius:35px;
}

.section-title{
    text-align:center;
    margin-bottom:45px;
}

.section-title span{
    color:#8B0000;
    font-weight:900;
    letter-spacing:2px;
}

.section-title h2{
    font-family:'Playfair Display', serif;
    font-size:46px;
    font-weight:800;
    color:#2b140b;
    margin-top:8px;
}

.home-section{
    padding:75px 0;
}

.reason-card{
    background:white;
    border-radius:32px;
    padding:35px 25px;
    text-align:center;
    box-shadow:0 14px 30px rgba(0,0,0,.07);
    margin-bottom:25px;
    transition:.3s;
}

.reason-card:hover{
    transform:translateY(-8px);
}

.reason-icon{
    width:75px;
    height:75px;
    background:#fff0d0;
    color:#8B0000;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    margin:0 auto 20px;
}

.reason-card h4{
    font-weight:900;
    color:#2b140b;
}

.about-box{
    background:white;
    border-radius:40px;
    padding:35px;
    box-shadow:0 14px 35px rgba(0,0,0,.07);
}

.about-box img{
    width:100%;
    height:360px;
    object-fit:cover;
    border-radius:32px;
}

.about-text p{
    font-size:15px;
    line-height:1.8;
    color:#5d3925;
}

.box{
    background:white;
    border-radius:40px;
    padding:40px;
    box-shadow:0 14px 35px rgba(0,0,0,.07);
}

.box h2{
    font-family:'Playfair Display', serif;
    font-size:42px;
    font-weight:800;
    color:#2b140b;
}

.box hr{
    width:70px;
    height:4px;
    background:#8B0000;
    border:none;
    border-radius:20px;
    margin:15px auto 35px;
}

.gallery-img-container{
    height:230px;
    border-radius:30px;
    overflow:hidden;
    margin-bottom:25px;
    box-shadow:0 12px 25px rgba(0,0,0,.08);
    cursor:pointer;
    position:relative;
}

.gallery-img-container img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.4s;
}

.gallery-img-container:hover img{
    transform:scale(1.08);
}

.gallery-overlay{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(139,0,0,.35);
    opacity:0;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    font-size:24px;
    transition:.3s;
}

.gallery-img-container:hover .gallery-overlay{
    opacity:1;
}

#galeriSlider{
    position:relative;
}

#galeriSlider .carousel-control{
    background-image:none !important;
    opacity:1;
    width:55px;
}

#galeriSlider .carousel-control .glyphicon{
    background:white;
    color:#8B0000;
    width:46px;
    height:46px;
    line-height:46px;
    border-radius:50%;
    font-size:16px;
    box-shadow:0 8px 18px rgba(0,0,0,.18);
}

#galeriSlider .left{
    left:-20px;
}

#galeriSlider .right{
    right:-20px;
}

.rating-big-box{
    margin-bottom:35px;
}

.rating-big-box h3{
    font-weight:900;
    font-size:46px;
    color:#2b140b;
    margin:0;
}

.review-card{
    background:white;
    border-radius:32px;
    padding:30px;
    text-align:center;
    box-shadow:0 14px 30px rgba(0,0,0,.07);
    margin-bottom:25px;
    transition:.3s;
}

.review-card:hover{
    transform:translateY(-8px);
}

.profile-wrapper{
    width:80px;
    height:80px;
    margin:0 auto 15px;
}

.profile{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:50%;
    border:4px solid #ffcc4d;
}

.review-card h4{
    font-weight:900;
    color:#2b140b;
}

.star{
    color:#f59e0b;
    font-size:18px;
}

.comment{
    min-height:65px;
    color:#5d3925;
}

.like-box{
    display:inline-flex;
    align-items:center;
    gap:7px;
    background:#fff7e8;
    color:#8B0000;
    padding:8px 15px;
    border-radius:30px;
    font-weight:800;
    cursor:pointer;
    border:1px solid #ffd7b0;
    user-select:none;
    transition:.2s;
}

.like-box:hover{
    background:#ffe5e5;
    color:#dc2626;
}

.like-box.active{
    background:#fee2e2;
    color:#dc2626;
    border-color:#fca5a5;
}

.like-box.active i{
    animation:heartBeat .3s;
}

@keyframes heartBeat{
    0%{transform:scale(1);}
    50%{transform:scale(1.4);}
    100%{transform:scale(1);}
}

#lightbox{
    display:none;
    position:fixed;
    z-index:99999;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.9);
    align-items:center;
    justify-content:center;
}

#lightbox img{
    max-width:85%;
    max-height:85%;
    border-radius:25px;
}

.close-btn{
    position:absolute;
    top:30px;
    right:45px;
    color:white;
    font-size:40px;
    cursor:pointer;
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
    .hero-title{font-size:48px;}
    .hero-img-box img{height:300px;}
}
</style>
<div id="preloader">
    <div class="loader-content">
        <img src="<?= base_url('assets/Images/logo.png'); ?>" class="logo-loader">
        <div class="modern-bar">
            <div class="progress-line"></div>
        </div>
        <p class="loading-text">MEMUAT BERANDA...</p>
    </div>
</div>

<section class="home-hero">
<div class="container hero-content">
    <div class="row">
        <div class="col-md-6">
            <span class="hero-label">MIE AYAM TOP</span>
            <h1 class="hero-title">Rasa Gurih, Bikin Nagih.</h1>
            <p class="hero-desc">
                Nikmati mie ayam pilihan dengan topping melimpah, rasa khas, dan harga yang ramah di kantong.
            </p>
        </div>

        <div class="col-md-6">
            <div class="hero-img-box">
                <img src="<?= base_url('assets/Images/mie.jpg'); ?>">
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-section">
<div class="container">
    <div class="section-title">
        <span>KEUNGGULAN</span>
        <h2>Kenapa Pilih Kami?</h2>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="reason-card">
                <div class="reason-icon"><i class="fas fa-bowl-food"></i></div>
                <h4>Mie Fresh</h4>
                <p>Dibuat dari bahan pilihan agar rasa tetap nikmat dan berkualitas.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="reason-card">
                <div class="reason-icon"><i class="fas fa-pepper-hot"></i></div>
                <h4>Bumbu Spesial</h4>
                <p>Racikan khas yang membuat rasa mie ayam lebih gurih dan kuat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="reason-card">
                <div class="reason-icon"><i class="fas fa-wallet"></i></div>
                <h4>Harga Terjangkau</h4>
                <p>Cocok untuk semua kalangan dengan porsi yang tetap memuaskan.</p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-section">
<div class="container">
    <div class="about-box">
        <div class="row" style="display:flex;align-items:center;flex-wrap:wrap;">
            <div class="col-md-6">
                <img src="<?= base_url('assets/Images/mie2.png'); ?>">
            </div>

            <div class="col-md-6 about-text">
                <p><strong>Mie Ayam Top</strong> menyajikan mie ayam terbaik dengan bahan baku segar pilihan tanpa bahan pengawet buatan. Kami berkomitmen memberikan pelayanan terbaik dan rasa konsisten untuk seluruh pelanggan setia kami.</p>
                <p>Sejak awal berdiri, Mie Ayam Top selalu mengutamakan higienitas, kemurnian rasa, serta kenyamanan tempat makan.</p>
                <p>Melalui website resmi ini, pelanggan dapat melihat varian menu dan melakukan pemesanan langsung melalui WhatsApp.</p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="home-section">
<div class="container">
  <div class="box text-center">
    <h2>GALERI AKTIVITAS KAMI</h2>
    <hr>

    <div id="galeriSlider" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        
        <div class="item active">
          <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame1.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame2.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame3.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame4.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame5.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame6.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame7.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="gallery-img-container" onclick="openLightbox(this.querySelector('img').src)">
                    <img src="<?= base_url('assets/Images/rame8.jpg'); ?>">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
          </div>
        </div>

      </div>

      <a class="left carousel-control" href="#galeriSlider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>

      <a class="right carousel-control" href="#galeriSlider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
</div>
</section>

<section class="home-section">
<div class="container">
  <div class="box text-center">
    <h2>APA KATA MEREKA?</h2>
    <hr>
    
    <div class="rating-big-box">
        <h3>4.9 <span style="font-size:20px; color:#64748b; font-weight:500;">/ 5.0</span></h3>
        <p style="color:#facc15; font-size:24px; margin:5px 0;">★★★★★</p>
        <p class="text-muted">Diulas oleh lebih dari 20.000+ pelanggan setia</p>
    </div>

    <div class="row">

      <div class="col-md-4">
        <div class="review-card">
          <div class="profile-wrapper">
            <img src="<?= base_url('assets/Images/user1.jpg'); ?>" class="profile">
          </div>
          <h4>@aisyah</h4>
          <p class="star">★★★★★</p>
          <p class="comment">"Mienya kenyal dan enak banget, kaldu kuahnya super gurih bikin ketagihan!"</p>

          <div class="like-box" onclick="like(this)">
            <i class="fas fa-heart"></i> Like (<span>10</span>)
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="review-card">
          <div class="profile-wrapper">
            <img src="<?= base_url('assets/Images/user2.jpg'); ?>" class="profile">
          </div>
          <h4>@sinta_food</h4>
          <p class="star">★★★★★</p>
          <p class="comment">"Porsi melimpah dengan harga pas di kantong, kualitas rasa tetap top!"</p>

          <div class="like-box" onclick="like(this)">
            <i class="fas fa-heart"></i> Like (<span>18</span>)
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="review-card">
          <div class="profile-wrapper">
            <img src="<?= base_url('assets/Images/user3.jpg'); ?>" class="profile">
          </div>
          <h4>@safirakuliner</h4>
          <p class="star">★★★★★</p>
          <p class="comment">"Tempatnya bersih, pelayanannya cepat, cocok untuk makan bareng keluarga."</p>

          <div class="like-box" onclick="like(this)">
            <i class="fas fa-heart"></i> Like (<span>14</span>)
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</section>

<div id="lightbox" onclick="closeLightbox()">
    <span class="close-btn">&times;</span>
    <img id="lightbox-img">
</div>

<script>
function openLightbox(src){
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox').style.display = 'flex';
}

function closeLightbox(){
    document.getElementById('lightbox').style.display = 'none';
}

function like(el){
    var span = el.querySelector("span");
    var count = parseInt(span.innerText);

    if(el.classList.contains("active")){
        span.innerText = count - 1;
        el.classList.remove("active");
        el.innerHTML = '<i class="fas fa-heart"></i> Like (<span>' + (count - 1) + '</span>)';
    } else {
        span.innerText = count + 1;
        el.classList.add("active");
        el.innerHTML = '<i class="fas fa-heart"></i> Liked (<span>' + (count + 1) + '</span>)';
    }
}
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