<div class="container">
    <h2>Edit Menu</h2>
    <hr>

    <form method="post">

        <div class="form-group">
            <label>Nama Menu</label>
            <input type="text" name="nama" class="form-control" 
                   value="<?= $menu['nama']; ?>" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" 
                   value="<?= $menu['harga']; ?>" required>
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="makanan" <?= $menu['kategori']=='makanan'?'selected':''; ?>>Makanan</option>
                <option value="minuman" <?= $menu['kategori']=='minuman'?'selected':''; ?>>Minuman</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
   
      <a href="<?= site_url('menu/admin'); ?>" 
         class="btn btn-default">Kembali</a>
    </form>
</div>
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
