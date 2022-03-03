
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zamix - Painel de Controle" />
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
	<meta property="og:description" content="Zamix - Painel de Controle" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
    <title>Zamix -  Painel Administrativo</title>
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" />
    <link href="<?php echo base_url("assets/admin/css/style.css"); ?>" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="<?php echo base_url('assets/img/logo-orange.png'); ?>" alt="">
									</div>
                                    <h4 class="text-center mb-4">Painel de Controle</h4>
                                    <div class="msg"></div>
                                    <form id="frm-login">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@seuemail.com.br" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Senha</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Senha" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Salvar minhas preferências</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Perdeu a senha?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" id="btn-login">Entrar</button>
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


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url("assets/admin/vendor/global/global.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/admin/js/custom.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/admin/js/deznav-init.js"); ?>"></script>
    <script src="<?php echo base_url("assets/admin/js/demo.js"); ?>"></script>
    <!-- Validation -->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/jquery-validation/messages_pt_BR.js'); ?>"></script>
    <!-- SEND AJAX -->
    <script src="<?php echo base_url('assets/admin/js/ajx.js'); ?>"></script>
</body>
</html>