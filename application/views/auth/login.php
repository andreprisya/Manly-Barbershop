<div class="container" style="margin-top: 50px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <!-- <div class="col-xl-10 col-lg-12 col-md-9"> -->
        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5" style="width: 500px;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h6>Sign in</h6>
                                    <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Masukkan Akunmu!</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="" method="post" action="<?= base_url('Auth/cek_login'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-user btn-block" style="background-color: #B09B71 ; color :white; font-weight: bold;">
                                        Masuk
                                    </button>
                                </form>
                                <hr>
                                <p style="text-align: center;">Belum memiliki akun? Daftarkan akunmu!</p>
                                <a href="<?= base_url('Welcome/register') ?>"type="submit" class="btn btn-user btn-outline btn-block" style="color :#B09B71; font-weight: bold; border: #B09B71; border-style: solid;">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>