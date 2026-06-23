<section class="cart-page">
<div class="container">

    <div class="cart-title text-center">
        <p>MIE AYAM TOP</p>
        <h1>Keranjang Pesanan</h1>
    </div>

    <?php if(empty($keranjang)): ?>

        <div class="empty-cart text-center">
            <i class="fas fa-shopping-cart"></i>
            <h3>Keranjang masih kosong</h3>
            <p>Silakan pilih makanan atau minuman terlebih dahulu.</p>

            <div class="cart-action-icons">
                <a href="<?= site_url('menu/makanan'); ?>" class="btn-food" title="Tambah Makanan">🍜</a>
                <a href="<?= site_url('menu/minuman'); ?>" class="btn-drink" title="Tambah Minuman">🥤</a>
            </div>
        </div>

    <?php else: ?>

        <div class="cart-box">
            <table class="table table-bordered table-cart">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    $total = 0;
                    foreach($keranjang as $k): 
                    $subtotal = $k['harga'] * $k['qty'];
                    $total += $subtotal;
                    ?>
                    <tr>
                        <td>
                            <img src="<?= base_url('assets/Images/'.$k['gambar']); ?>" class="cart-img">
                        </td>
                        <td><?= $k['nama']; ?></td>
                        <td>Rp <?= number_format($k['harga'],0,',','.'); ?></td>
                        <td>
                            <a href="<?= site_url('menu/kurang_qty/'.$k['id']); ?>" class="btn-qty">-</a>
                            <span class="qty-text"><?= $k['qty']; ?></span>
                            <a href="<?= site_url('menu/tambah_qty/'.$k['id']); ?>" class="btn-qty">+</a>
                        </td>
                        <td>Rp <?= number_format($subtotal,0,',','.'); ?></td>
                        <td>
                            <a href="<?= site_url('menu/hapus_keranjang/'.$k['id']); ?>" 
                               class="btn-delete"
                               onclick="return confirm('Hapus menu ini dari keranjang?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="cart-bottom-row">

                <div class="cart-action-icons">
                    <a href="<?= site_url('menu/makanan'); ?>" class="btn-food" title="Tambah Makanan">🍜</a>
                    <a href="<?= site_url('menu/minuman'); ?>" class="btn-drink" title="Tambah Minuman">🥤</a>
                </div>

                <div class="cart-summary">
                    <h3>Total Pesanan: Rp <?= number_format($total,0,',','.'); ?></h3>

                    <div class="payment-box">
                        <h4>Metode Pembayaran</h4>

                        <div class="payment-dropdown">
                            <button type="button" class="payment-toggle" onclick="togglePaymentMenu()">
                                <span id="paymentText">Tunai</span>
                                <i class="fas fa-caret-down"></i>
                            </button>

                            <div id="paymentMenu" class="payment-menu">
                                <button type="button" onclick="pilihMetode('Tunai')">Tunai</button>
                                <button type="button" onclick="pilihMetode('QRIS')">QRIS</button>
                                <button type="button" onclick="pilihMetode('Transfer')">Transfer</button>
                            </div>
                        </div>

                        <input type="hidden" id="metodePembayaran" value="Tunai">

                        <div id="tunai-box">
                            <div class="tunai-card">
                                <div class="tunai-icon">💵</div>
                                <h4>Pembayaran Tunai</h4>
                                <p>Pembayaran dilakukan saat pesanan diterima atau diambil di tempat.</p>

                                <div class="tunai-total">
                                    <span>Total Bayar</span>
                                    <strong>Rp <?= number_format($total,0,',','.'); ?></strong>
                                </div>
                            </div>
                        </div>

                        <div id="qris-box">
                            <div class="qris-card">
                                <img src="<?= base_url('assets/Images/qris.jpg'); ?>" class="qris-img">
                                <h4>QRIS Mie Ayam Top</h4>
                                <p>Scan QRIS untuk melakukan pembayaran.</p>
                            </div>
                        </div>

                        <div id="transfer-box">
                            <div class="transfer-card">
                                <h4>Transfer Bank</h4>

                                <div class="bank-item">
                                    <p><strong>Bank BNI</strong></p>
                                    <p>7788990011</p>
                                    <p>a.n. Mie Ayam Top</p>
                                </div>

                                <div class="bank-item">
                                    <p><strong>Bank BTN</strong></p>
                                    <p>5544332211</p>
                                    <p>a.n. Mie Ayam Top</p>
                                </div>

                                <div class="bank-item">
                                    <p><strong>Bank Syariah Indonesia</strong></p>
                                    <p>6677889900</p>
                                    <p>a.n. Mie Ayam Top</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn-checkout" onclick="prosesBayar()">
                        <i class="fas fa-check-circle"></i> Selesaikan Pembayaran
                    </button>

                    <div id="notif-bayar">
                        Pembayaran selesai.
                    </div>
                </div>

            </div>
        </div>

    <?php endif; ?>

