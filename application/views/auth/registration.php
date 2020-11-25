  <!-- ----------------------------------- Content ----------------------------------- -->
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-12" style="min-height: 30vw;">
              <div class="col-md-6 rounded-left float-left" style="background-color: #a1e0db;height:552px">
                  <img class="" src="<?= base_url('assets/images/Logo Ori.png') ?>" style="height: 400px;width: auto;margin-left: 100px;margin-top: 60px;">
                  <!-- <hr> -->
              </div>
              <div class="col-md-6 rounded-right float-left" style="background-color: #d4f8e8;height:552px">
                  <h3 class="text-center mt-3">Form Registrasi Admin Baru</h3>
                  <?php $this->session->flashdata('pesan'); ?>
                  <!-- <hr> -->
                  <form class="col-md-12" action="<?= base_url('auth/registration') ?>" method="post">
                      <div class="d-flex justify-content-center">
                          <div class="col-md-10">
                              <div class="form-group">
                                  <label for="username" class="mt-0">Username</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fas fa-user"></i></div>
                                      </div>
                                      <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" value="<?= set_value('username') ?>">
                                  </div>
                                  <small class="text-danger"><?= form_error('username') ?></small>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="mt-0">Password</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                      </div>
                                      <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda">
                                  </div>
                              </div>
                              <div class="d-flex justify-content-around mt-0">
                                  <button type="submit" class="btn btn-success">SUBMIT</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>
  <!-- ----------------------------------- Content ----------------------------------- -->