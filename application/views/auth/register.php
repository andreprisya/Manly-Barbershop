<div class="container" style="margin-top: 50px;">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h6>Sign Up</h6>
                            <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Daftarkan Akunmu!</h1>
                        </div>
                        <form action="<?= base_url('Auth/cek_regis') ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="nama" value="" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">

                            </div>
                            <div class="form-group">
                                <input type="text" value="" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <input type="text" name="no_hp" value="" class="form-control form-control-user" id="no_hp" placeholder="Nomor Handphone">

                            </div>

                            <div class="form-group">
                                <input type="text" name="username" value="" class="form-control form-control-user" id="username" placeholder="Username">

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" value="" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">

                                </div>
                                <div class="col-sm-6">
                                    <input type="password" value="" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">

                                </div>
                            </div>
                            <button type="submit" class="btn btn-user btn-block" style="background-color: #B09B71 ; color :white; font-weight: bold;">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <p style="text-align: center;">Sudah memiliki akun? Masuk ke akunmu!</p>
                        <a href="<?= base_url('Welcome/login') ?>" type="submit" class="btn btn-user btn-outline btn-block" style="color :#B09B71; font-weight: bold; border: #B09B71; border-style: solid;">
                            Masuk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>