<div class="login-container">

  <div class="login-box-modern">

    <div class="login-header">
      <h3>ADMIN LOGIN</h3>
      <p>Sign in to start your secure session</p>
    </div>

    <!-- Menampilkan Flashdata Error/Sukses -->
    <?php if($this->session->flashdata('message')): ?>
      <div class="flash-message-box">
        <?= $this->session->flashdata('message'); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('admin/login/proses_login')?>" method="post">

      <!-- Input Email -->
      <div class="form-group-custom">
        <label for="email">Email Address</label>
        <div class="input-wrapper">
          <input type="email" id="email" name="email" placeholder="Enter your email" required autocomplete="off">
          <span class="fas fa-envelope input-icon"></span>
        </div>
      </div>

      <!-- Input Password -->
      <div class="form-group-custom">
        <label for="password">Password</label>
        <div class="input-wrapper">
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <span class="fas fa-lock input-icon"></span>
        </div>
      </div>

      <!-- Tombol Login -->
      <button type="submit" class="btn-login-modern">
        Sign In <id class="fas fa-arrow-right style="margin-left:8px;"></id>
      </button>

    </form>

    <div class="login-footer">
      <a href="<?= base_url('beranda') ?>" class="back-link">
        <span class="fas fa-arrow-left"></span> Back To Beranda
      </a>
    </div>

  </div>

</div>

<!-- ==================== STYLE PREMIUM MODERN ==================== -->
<style>
/* Reset & Background Setup */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 20px;
}

/* Card Box */
.login-box-modern {
    background: #ffffff;
    width: 100%;
    max-width: 420px;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(0, 0, 0, 0.03);
    transition: transform 0.3s ease;
}

/* Header */
.login-header {
    text-align: center;
    margin-bottom: 32px;
}

.login-header h3 {
    color: #8B0000;
    font-weight: 800;
    letter-spacing: 1px;
    margin-bottom: 8px;
    font-size: 24px;
}

.login-header p {
    color: #64748b;
    font-size: 14px;
    margin: 0;
}

/* Custom Form Groups */
.form-group-custom {
    margin-bottom: 24px;
}

.form-group-custom label {
    display: block;
    font-size: 12px;
    font-weight: 600;
    color: #475569;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.input-wrapper input {
    width: 100%;
    padding: 12px 16px 12px 44px;
    font-size: 14px;
    background-color: #f8fafc;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    color: #1e293b;
    transition: all 0.2s ease;
    outline: none;
}

/* Efek Glow pas Input di-klik */
.input-wrapper input:focus {
    background-color: #ffffff;
    border-color: #8B0000;
    box-shadow: 0 0 0 4px rgba(139, 0, 0, 0.1);
}

/* Ikon di dalam Input */
.input-icon {
    position: absolute;
    left: 16px;
    color: #94a3b8;
    font-size: 16px;
    transition: color 0.2s ease;
}

.input-wrapper input:focus + .input-icon {
    color: #8B0000;
}

/* Tombol Sign In */
.btn-login-modern {
    width: 100%;
    padding: 14px;
    background: #8B0000;
    color: white;
    border: none;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 4px 12px rgba(139, 0, 0, 0.2);
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-login-modern:hover {
    background: #a30000;
    transform: translateY(-1px);
    box-shadow: 0 6px 20px rgba(139, 0, 0, 0.3);
}

.btn-login-modern:active {
    transform: translateY(1px);
}

/* Flashdata Message Box */
.flash-message-box {
    margin-bottom: 20px;
    font-size: 13px;
}

/* Footer Link */
.login-footer {
    margin-top: 32px;
    text-align: center;
    border-top: 1px solid #f1f5f9;
    padding-top: 20px;
}

.back-link {
    color: #64748b;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: color 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.back-link:hover {
    color: #8B0000;
    text-decoration: none;
}

/* Responsive Handphone */
@media (max-width: 480px) {
    .login-box-modern {
        padding: 30px 20px;
    }
}
</style>