
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

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

                               <!-- Profile account area --> 
                                <li class="" style="margin-left:-45px;">
                                    <a href="#" class="">
                                        <img src="<?= base_url(); ?>assets/icons/bonus.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Klaim bonus
                                    </a>
                                </li>

                                <li style="margin-left:-45px;">
                                    <a href="#" class="mm">
                                    <img src="<?= base_url(); ?>assets/icons/edit-profile.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Edit profil
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
                                    <a href="<?= base_url(); ?>delivery">
                                    <img src="<?= base_url(); ?>assets/icons/delivery.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Pengiriman
                                    </a>  
                                </li>
                                <li style="margin-left:-45px;">
                                    <a href="#">
                                    <img src="<?= base_url(); ?>assets/icons/delivery-status.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Status Kiriman
                                    </a>  
                                </li>
                                <li style="margin-left:-45px;">
                                    <a href="#">
                                    <img src="<?= base_url(); ?>assets/icons/history.svg" style="height: 32px; margin-right: 5px" alt="">
                                        Riwayat Transaksi
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
                                    <div>Hello, <?= (ucfirst($usr['name'])); ?>                                        <div class="page-title-subheading">Tingkatkan terus transaksi anda dan dapatkan gratis ongkos kirim
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Tukarkan 10 Point untuk dapatkan 1x gratis ongkir" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                        Klaim bonus sekarang
                                    </button> 
                                </div>    
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-xl-12">

                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Point anda</div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?= $usr['point']; ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <?php endforeach ?>

                        <!-- Space area for profile area on future -->

                        
                        <!-- Space area for profile area on future -->
                        </div>

                    </div>
                </div>
            </div>
         </div>
    </div>

</body>

