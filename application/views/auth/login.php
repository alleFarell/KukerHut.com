<div class="container mt-5" style="min-height: 40vw;">
    <div class="row">
        <div class="col-md-12 mb-0 mt-3">
            <?= $this->session->flashdata('pesan'); ?>
        </div>

        <div class="col-md-6 rounded-left float-left" style="background-color: #a1e0db;height:552px">
            <img class="" src="<?= base_url('assets/images/Logo Ori.png') ?>" style="height: 400px;width: auto;margin-left: 100px;margin-top: 60px;">
        </div>
        <div class="col-md-6 rounded-right float-left" style="background-color: #d4f8e8;height:552px;">
            <h3 class="text-center mt-3">Login</h3>
            <form class="col-md-12" action="<?= base_url('auth') ?>" method="post">
                <div class="d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="username" class="mt-0">Nama Admin</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input style="border-radius: 0 10px 10px 0;" type="text" name="username" id="username" class="form-control" placeholder="Masukkan Nama Admin" value="<?= set_value('username') ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="mt-0">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                </div>
                                <input style="border-radius: 0 10px 10px 0;" type="password" name="password" id="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-0">
                            <button type="submit" class="btn btn-success mb-4">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>