
<link rel="stylesheet" href="<?= base_url();?>assets/css/main.css">

<body class="bg-malibu-beach">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">

                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-700 mb-4">Buat akun baru!</h1>
                            </div>

                            <form class="user" id="signupform" role="form" method="post" action="<?= base_url('register/index'); ?>">
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama_lengkap" id="exampleFirstName"
                                            placeholder="Nama lengkap">
                                        <?= form_error('nama_lengkap','<small class="text-danger">','</small>'); ?>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="phone" class="form-control form-control-user" name="nomor_handphone"
                                            placeholder="Nomor Handphone">
                                        <?= form_error('nomor_handphone','<small class="text-danger">','</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="Email">
                                    <?= form_error('email','<small class="text-danger">','</small>'); ?>

                                    <input type="text" class="form-control form-control-user mt-3" name="alamat_lengkap" 
                                        placeholder="Alamat lengkap">
                                    <?= form_error('alamat_lengkap','<small class="text-danger">','</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <div class="">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                            <?= form_error('password','<small class="text-danger">','</small>'); ?>
                                    </div>
                                </div>

                                <button id="btn-signup" class="btn bg-malibu-beach text-white btn-user btn-block" type="submit">Daftar</button>
                                
                                <hr>

                            </form>
                            
                            <div class="text-center">
                                <a class="small" href="<?= base_url(); ?>login">Sudah punya akun? Masuk!</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
