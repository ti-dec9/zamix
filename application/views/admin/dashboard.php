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
    <title>Zamix | Painel de Controle - Dashboard</title>
    <!-- Favicon icon -->
	<link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/admin/images/favicon.png'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/chartist/css/chartist.min.css'); ?>">
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/vendor/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">
	
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
				<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>					
				</div>				
				
				<div class="row">
					
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">							
								<div class="widget-stat card bg-primary">
									<div class="card-body p-4">
										<a href="<?php echo base_url('admin/planos/paraempresa'); ?>">
											<div class="media">
												<span class="mr-3">
													<i class="flaticon-381-calendar-1"></i>
												</span>
												<div class="media-body text-white text-right">
													<p class="mb-1">Planos | Para Empresa</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-secondary">
									<div class="card-body  p-4">
										<a href="<?php echo base_url('admin/blog'); ?>">
											<div class="media">
												<span class="mr-3">
													<i class="flaticon-381-calendar-1"></i>
												</span>
												<div class="media-body text-white text-right">
													<p class="mb-1">Blog</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
								<div class="widget-stat card bg-info">
									<div class="card-body p-4">
										<a href="<?php echo base_url('admin/planos/paravoce'); ?>">
											<div class="media">
												<span class="mr-3">
													<i class="flaticon-381-calendar-1"></i>
												</span>
												<div class="media-body text-white text-right">
													<p class="mb-1">Planos | Para Você</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Blog</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th><strong>#</strong></th>
														<th><strong>Título</strong></th>
														<th><strong>Cadastrado em...</strong></th>
														<th><strong>Status</strong></th>
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
    <script src="<?php echo base_url(); ?>assets/admin/vendor/global/global.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="<?php echo base_url(); ?>assets/admin/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/custom.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/deznav-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</body>
</html>