
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
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">

                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-700 mb-2">Lupa password anda?</h1>
                                        <p class="mb-4 text-gray-600">Silahkan masukan alamat email anda di bawah, dan kami akan mengirimkan anda link untuk mereset password anda!
                                        </p>
                                    </div>

                                    <form class="user">

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan alamat email anda...">
                                        </div>
                                        
                                        <a href="<?= base_url(); ?>login" class="btn bg-malibu-beach text-white btn-user btn-block">Reset Password</a>

                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>register">Daftar!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>login">Sudah punya akun? Masuk!</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>