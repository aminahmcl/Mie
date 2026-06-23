<div class="card">
  <div class="card-body register-card-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?= base_url('admin/registrasi') ?>" method="post">

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Full name" id="nama_lengkap" name="nama_lengkap">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-user"></span>
          </div>
        </div>
      </div>
      <?= form_error('nama_lengkap','<small class="text-danger">','</small>'); ?>

      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" id="email" name="email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <?= form_error('email','<small class="text-danger">','</small>'); ?>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <?= form_error('password','<small class="text-danger">','</small>'); ?>

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Retype password" id="repassword" name="repassword">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <?= form_error('repassword','<small class="text-danger">','</small>'); ?>

      <div class="row">
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
      </div>

    </form>

    <a href="<?= base_url('admin/login')?>">Back to login</a>

  </div>
</div>
