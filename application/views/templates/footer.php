<footer class="footer text-center">
  <div class="container">
    <img src="<?= base_url('assets/Images/logo.png'); ?>" class="footer-logo">

    <div class="footer-menu">
      <a href="<?= base_url('beranda'); ?>">Beranda</a>
      <a href="<?= site_url('menu/makanan'); ?>">Makanan</a>
      <a href="<?= site_url('menu/minuman'); ?>">Minuman</a>
      <a href="<?= site_url('lokasi'); ?>">Lokasi</a>
      <a href="<?= site_url('menu/keranjang'); ?>">Keranjang</a>
    </div>

    <p class="footer-text">&copy; <?= date('Y'); ?> Mie Ayam Top. All Rights Reserved.</p>
  </div>
</footer>

<style>
.footer{
  background:#2b140b;
  color:#fff;
  padding:50px 0 25px;
  margin-top:60px;
}

.footer-logo{
  width:85px;
  margin-bottom:20px;
}

.footer-menu{
  margin-bottom:20px;
}

.footer-menu a{
  color:#fff0d9;
  margin:0 14px;
  font-weight:600;
  text-decoration:none;
}

.footer-menu a:hover{
  color:#facc15;
}

.footer-text{
  color:#d8c2ad;
  font-size:13px;
}
</style>
</body>
</html>