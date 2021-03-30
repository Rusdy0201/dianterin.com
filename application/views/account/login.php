
<link rel="stylesheet" href="<?= base_url();?>assets/css/main.css">

<body class="bg-malibu-beach">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-700 mb-4">Selamat Datang!</h1>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>

                                    <form class="user" method="post" role="form" action="login">

                                        <div class="form-group">
                                            <input type="phone" class="form-control form-control-user" name="handphone"
                                                placeholder="Nomor Handphone">
                                                <?= form_error('handphone','<small class="text-danger">','</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="Password">
                                                <?= form_error('password','<small class="text-danger">','</small>'); ?>
                                        </div>
                                        
                                        <button class="btn bg-malibu-beach text-white btn-user btn-block" type="submit" >Masuk</button>
                                        

                                        <hr>

                                        <a href="index.html" class="btn btn-danger btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>

                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a>

                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>forgot_pass">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>register">Daftar!</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   