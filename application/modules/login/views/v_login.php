<?=
	$this->load->view('template/template_header');
?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-4 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <p>
						<b>SURVEI KEPUASAN MASYARAKAT</b>
                    </p>
                    <p>Terhadap kualitas pelayanan SAMSAT di Provinsi Jawa Barat</p>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <center><b>
                      
                                  <?php
                                      $info = $this->session->flashdata('info');
                                      if(!empty($info)){
                                        echo $info;
                                      }
                                 ?>
                    </b></center>
                    <form class="form-horizontal" action="<?= base_url('login/login/ceklogin'); ?>" method="post" >
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control" name="username" placeholder="Your Username"
                        required  oninvalid="this.setCustomValidity('Masukkan Username')"
                        oninput="this.setCustomValidity('')">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"
                        required oninvalid="this.setCustomValidity('Masukkan Password')"
                        oninput="this.setCustomValidity('')">
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                      </div>
                      <button class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  