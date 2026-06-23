<!-- SIDEBAR ADMIN -->
<div class="sidebar">
    <h3><i class="fas fa-user-shield"></i> ADMIN</h3>

    <a href="<?= site_url('menu/admin?admin=1'); ?>" class="active">
        <i class="fas fa-tachometer-alt"></i> Dashboard
    </a>

    <a href="<?= site_url('menu/admin?admin=1&detail=makanan'); ?>">
        <i class="fas fa-utensils"></i> Makanan
    </a>

    <a href="<?= site_url('menu/admin?admin=1&detail=minuman'); ?>">
        <i class="fas fa-glass-martini-alt"></i> Minuman
    </a>

    <a href="<?= site_url('admin/login/logout'); ?>" class="logout-link">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</div>

<div class="container admin-content">

    <div class="main-header">
        <h2>DASHBOARD ADMIN</h2>
        <p class="text-muted">Kelola data makanan dan minuman Mie Ayam Top.</p>
    </div>

<?php
date_default_timezone_set('Asia/Jakarta');

$jam = date('H');

if($jam >= 5 && $jam < 12){
    $ucapan = "🌞 Selamat Pagi Admin";
}
elseif($jam >= 12 && $jam < 15){
    $ucapan = "☀️ Selamat Siang Admin";
}
elseif($jam >= 15 && $jam < 18){
    $ucapan = "🌤️ Selamat Sore Admin";
}
else{
    $ucapan = "🌙 Selamat Malam Admin";
}
?>

<?php if(!$this->input->get('aksi') && !$this->input->get('detail')): ?>

<div class="row">
    <div class="col-md-12">
        <div class="info-card">
            <h4><?= $ucapan; ?></h4>
            <p>Semoga harimu produktif dalam mengelola data menu.</p>
        </div>
    </div>
</div>

<?php endif; ?>

    <?php if($this->input->get('aksi') == 'tambah_makanan'): ?>

        <div class="custom-card form-tambah-box">
            <div class="card-header-custom">
                <span><i class="fas fa-plus-circle"></i> Tambah Makanan</span>
            </div>

            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="kategori" value="makanan">

                <div class="form-group">
                    <label>Nama Makanan</label>
                    <input type="text" name="nama" class="form-control-custom" placeholder="Contoh: Mie Ayam Bakso" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control-custom" placeholder="Contoh: 15000" required>
                </div>

                <div class="form-group">
                    <label>Foto Makanan</label>
                    <input type="file" name="gambar" class="form-control-custom" required>
                </div>

                <button type="submit" class="btn-submit-menu">
                    <i class="fas fa-save"></i> Simpan Makanan
                </button>
            </form>
        </div>

    <?php elseif($this->input->get('aksi') == 'tambah_minuman'): ?>

        <div class="custom-card form-tambah-box">
            <div class="card-header-custom">
                <span><i class="fas fa-plus-circle"></i> Tambah Minuman</span>
            </div>

            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="kategori" value="minuman">

                <div class="form-group">
                    <label>Nama Minuman</label>
                    <input type="text" name="nama" class="form-control-custom" placeholder="Contoh: Es Teh" required>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control-custom" placeholder="Contoh: 5000" required>
                </div>

                <div class="form-group">
                    <label>Foto Minuman</label>
                    <input type="file" name="gambar" class="form-control-custom" required>
                </div>

                <button type="submit" class="btn-submit-menu">
                    <i class="fas fa-save"></i> Simpan Minuman
                </button>
            </form>
        </div>

    <?php elseif($this->input->get('detail') == 'makanan'): ?>

        <div class="custom-card table-card">
            <div class="card-header-custom">
                <span><i class="fas fa-utensils"></i> Detail Data Makanan</span>

                <div>
                    <a href="<?= site_url('menu/admin?admin=1&aksi=tambah_makanan'); ?>" class="btn-kembali">
                        <i class="fas fa-plus"></i> Tambah Menu
                    </a>

                    <a href="<?= site_url('menu/admin?admin=1'); ?>" class="btn-kembali">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <table class="table table-hover-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no=1; foreach($menu as $m): ?>
                    <?php if(strtolower($m['kategori']) == 'makanan'): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><img src="<?= base_url('assets/Images/'.$m['gambar']); ?>" class="img-table-thumbnail"></td>
                        <td><?= $m['nama']; ?></td>
                        <td class="price-tag">Rp <?= number_format($m['harga'],0,',','.'); ?></td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?= site_url('menu/ubah/'.$m['id']); ?>" class="btn-action btn-edit">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= site_url('menu/hapus/'.$m['id']); ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus makanan ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php elseif($this->input->get('detail') == 'minuman'): ?>

        <div class="custom-card table-card">
            <div class="card-header-custom">
                <span><i class="fas fa-glass-martini-alt"></i> Detail Data Minuman</span>

                <div>
                    <a href="<?= site_url('menu/admin?admin=1&aksi=tambah_minuman'); ?>" class="btn-kembali">
                        <i class="fas fa-plus"></i> Tambah Menu
                    </a>

                    <a href="<?= site_url('menu/admin?admin=1'); ?>" class="btn-kembali">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>

            <table class="table table-hover-custom">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Minuman</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                <?php $no=1; foreach($menu as $m): ?>
                    <?php if(strtolower($m['kategori']) == 'minuman'): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><img src="<?= base_url('assets/Images/'.$m['gambar']); ?>" class="img-table-thumbnail"></td>
                        <td><?= $m['nama']; ?></td>
                        <td class="price-tag">Rp <?= number_format($m['harga'],0,',','.'); ?></td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?= site_url('menu/ubah/'.$m['id']); ?>" class="btn-action btn-edit">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= site_url('menu/hapus/'.$m['id']); ?>" class="btn-action btn-delete" onclick="return confirm('Yakin hapus minuman ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <?php else: ?>

        <div class="row dashboard-row">
            <div class="col-md-6">
                <div class="dashboard-card">
                    <i class="fas fa-utensils"></i>
                    <h3>Makanan</h3>
                    <h1><?= $jumlah_makanan; ?></h1>
                    <p>Total menu makanan</p>
                    <a href="<?= site_url('menu/admin?admin=1&detail=makanan'); ?>" class="btn-detail">
                        Detail Makanan
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dashboard-card">
                    <i class="fas fa-glass-martini-alt"></i>
                    <h3>Minuman</h3>
                    <h1><?= $jumlah_minuman; ?></h1>
                    <p>Total menu minuman</p>
                    <a href="<?= site_url('menu/admin?admin=1&detail=minuman'); ?>" class="btn-detail">
                        Detail Minuman
                    </a>
                </div>
            </div>
        </div>