</div>
</section>

<style>
.cart-page{
    padding:70px 0;
    background:#fff7e8;
}

.cart-title p{
    color:#8B0000;
    font-weight:900;
    letter-spacing:3px;
}

.cart-title h1{
    font-size:48px;
    font-weight:900;
    color:#2b140b;
    margin-bottom:40px;
}

.cart-box,
.empty-cart{
    background:white;
    border-radius:35px;
    padding:35px;
    box-shadow:0 14px 35px rgba(0,0,0,.08);
}

.empty-cart i{
    font-size:60px;
    color:#8B0000;
    margin-bottom:15px;
}

.table-cart th{
    background:#8B0000;
    color:white;
    text-align:center;
}

.table-cart td{
    text-align:center;
    vertical-align:middle !important;
}

.cart-img{
    width:75px;
    height:75px;
    object-fit:cover;
    border-radius:15px;
}

.btn-qty{
    display:inline-block;
    width:30px;
    height:30px;
    line-height:30px;
    background:#8B0000;
    color:white;
    border-radius:50%;
    font-weight:900;
    text-decoration:none;
}

.btn-qty:hover{
    background:#a30000;
    color:white;
    text-decoration:none;
}

.qty-text{
    margin:0 10px;
    font-weight:900;
}

.btn-delete{
    background:#fee2e2;
    color:#dc2626;
    padding:7px 14px;
    border-radius:20px;
    font-weight:800;
    text-decoration:none;
}

.btn-delete:hover{
    color:#dc2626;
    text-decoration:none;
}

.cart-bottom-row{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap:20px;
    margin-top:25px;
}

.cart-action-icons{
    display:flex;
    align-items:center;
    gap:12px;
}

.btn-food,
.btn-drink{
    width:58px;
    height:58px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    font-size:28px;
    text-decoration:none;
    background:#2563eb;
    color:white;
    transition:.3s;
}

.btn-food:hover,
.btn-drink:hover{
    color:white;
    text-decoration:none;
    transform:scale(1.08);
}

.cart-summary{
    text-align:right;
    margin-left:auto;
}

.cart-summary h3{
    font-weight:900;
    color:#2b140b;
    margin-top:0;
}

.payment-box{
    margin-top:20px;
    text-align:right;
}

.payment-box h4{
    font-weight:900;
    color:#2b140b;
}

.payment-dropdown{
    position:relative;
    display:inline-block;
    text-align:left;
}

.payment-toggle{
    background:white;
    border:2px solid #8B0000;
    color:#8B0000;
    padding:11px 18px;
    border-radius:14px;
    font-weight:900;
    min-width:170px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.payment-menu{
    display:none;
    position:absolute;
    right:0;
    top:50px;
    width:170px;
    background:white;
    border-radius:14px;
    box-shadow:0 12px 30px rgba(0,0,0,.15);
    overflow:hidden;
    z-index:50;
}

.payment-menu button{
    display:block;
    width:100%;
    border:none;
    background:white;
    padding:13px 16px;
    text-align:left;
    font-weight:800;
    color:#2b140b;
}

.payment-menu button:hover{
    background:#8B0000;
    color:white;
}

#tunai-box{
    display:block;
    margin-top:20px;
}

#qris-box,
#transfer-box{
    display:none;
    margin-top:20px;
}

