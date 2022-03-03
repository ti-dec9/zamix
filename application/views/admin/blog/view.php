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
    <title>Zamix | Painel de Controle - Blog</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<!-- Datatable -->
	<link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link href="<?php echo base_url('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet">
	
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
                            <h4>Blog</h4>
                            <p class="mb-0">Veja todos os posts</p>
                        </div>
                    </div>
                </div>			
				
				<div class="row">					
					<div class="col-12">
                        <div class="card">
                            <div class="card-header justify-content-end">
                                <a href="<?php echo base_url('admin/blog/novo'); ?>" class="btn btn-secondary">Novo Post</a>
                            </div>
                            <div class="card-body">
							<div class="table-responsive">
                                    <table id="table-blog" class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>Título</strong></th>
                                                <th><strong>Cadastrado em...</strong></th>
                                                <th><strong>Status</strong></th>
                                                <th><strong>Ação</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if(empty($blog)) :
                                                    //
                                                else :
                                                    $obj = new ArrayIterator($blog);
                                                    while($obj->valid()) :                                                
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $obj->current()->id; ?></strong></td>
                                                <td><?php echo $obj->current()->title; ?></td>
                                                <td><?php echo date('d/m/Y H:i:s', strtotime($obj->current()->created_at)); ?></td>
                                                <td>
                                                    <?php if ($obj->current()->published === 'published') :  ?>
                                                    <span class="badge light badge-success">
                                                        Publicado
                                                    </span>
                                                    <?php else : ?>
                                                    <span class="badge light badge-warning">
                                                        Pendente
                                                    </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
													<div class="d-flex">
														<a href="<?php echo base_url(); ?>admin/blog/editar/<?php echo $obj->current()->id; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<button type="button" id="btn-delete-blog" data-id="<?php echo $obj->current()->id; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
													</div>
												</td>
                                            </tr>
                                            <?php
                                                $obj->next();
                                                endwhile;
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>
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
	<!-- Datatable -->
    <script src="<?php echo base_url('assets/admin/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins-init/datatables.init.js'); ?>"></script>	
	<script src="<?php echo base_url('assets/admin/vendor/owl-carousel/owl.carousel.js'); ?>"></script>
    <!-- Validation -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/messages_pt_BR.js'); ?>"></script>
    <!-- Jquery Block UI -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery.blockUI/jquery.blockUI.js') ?>"></script>
    <!-- Sweetalert2 -->
    <script src="<?php echo base_url('assets/admin/vendor/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/custom.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/admin/js/deznav-init.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/ajx.js'); ?>"></script>
</body>
</html>