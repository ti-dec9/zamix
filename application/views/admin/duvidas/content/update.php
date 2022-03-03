<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
    <title>Zamix | Painel de Controle - Dúvidas</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/vendor/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet">
	<!-- Summernote -->
    <link href="<?php echo base_url('assets/admin/vendor/summernote/summernote.css'); ?>" rel="stylesheet">    
    <!-- Material color picker -->
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') ?>" rel="stylesheet">
    <!-- Datetime Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/pickadate/themes/default.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/pickadate/themes/default.date.css') ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- File Upload -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/file-input/css/fileinput.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/file-input/themes/explorer/theme.min.css"> 
    <!-- Sweetalert2 -->
    <link href="<?php echo base_url('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="<?php echo base_url('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/custom.css'); ?>" rel="stylesheet">	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="#" class="brand-logo">
				<img src="<?php echo base_url(); ?>assets/img/logo-orange.png" width="74" height="22"" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <?php $this->load->view('admin/partials/header'); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php $this->load->view('admin/partials/sidebar-menu'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			
			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Dúvidas</h4>
                            <p class="mb-0">Edite os dados da página de dúvidas de forma simples e rápida</p>
                        </div>
                    </div>
                </div>
				<div class="row">					
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Descrição da página dúvidas <br> <small class="text-muted" style="font-size: 12px; text-transform: initial;">Campos com (<span class="color-red">*</span>) são obrigatórios</small></h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form id="frm-faq-content-update">
                                        <?php foreach ($faq as $value) : ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Seção <small class="color-red">*</small></label>
                                                <select name="section" id="section" class="form-control">
                                                    <option value="">Selecione...</option>
                                                    <option value="Dúvidas para contratar?">Dúvidas para contratar?</option>
                                                    <option value="Dúvidas para configurar?">Dúvidas para configurar?</option>
                                                    <option value="Dúvidas com a conexão?">Dúvidas com a conexão?</option>
                                                </select>                                                
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Título <small class="color-red">*</small></label>
                                                <br>
                                                <input type="text" name="title" class="form-control" value="<?php echo $value->title; ?>" placeholder="Título" required>
                                                <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                            </div>
                                            <div class="form-group col-xl-12 col-xxl-12">
                                                <label>Descrição</label>
                                                <textarea class="summernote" name="description" required><?php echo $value->description; ?></textarea>
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <p class="text-right mt-5"><button type="submit" class="btn btn-primary">Publicar</button></p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                        </div>	
					</div>

				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php $this->load->view('admin/partials/footer'); ?>
        <!--**********************************
            Footer end
        ***********************************-->		
		
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/admin/vendor/global/global.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/deznav-init.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo.js'); ?>"></script>
    <!-- SUMMERNOTE -->
    <script src="<?php echo base_url('assets/admin/vendor/summernote/js/summernote.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins-init/summernote-init.js'); ?>"></script>
    <!-- File Input -->
    <script src="<?php echo base_url('assets/admin/vendor/file-input/js/fileinput.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/file-input/js/locales/pt-BR.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/file-input/themes/explorer/theme.min.js'); ?>"></script>    
    <!-- Validation -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/messages_pt_BR.js'); ?>"></script>
    <!-- Datetime Picker -->
    <script src="<?php echo base_url('assets/admin/vendor/moment/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins-init/material-date-picker-init.js') ?>"></script>
    <!-- Jquery Block UI -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery.blockUI/jquery.blockUI.js') ?>"></script>
    <!-- Sweetalert2 -->
    <script src="<?php echo base_url('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
    <!-- SEND AJAX -->
    <script src="<?php echo base_url('assets/admin/js/ajx.js'); ?>"></script> 
    <?php foreach ($faq as $value) : ?>
    <script>
        $("#section").val("<?php echo $value->section; ?>");
    </script>
    <?php endforeach; ?>
</body>
</html>