.tunai-card{
    background:#f0fdf4;
    border:3px solid #22c55e;
    border-radius:20px;
    padding:20px;
    width:340px;
    max-width:100%;
    margin-left:auto;
    text-align:center;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.tunai-icon{
    font-size:48px;
    margin-bottom:8px;
}

.tunai-card h4{
    color:#15803d;
    font-weight:900;
}

.tunai-card p{
    color:#444;
    font-weight:600;
}

.tunai-total{
    background:white;
    border-radius:15px;
    padding:14px;
    margin-top:15px;
}

.tunai-total span{
    display:block;
    color:#666;
    font-weight:800;
    font-size:13px;
}

.tunai-total strong{
    display:block;
    color:#15803d;
    font-size:24px;
    margin-top:5px;
}

.qris-card{
    background:#fff;
    border:3px solid #8B0000;
    border-radius:20px;
    padding:20px;
    width:340px;
    max-width:100%;
    margin-left:auto;
    text-align:center;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.qris-img{
    width:280px;
    max-width:100%;
    display:block;
    margin:auto;
    border-radius:10px;
}

.qris-card h4{
    margin-top:15px;
    color:#8B0000;
    font-weight:900;
}

.qris-card p{
    color:#555;
    font-weight:600;
}

.transfer-card{
    background:#fff7e8;
    border:3px solid #8B0000;
    border-radius:20px;
    padding:18px;
    width:340px;
    max-width:100%;
    margin-left:auto;
    text-align:left;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.transfer-card h4{
    color:#8B0000;
    font-weight:900;
    margin-top:0;
    text-align:center;
}

.bank-item{
    background:white;
    border-radius:14px;
    padding:12px 14px;
    margin-bottom:12px;
    border:1px solid #e7c7a2;
}

.bank-item:last-child{
    margin-bottom:0;
}

.bank-item p{
    margin-bottom:5px;
    color:#5d3925;
    font-weight:700;
}

.btn-checkout{
    display:inline-block;
    background:#8B0000;
    color:white;
    padding:13px 25px;
    border:none;
    border-radius:30px;
    font-weight:900;
    text-decoration:none;
    margin-top:15px;
}

.btn-checkout:hover{
    color:white;
    text-decoration:none;
    background:#a30000;
}

#notif-bayar{
    display:none;
    margin-top:18px;
    background:#dcfce7;
    color:#166534;
    padding:13px 18px;
    border-radius:15px;
    font-weight:800;
}

@media(max-width:768px){
    .cart-bottom-row{
        flex-direction:column;
        align-items:center;
    }

    .cart-summary{
        text-align:center;
        margin-left:0;
        width:100%;
    }

    .payment-box{
        text-align:center;
    }

    .tunai-card,
    .qris-card,
    .transfer-card{
        margin:auto;
    }
}
</style>

<script>
function togglePaymentMenu(){
    var menu = document.getElementById('paymentMenu');

    if(menu.style.display === 'block'){
        menu.style.display = 'none';
    }else{
        menu.style.display = 'block';
    }
}

function pilihMetode(metode){
    document.getElementById('paymentText').innerHTML = metode;
    document.getElementById('metodePembayaran').value = metode;
    document.getElementById('paymentMenu').style.display = 'none';

    document.getElementById('tunai-box').style.display = 'none';
    document.getElementById('qris-box').style.display = 'none';
    document.getElementById('transfer-box').style.display = 'none';

    if(metode === 'Tunai'){
        document.getElementById('tunai-box').style.display = 'block';
    }

    if(metode === 'QRIS'){
        document.getElementById('qris-box').style.display = 'block';
    }

    if(metode === 'Transfer'){
        document.getElementById('transfer-box').style.display = 'block';
    }
}

function prosesBayar(){
    var metode = document.getElementById('metodePembayaran').value;
    var notif = document.getElementById('notif-bayar');

    notif.innerHTML = 'Pembayaran ' + metode + ' selesai. Pesanan berhasil dibuat.';
    notif.style.display = 'block';
}

document.addEventListener('click', function(e){
    var dropdown = document.querySelector('.payment-dropdown');

    if(dropdown && !dropdown.contains(e.target)){
        document.getElementById('paymentMenu').style.display = 'none';
    }
});
</script>