<?php
$total_menu = count($menu);

$menu_terbaru = $this->db
    ->order_by('id', 'DESC')
    ->get('menu')
    ->result_array();
?>

        <div class="row">
            <div class="col-md-4">
                <div class="dashboard-card small-card">
                    <i class="fas fa-list"></i>
                    <h3>Total Menu</h3>
                    <h1><?= $total_menu; ?></h1>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card small-card">
                    <i class="fas fa-utensils"></i>
                    <h3>Total Makanan</h3>
                    <h1><?= $jumlah_makanan; ?></h1>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card small-card">
                    <i class="fas fa-glass-martini-alt"></i>
                    <h3>Total Minuman</h3>
                    <h1><?= $jumlah_minuman; ?></h1>
                </div>
            </div>
        </div>

        <div class="custom-card menu-terbaru-card">
            <div class="card-header-custom menu-terbaru-header">
                <i class="fas fa-clock"></i>
                <span>Menu Terbaru</span>
            </div>

            <div class="menu-terbaru-body">
                <table class="table table-bordered table-menu-terbaru">
                    <thead>
                        <tr>
                            <th style="width:60px;">No</th>
                            <th style="width:250px;">Nama Menu</th>
                            <th style="width:120px;">Kategori</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $no = count($menu_terbaru);
                    foreach($menu_terbaru as $m):
                    ?>
                        <tr>
                            <td><?= $no--; ?></td>
                            <td><?= $m['nama']; ?></td>
                            <td><?= ucfirst($m['kategori']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    <?php endif; ?>

</div>

<style>
body {
    background:#f8fafc;
    font-family:'Segoe UI', Arial, sans-serif;
}

.sidebar {
    position:fixed;
    left:0;
    top:0;
    width:240px;
    height:100%;
    background:linear-gradient(180deg,#8B0000,#5a0000);
    padding-top:25px;
}

.sidebar h3 {
    color:white;
    text-align:center;
    margin-bottom:35px;
    font-weight:800;
}

.sidebar a {
    display:flex;
    gap:12px;
    color:white;
    padding:15px 24px;
    text-decoration:none;
    font-weight:500;
}

.sidebar a:hover,
.sidebar a.active {
    background:rgba(255,255,255,0.15);
    text-decoration:none;
}

.logout-link:hover {
    background:#dc2626 !important;
}

.admin-content {
    margin-left:265px;
    padding:25px;
}

.main-header h2 {
    font-weight:800;
    color:#0f172a;
    margin-top:0;
}

.main-header p{
    margin-bottom:15px;
}

.info-card{
    background:white;
    border-radius:12px;
    padding:15px 18px;
    box-shadow:0 4px 10px rgba(0,0,0,0.05);
    margin-bottom:18px;
    min-height:80px;
}

.info-card h4{
    color:#8B0000;
    font-weight:700;
    margin-top:0;
}

.info-card p{
    margin-bottom:5px;
}

.menu-terbaru-header{
    justify-content:flex-start !important;
    gap:5px;
}

.custom-card,
.dashboard-card {
    background:white;
    border-radius:14px;
    box-shadow:0 4px 10px rgba(0,0,0,0.05);
    margin-bottom:18px;
    overflow:hidden;
}

.card-header-custom {
    padding:13px 18px;
    font-weight:700;
    color:#8B0000;
    border-left:5px solid #8B0000;
    border-bottom:1px solid #eee;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.btn-kembali{
    background:#8B0000;
    color:white;
    padding:6px 12px;
    border-radius:6px;
    text-decoration:none;
    font-size:12px;
    margin-left:5px;
    display:inline-block;
}

.btn-kembali:hover{
    background:#a30000;
    color:white;
    text-decoration:none;
}

.form-tambah-box form {
    padding:20px;
}

.form-group label {
    font-size:12px;
    font-weight:700;
    text-transform:uppercase;
}

.form-control-custom {
    width:100%;
    padding:10px 13px;
    border:1px solid #ddd;
    border-radius:8px;
    margin-bottom:13px;
}

.btn-submit-menu {
    width:100%;
    padding:11px;
    background:#10b981;
    color:white;
    border:none;
    border-radius:8px;
    font-weight:700;
}

.dashboard-row {
    margin-top:15px;
}

.dashboard-card {
    text-align:center;
    padding:15px;
    min-height:155px;
}

.dashboard-card i {
    font-size:24px;
    color:#8B0000;
    margin-bottom:7px;
}

.dashboard-card h1 {
    font-weight:800;
    font-size:26px;
    color:#0f172a;
    margin:5px 0;
}

.dashboard-card h3{
    font-size:17px;
    margin:5px 0;
}

.dashboard-card p{
    font-size:13px;
    margin-bottom:8px;
}

.small-card{
    min-height:130px;
    padding:13px;
}

.btn-detail {
    display:inline-block;
    margin-top:8px;
    padding:8px 15px;
    background:#8B0000;
    color:white;
    border-radius:8px;
    text-decoration:none;
    font-size:13px;
}

.btn-detail:hover {
    background:#a30000;
    color:white;
    text-decoration:none;
}

.table-hover-custom {
    width:100%;
    border-collapse:collapse;
}

.table-hover-custom th {
    background:#f8fafc;
    text-align:center;
    padding:12px;
    color:#475569;
}

.table-hover-custom td {
    text-align:center;
    vertical-align:middle;
    padding:13px;
    border-bottom:1px solid #eee;
}

.img-table-thumbnail {
    width:50px;
    height:50px;
    object-fit:cover;
    border-radius:10px;
}

.price-tag {
    font-weight:700;
    text-align:center;
}

.action-buttons {
    display:flex;
    justify-content:center;
    gap:8px;
}

.btn-action {
    padding:6px 12px;
    border-radius:6px;
    font-size:12px;
    font-weight:600;
    text-decoration:none;
}

.btn-edit {
    background:#fef3c7;
    color:#d97706;
}

.btn-delete {
    background:#fee2e2;
    color:#dc2626;
}

.menu-terbaru-card{
    max-width:15000px;
    margin:50px 0;
}

.menu-terbaru-body{
    padding:12px;
}

.table-menu-terbaru{
    width:100%;
    margin:0;
    font-size:13px;
}

.table-menu-terbaru th,
.table-menu-terbaru td{
    padding:6px 8px !important;
    white-space:nowrap;
}
</style>