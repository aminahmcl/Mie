<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body{
      padding-top:80px;
      background:#fff8ef;
      font-family:'Plus Jakarta Sans', sans-serif;
      color:#2b2b2b;
    }

    .navbar{
      min-height:80px;
      background:#fff8ef !important;
      border:none !important;
      box-shadow:0 5px 20px rgba(0,0,0,0.06);
    }

    .navbar-brand{
      font-family:'Great Vibes', cursive !important;
      font-size:38px;
      color:#8B0000 !important;
      padding-top:25px;
    }

    .navbar-toggle{
      margin-top:22px;
      border:2px solid #8B0000 !important;
      border-radius:10px;
    }

    .navbar-toggle .icon-bar{
      background:#8B0000 !important;
    }

    .navbar-nav > li > a{
      color:#252525 !important;
      font-weight:700;
      padding-top:30px;
      padding-bottom:30px;
    }

    .navbar-nav > li > a:hover{
      color:#8B0000 !important;
      background:transparent !important;
    }

    .dropdown-menu{
      border:none;
      border-radius:14px;
      box-shadow:0 10px 25px rgba(0,0,0,0.12);
      padding:10px;
    }

    .dropdown-menu > li > a{
      padding:10px 18px;
      border-radius:10px;
      font-weight:600;
    }

    .dropdown-menu > li > a:hover{
      background:#8B0000;
      color:white;
    }

    .cart-link{
      color:#252525 !important;
      position:relative;
      font-weight:800 !important;
      padding-left:18px !important;
    }

    .cart-icon-wrap{
      position:relative;
      display:inline-block;
      margin-right:5px;
    }

    .cart-number{
      position:absolute;
      top:-14px;
      right:-13px;
      min-width:21px;
      height:21px;
      line-height:21px;
      text-align:center;
      background:#8B0000;
      color:white;
      border-radius:50%;
      font-size:11px;
      font-weight:900;
      border:2px solid #fff8ef;
    }

    @media(max-width:767px){
      body{
        padding-top:80px;
      }

      .navbar-brand{
        font-size:32px;
        padding-top:22px;
      }

      .navbar-collapse{
        background:#fff8ef;
        border-top:1px solid #f0ddc5;
      }

      .navbar-nav{
        margin:0 -15px;
      }

      .navbar-nav > li > a{
        padding:15px 25px;
      }

      .dropdown-menu{
        box-shadow:none;
        border-radius:0;
        padding-left:25px;
        background:#fff8ef !important;
      }

      .dropdown-menu > li > a{
        color:#252525 !important;
      }
    }
  </style>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarUser">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?= base_url('index.php/beranda'); ?>">Mie Ayam Top</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarUser">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="<?= base_url('index.php/beranda'); ?>">Beranda</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Menu <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?= base_url('index.php/menu/makanan'); ?>">Makanan</a></li>
            <li><a href="<?= base_url('index.php/menu/minuman'); ?>">Minuman</a></li>
          </ul>
        </li>

        <li><a href="<?= base_url('index.php/lokasi'); ?>">Lokasi</a></li>

        <li>
          <a href="<?= site_url('menu/keranjang'); ?>" class="cart-link">
            <span class="cart-icon-wrap">
              <i class="fas fa-shopping-cart"></i>
              <span class="cart-number">
                <?= isset($jumlah_keranjang) ? $jumlah_keranjang : 0; ?>
              </span>
            </span>
            Keranjang
          </a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>