
<title>Log-in</title>
<div id="auth">
      <div class="row h-100">
        <div class="col-lg-5 col-12">
          <div id="auth-left">
            <div class="auth-logo">
                <img src="<?php echo base_url('./images/logo_sph.png')?>" alt="Logo"/>
            </div>
            <h1 class="auth-title">Log in</h1>
            <form action="<?= base_url('Home/aksi_login/?')?>"method="post">
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="text"
                  class="form-control form-control-xl"
                  placeholder="Username" name="username"
                />
                <div class="form-control-icon">
                  <i class="bi bi-person"></i>
                </div>
              </div>
              <div class="form-group position-relative has-icon-left mb-4">
                <input
                  type="password"
                  class="form-control form-control-xl"
                  placeholder="Password" name="pswd"
                />
                <div class="form-control-icon">
                  <i class="bi bi-shield-lock"></i>
                </div>
              </div>
              <div class="form-group">
   <label for="captcha">What is <?php echo $num1 ?> + <?php echo $num2 ?>?</label>
   <input type="hidden" name="num1" value="<?php echo $num1 ?>">
   <input type="hidden" name="num2" value="<?php echo $num2 ?>">
   <input type="text" class="form-control" id="captcha" name="captcha_answer" placeholder="Enter the answer">
</div>

              <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
                Log-in
              </button>
            </form>

          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right"></div>
        </div>
      </div>
    </div>