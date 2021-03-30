<body>

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header bg-malibu-beach header-text-light header-shadow">
        
            <div class="app-header__logo">
                <div class="logo-src"></div>

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
                        <div class="logo-src"><img src="<?= base_url(); ?>assets/images/logo.png" alt=""></div>
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
                                    <a href="<?= base_url(); ?>delivery" >
                                    <img src="<?= base_url(); ?>assets/icons/cost.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Pengiriman
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
                                                <div>dianterin.com
                                                    <div class="page-title-subheading">Tingkatkan terus transaksi anda dan dapatkan gratis ongkos kirim</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                            <!-- delivery cost check area -->

                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Cek Ongkir</h5>
                                        <form class="" role="form" method="post" action="<?= base_url('delivery/cost'); ?>">

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Alamat Penjemputan</label>
                                                <div class="col-sm-10"><input type="text" value="<?= set_value('penjemputan'); ?>" name="penjemputan"  placeholder="* Alamat penjemputan paket" class="form-control">
                                                <?= form_error('penjemputan','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Alamat Tujuan</label>
                                                <div class="col-sm-10"><input type="text" value="<?= set_value('tujuan'); ?>" name="tujuan"  placeholder="* Alamat tujuan paket" class="form-control">
                                                <?= form_error('tujuan','<small class="text-danger">','</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Berat paket</label>
                                                <div class="col-sm-10"><select name="select" id="exampleSelect"  class="form-control">
                                                <option selected> *Berat paket</option>
                                                    <option value="Kurang dari 5 Kg">Kurang dari 5Kg</option>
                                                    <option value="Dari 5 s/d 10 Kg">Dari 5 s/d 10 Kg</option>
                                                    <option value="Lebih dari 10 Kg">Lebih dari 10Kg</option>
                                                </select>
                                                </div>
                                                <?= form_error('select','<small class="text-danger">','</small>'); ?>
                                            </div>

                                            <fieldset class="position-relative row form-group">
                                                <legend class="col-form-label col-sm-2">BIAYA KIRIM</legend>
                                                    <div class="col-sm-12">
                                                        <div class="card mb-3 widget-content bg-midnight-bloom">
                                                            <div class="widget-content-wrapper text-white">
                                                             <div class="widget-content-left">
                                                                <div class="widget-heading">Berat paket anda :  </div>  
                                                                <div class="mt-2"><label for="select"><?= set_value('select'); ?>  </label></div>
                                                                
                                                                
                                                            </div>
                                                        <div class="widget-content-right mt-3">
                                                    <div class="widget-numbers text-white">
                                                    <span>Rp.  <?= $cost ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset>

                                            <div class="position-relative row form-group">
                                                <div class="d-flex col-sm-5 offset-sm-3 justify-content-center">
                                                    <button type="submit" class="btn btn-warning btn-outline-primary btn-lg btn-block">Cek Sekarang</button>
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

