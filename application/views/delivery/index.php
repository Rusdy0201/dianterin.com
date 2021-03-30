<body>

    <!-- Modal another address -->
    <div class="modal fade" id="anotherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">PENGIRIM</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                                                
                    <div class="modal-body">

                       <!-- Content Modal-->
                       <form class="" method="post" action="<?= base_url(); ?>delivery/index">

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Nama pengirim</label>
                                                <div class="col-sm-10"><input name="nama_lain"  placeholder="*Nama pengirim" class="form-control"></div>
                                            </div>

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Nomor Handphone</label>
                                                <div class="col-sm-10"><input name="handphone_lain" id="examplePassword" placeholder="*Nomor handphone pengirim" type="password" class="form-control"></div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat pengirim</label>
                                                <div class="col-sm-10"><textarea name="alamat_lain" id="exampleText" placeholder="*Masukan alamat pengirim"class="form-control"></textarea></div>
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan perubahan</button>

                                            </div>
                       </form>

                    </div>   
            </div>
        </div>
    </div>

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header bg-malibu-beach header-text-light header-shadow">
        
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="app-header__menu">
                <span>
                <!-- next feature -->
                </span>
            </div>  

            <div class="app-header__content">

                <div class="app-header-left">
                    
                    <!-- next feature -->
                </div>

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">

                            <div class="widget-content-wrapper">
                                <!-- next feature -->
                                
                            </div>

                        </div>
                    </div>        
                </div>
            </div>
        </div>         
        
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">

                    <div class="app-header__logo">
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="app-header__menu">

                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span> 

                    </div>    

                    <!-- Sidebar menu -->
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">

                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Akun</li>

                               <!-- Account area --> 
                                <li style="margin-left:-45px;">
                                    <a href="<?= base_url(); ?>main" class="mm">
                                    <img src="<?= base_url(); ?>assets/icons/edit-profile.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Profil anda
                                    </a>
                                </li>

                                <li style="margin-left:-45px;">
                                    <a href="<?= base_url(); ?>login" class="mm">
                                    <img src="<?= base_url(); ?>assets/icons/logout.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Keluar
                                    </a>
                                </li>

                                <!-- Transaction area -->
                                <li class="app-sidebar__heading">Transaksi</li>

                                <li style="margin-left:-45px;">
                                    <a href="#">
                                    <img src="<?= base_url(); ?>assets/icons/tracking.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Lacak Kiriman
                                    </a>  
                                </li>
                                <li style="margin-left:-45px;">
                                    <a href="#">
                                    <img src="<?= base_url(); ?>assets/icons/history.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Riwayat Transaksi
                                    </a> 
                                </li>
                                <li style="margin-left:-45px;">
                                    <a href="<?= base_url(); ?>delivery/cost" >
                                    <img src="<?= base_url(); ?>assets/icons/cost.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Cek Ongkir
                                    </a>  
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                            <div class="app-main__outer">

                                <div class="app-main__inner">
                                    <div class="app-page-title">

                                        <div class="page-title-wrapper">
                                            <div class="page-title-heading">
                                            <?php foreach ($user as $usr) : ?>
                                                <div>Hello, <?= (ucfirst($usr['name'])); ?>
                                                    <div class="page-title-subheading">Tingkatkan terus transaksi anda dan dapatkan gratis ongkos kirim</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endforeach ?>

                                            <!-- Delivery area -->

                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Detail pengiriman</h5>
                                        <form class="" role="form" method="post" action="<?= base_url('delivery'); ?>">

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Nama Penerima</label>
                                                <div class="col-sm-10"><input name="nm_penerima"  placeholder="*Nama penerima" class="form-control">
                                                <?= form_error('nm_penerima','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Nomor Handphone</label>
                                                <div class="col-sm-10"><input name="hp_penerima" id="examplePassword" placeholder="*Nomor handphone penerima" type="phone" class="form-control">
                                                <?= form_error('hp_penerima','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Alamat tujuan</label>
                                                <div class="col-sm-10"><textarea name="al_penerima" id="exampleText" placeholder="*Masukan alamat tujuan"class="form-control"></textarea>
                                                <?= form_error('al_penerima','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Jenis transaksi</label>
                                                <div class="col-sm-10"><select name="transaksi" id="exampleSelect" class="form-control">
                                                <option value ="0" selected>*Pilih jenis transaksi</option>
                                                    <option value="1">COD</option>
                                                    <option value="2">Non-COD</option>
                                                </select>
                                                <?= form_error('transaksi','<small class="text-danger">','</small>'); ?></div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Berat paket</label>
                                                <div class="col-sm-10"><select name="berat" id="exampleSelect" class="form-control">
                                                <option selected>*Berat paket</option>
                                                    <option value="<5kg">Kurang dari 5Kg</option>
                                                    <option value="5-10Kg">5 - 10 Kg</option>
                                                    <option value="10-20Kg">Lebih dari 10Kg</option>
                                                </select></div>
                                            </div>

                                            <div  class="position-relative row form-group"><label class="col-sm-2 col-form-label">Harga barang</label>
                                                <div class="col-sm-10"><input name="harga"  placeholder="*Masukan harga barang" class="form-control">
                                                <?= form_error('harga','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto paket</label>
                                                <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">(Opsional) *Masukan foto paket untuk memastikan paket sampai di tujuan dalam keadaan yang sama.</small>
                                                </div>
                                            </div>

                                            <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-2">PENGIRIM</legend>
                                                <div class="col-sm-10">
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" value="this" class="form-check-input"> Gunakan nama dan alamat pengirim yang terdaftar di aplikasi!</label></div>
                                                    <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input" data-toggle="modal" data-target="#anotherModal"> Gunakan nama dan alamat pengirim lain?</label></div>
                                            </fieldset>

                                            <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-2">BIAYA KIRIM</legend>
                                                    <div class="col-sm-12">
                                                        <div class="card mb-3 widget-content bg-midnight-bloom">
                                                            <div class="widget-content-wrapper text-white">
                                                             <div class="widget-content-left">
                                                                <div class="widget-heading">Total biaya :</div>
                                                            </div>
                                                        <div class="widget-content-right">
                                                    <div class="widget-numbers text-white">
                                                    <span>Rp 10.000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>

                                            <div class="position-relative row form-group">
                                                <div class="d-flex col-sm-5 offset-sm-3 justify-content-center">
                                                    <button type="submit" class="btn btn-warning btn-outline-primary btn-lg btn-block">Kirim Sekarang</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>

</body>

