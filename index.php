<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/minimal/config.php'; ?>
<?php
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header -->
<div class="bg-video" data-vide-bg="<?php echo $cb->assets_folder; ?>/media/desaduren" data-vide-options="posterType: jpg">
    <div class="bg-primary-dark-op">
        <div class="content text-center">
            <div class="pt-50 pb-20">
                <h1 class="font-w700 text-white mt-50 mb-2">Duren Serasi</h1>
                <h2 class="h4 font-w400 text-white-op">SIGESA - Sistem Informasi Geografis Desa</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->

<!-- Page Content -->
<div class="content">
    <div class="d-flex align-items-center">
        <div class="content content-full">
            <div class="row no-gutters mt-20 w-100 py-100 overflow-hidden">
                <div class="col-md-5 py-30 d-flex align-items-center invisible" data-toggle="appear">
                    <div class="text-center text-md-left">
                        <span class="d-inline-block bg-body-light rounded-pill py-5 px-15 mb-15 font-w600"></span>
                        <h1 class="font-w600 font-size-h2 mb-20">
                            Ketahui tentang kami
                        </h1>
                        <p class="font-size-lg nice-copy text-muted mb-30">
                            Terletak dibawah kaki Gunung Ungaran, Desa Duren berada di wilayah Kecamatan Bandungan. 
                            Dengaan udara yang sejuk dan potensi alam, wisata, kebudayaan yang tidak boleh dilewatkan.
                        </p>
                    </div>
                </div>
                <div class="col-md-7 py-30 d-none d-md-flex align-items-md-center justify-content-md-end invisible" data-toggle="appear" data-class="animated fadeInRight">
                    <img class="img-fluid" style="width:40%" src="<?php echo $cb->assets_folder; ?>/media/logokabupaten.png" srcset="<?php echo $cb->assets_folder; ?>/media/logokabupaten.png" alt="Logo Kab. Semarang">
                </div>
            </div>
        </div>
    </div>
    <div class="pt-100 pb-50">
        <div class="position-relative">
            <h2 class="font-w700 mb-10 text-center">    
                Peta Sebaran <span class="text-primary">Desa Duren</span>
            </h2>
            <h3 class="h4 font-w400 text-muted text-center">
                Pemetaan berdasarkan wilayah dusun, monografi, dan potensi desa.
            </h3>
        </div>
    </div>
    <div class="col-md-12" style="margin-top:-5%">
        <div class="block">
            <div class="block-header block-header-default">
                <span class="si si-map mr-2"></span>
                <h3 class="block-title">Peta Vector</h3>
                <div class="block-options">
                    <!-- To toggle fullscreen a block, just add the following properties to your button: data-toggle="block-option" data-action="fullscreen_toggle" -->
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                Taroh Sini ya
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-vide/jquery.vide.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_minimal.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>