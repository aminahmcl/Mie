<section id="order">
<div class="container">


<div class="row text-center">
  <div class="col-md-12">
    <h2>TAMBAH MENU</h2>
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <form method="post" enctype="multipart/form-data">

      <input type="text" name="nama" class="form-control" placeholder="Nama Menu"><br>

      <input type="number" name="harga" class="form-control" placeholder="Harga"><br>

      <input type="file" name="gambar" class="form-control"><br>

      <select name="kategori" class="form-control">
        <option value="makanan">Makanan</option>
        <option value="minuman">Minuman</option>
      </select><br>
      
      <button type="submit" class="btn btn-success">Tambah</button>

      <a href="<?= site_url('menu/admin'); ?>" 
         class="btn btn-default">Kembali</a>

    </form>

  </div>
</div>

</div>
</section>

<style>
.footer {
  background: #2c2c2c;
  color: white;
  padding: 40px 0;
  margin-top: 50px;
  text-align: center;
}

.footer-logo {
  width: 80px !important;
  height: auto !important;
  margin-bottom: 15px;
}

.footer-menu a {
  color: white;
  margin: 0 10px;
  text-decoration: none;
}

.footer-menu a:hover {
  color: #ff4d4d;
}

.footer-text {
  font-size: 14px;
  color: #ccc;
}

html, body {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
}

section#order {
  flex: 1;
}
</style>