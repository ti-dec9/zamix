<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>

    <title>Zamix | Para Empresa</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <?php foreach($for_business as $value) : ?>
    <section class="sc-default h--100" id="particles-js" style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("<?php echo base_url(); ?>assets/img/background/<?php echo $value->header_background; ?>") no-repeat scroll center 0/cover;'>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-center text-white">
                    <?php echo $value->header_title; ?>
                    <!-- <h2 class="title-big">O plano perfeito <br> para o seu <strong class="color-orange">negócio</strong></h2> -->                    
                    <p class="text-light f-s-20"><?php echo $value->header_subtitle; ?></p>
                </div>
                <a href="#sc-first"><span class="icon-scroll"></span></a>
            </div>
        </div>
    </section>

    <section class="sc-business ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 pb-5">
                    <h2 class="title-big f-s-40 text-center color-black">A empresa moderna faz negócios pela <span class="color-orange">internet.</span></h2>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/img/pic2.jpg'); ?>" class="w-100 shadow rounded" alt="">
                </div>
                <div class="col-md-6 align-self-center">
                    <?php echo $value->description_1; ?>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-md-6 align-self-center">
                    <?php echo $value->description_2; ?>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/img/pic1.jpg'); ?>" class="w-100 shadow rounded" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <section class="sc-plain pb--80 bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-big mb-5 color-black text-center"><span class="color-orange">Planos</span> para sua empresa<span class="color-orange">.</span></h2>
                </div>
                <div class="col-lg-12">
                    <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Planos Comerciais x24 <br> <small>Fidelidade de 24 meses</small></a>
                        </li>                        
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Planos Comerciais x12 <br> <small>Fidelidade de 12 meses</small></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <!-- TAB1 -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="container">
                            <div class="row">
                                <?php foreach($plan_24 as $value) : ?>
                                <div class="col-lg-4 plr-40">
                                    <div class="card card-plan">
                                        <div class="row text-center p-3">
                                            <div class="col-lg-12 col-12">
                                                <div class="header-plain">
                                                    <h4><?php echo $value->name_featured; ?></h4>
                                                </div>                                
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div>
                                                    <p><?php echo $value->name; ?></p>
                                                    <p><?php echo $value->description; ?></p>
                                                </div>
                                                <div class="price">
                                                    <p class="label-price color-orange">
                                                        <?php $price = explode(".", $value->value_plan); ?>
                                                        <span class="f-s-15">R$</span> <?php echo $price[0]; ?>,<span class="decimal"><?php echo $price[1]; ?></span>
                                                    </p>
                                                    <small><?php echo $value->obs_after_expiration; ?></small>                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12 pt-4">
                                                <p><a href="<?php echo base_url(); ?>assine-agora?plano=<?php echo $value->id_plan; ?>" class="btn btn-orange hvr-grow">Quero esse!</a></p>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                                <?php endforeach; ?>                                
                            </div>                    
                        </div>                    
                    </div>
                    <!-- TAB2 -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="container">
                        <div class="row">
                                <?php foreach($plan_12 as $value) : ?>
                                <div class="col-lg-4 plr-40">
                                    <div class="card card-plan">
                                        <div class="row text-center p-3">
                                            <div class="col-lg-12 col-12">
                                                <div class="header-plain">
                                                    <h4><?php echo $value->name_featured; ?></h4>
                                                </div>                                
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div>
                                                    <p><?php echo $value->name; ?></p>
                                                    <p><?php echo $value->description; ?></p>
                                                </div>
                                                <div class="price">
                                                    <p class="label-price color-orange">
                                                        <?php $price = explode(".", $value->value_plan); ?>
                                                        <span class="f-s-15">R$</span> <?php echo $price[0]; ?>,<span class="decimal"><?php echo $price[1]; ?></span>
                                                    </p>
                                                    <small><?php echo $value->obs_after_expiration; ?></small>                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12 pt-4">
                                                <p><a href="<?php echo base_url(); ?>assine-agora?plano=<?php echo $value->id_plan; ?>" class="btn btn-orange hvr-grow">Quero esse!</a></p>
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                                <?php endforeach; ?>                                
                            </div> 
                        </div>      
                    </div>
                </div>                
            </div>   
            <div class="row mt-5">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                        <li>(*) Desconto de adesão válido para a primeira mensalidade paga até o vencimento. Sujeito a pro rata referente aos dias utilizados até o fim do mês em que o serviço foi instalado.</li>
                        <li>(1) Valores válidos para pagamento com desconto até o vencimento, após esta data, o valor a pagar será o designado na coluna “valor da assinatura” com juros e multa. <a href="<?php echo base_url('planos-detalhes'); ?>">CONFIRA A TABELA.</a></li>
                        <li>(2) Planos acima de 100Mb residenciais ou comerciais estão sujeitos a viabilidade técnica, sendo válido também para a disponibilização de Wi-Fi AC.</li>                        
                    </ul>
                    <p class="m-text-align-left">OBS: Todos os equipamentos instalados para o cliente estão em regime de comodato (propriedade da empresa e somente disponível para utilização do cliente); Planos válidos à partir de 02/09/2019. </p>
                </div>
            </div>
        </div>        
    </section>

    <!-- MODAL PLANOS -->
    <div class="modal modal-plan fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">                        
                            <div class="col-4">
                                <img class="logo-modal" src="<?php echo base_url('assets/img/logo-orange.png'); ?>">
                            </div>
                            <div class="col-8">
                                <button type="button" class="close color-black" data-dismiss="modal" aria-label="Close">
                                    <i class="fi fi-rr-cross"></i>
                                </button>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container pl-0">
                        <div class="col-lg-8 mt-4 mb-5">
                            <h5 class="text-uppercase text-bold color-black">Você está a poucos passos de aproveitar a nossa conexão. Preencha seus dados e clique em contratar!</h5>
                        </div>
                        <div class="col-lg-12 mt-4 mb-5">
                            <div class="msg"></div>
                        </div>
                    </div>
                    <form class="form-area" id="frm-solution-for-business">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="voucher" class="form-control" placeholder="Voucher">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Nome" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="birth-date" id="birth-date" class="form-control" placeholder="Data de Nascimento" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="cpf-cnpj" id="cpf-cnpj" onBlur="validaFormato(this);" onkeypress="return (apenasNumeros(event))" class="form-control" placeholder="CPF/CNPJ" required>
                                                <div id="resultValidationCpfCnpj"></div>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="cep" class="form-control" placeholder="CEP" required>
                                                <small><a href="https://buscacepinter.correios.com.br/app/endereco/index.php" class="color-orange" target="_blank">Buscar cep</a></small>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="street" class="form-control" placeholder="Rua" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="address-number" class="form-control" placeholder="Número" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="neighborhood" class="form-control" placeholder="Bairro" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select name="state" class="form-control" style="width: 100%;" id="cmb-state" required>
                                                    <?php 
                                                        if (!empty($states)) :
                                                    ?>
                                                        <option value="" selected disabled>Estado</option>
                                                    <?php
                                                        foreach ($states as $obj) :
                                                    ?>
                                                        <option value="<?php echo $obj->id ?>"><?php echo $obj->nome; ?></option>
                                                    <?php
                                                        endforeach;
                                                    else :
                                                    ?>
                                                        <option value="" selected disabled>Nenhum registro encontrado</option>
                                                    <?php
                                                    endif;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-6">
                                            <div class="loading-city"></div>
                                            <div class="form-group">
                                                <select name="city" class="form-control" style="width: 100%;" id="cmb-city" required>
                                                    <option value="" selected disabled>Cidade</option>
                                                </select>
                                            </div>                            
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" name="reference" class="form-control" placeholder="Ponto de Referência" required>
                                            </div>
                                        </div>                            
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="why" class="form-control" style="width: 100%;" required>
                                                    <option value="" selected disabled>Como nos conheceu?</option>
                                                    <option value="1">Amigo/Família</option>
                                                    <option value="2">Campanha</option>
                                                    <option value="3">Site</option>
                                                    <option value="4">Vizinho</option>
                                                    <option value="5">Outras Empresas</option>
                                                    <option value="6">Rede Social</option>
                                                    <option value="7">Panfleto</option>
                                                    <option value="27">Rádio AM/FM</option>
                                                    <option value="30">Mídia Offline</option>
                                                </select>
                                            </div> 
                                        </div>   
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="why" class="form-control" style="width: 100%;" required>
                                                    <option value="" selected disabled>Como você se identifica?</option>
                                                    <option value="">Masculino</option>
                                                    <option value="">Feminino</option>
                                                    <option value="">Outro</option>
                                                    <option value="">Prefiro não dizer</option>
                                                </select>
                                            </div> 
                                        </div>                
                                    </div>                                
                                </div>
                                <div class="col-lg-4">
                                    <div class="card pl-4 pt-4 pb-4 shadow rounded border-0">
                                        <div class="card-body">
                                            <!-- <h5 class="card-title color-orange">Detalhes do seu plano</h5> -->
                                            <p class="card-text">Você selecionou o plano</p>
                                            <p class="name-plan text-uppercase color-orange"></p>
                                            <p class="mt-5 text-bold f-s-12 color-orange">Valor com desconto</p>
                                            <span class="modal-dolar color-orange">R$</span> <span class="modal-price"></span> <span class="modal-decimal"></span>
                                            <br>
                                            <small class="price-old"></small>
                                            <br><br>
                                            <small class="plan-description"></small> <br>
                                            <small>** Sujeito a confirmação de viabilidade técnica.</small>
                                            <div class="container pl-0">
                                                <div class="col-lg-12 mt-3 pl-0">
                                                    <button type="submit" class="btn btn-orange hvr-grow" id="btn-plan-contract" data-id="">Contratar <i class="fi fi-rr-Angle-double-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ./MODAL PLANOS -->

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
    <script src="<?php echo base_url('assets/vendors/inputmask/jquery.inputmask.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/valida-documento.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ajx.js') ?>"></script>
    <script>        
        $(function() {    
            //select2
            $('.select2').select2();
            //Btn's Tab1
            $("#btn-plan-business-1").on('click', function() {
                $('.name-plan').text('TurboMix10024²');
                $('.modal-price').text('99');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 149,90');
                $('.plan-description').text('* Até 100mbps de velocidade de download e 30mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix10024');
            });
            $("#btn-plan-business-2").on('click', function() {
                $('.name-plan').text('TurboMix20024²');
                $('.modal-price').text('109');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 169,90');
                $('.plan-description').text('* Até 200mbps de velocidade de download e 60mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix20024');
            });
            $("#btn-plan-business-3").on('click', function() {
                $('.name-plan').text('TurboMix30024²');
                $('.modal-price').text('119');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 179,90');
                $('.plan-description').text('* Até 300mbps de velocidade de download e 90mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix30024');
            });
            $("#btn-plan-business-4").on('click', function() {
                $('.name-plan').text('TurboMix50024²');
                $('.modal-price').text('199');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 299,90');
                $('.plan-description').text('* Até 500mbps de velocidade de download e 150mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix50024');
            });
            $("#btn-plan-business-5").on('click', function() {
                $('.name-plan').text('TurboMix100024²');
                $('.modal-price').text('399');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 599,90');
                $('.plan-description').text('* Até 1000mbps de velocidade de download e 300mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix100024');
            });
            $("#btn-plan-business-6").on('click', function() {
                $('.name-plan').text('TurboMix10012²');
                $('.modal-price').text('129');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 199,90');
                $('.plan-description').text('* Até 100mbps de velocidade de download e 30mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix10012');
            });
            $("#btn-plan-business-7").on('click', function() {
                $('.name-plan').text('TurboMix20012²');
                $('.modal-price').text('149');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 219,90');
                $('.plan-description').text('* Até 200mbps de velocidade de download e 60mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix20012');
            });
            $("#btn-plan-business-8").on('click', function() {
                $('.name-plan').text('TurboMix30012²');
                $('.modal-price').text('159');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 239,90');
                $('.plan-description').text('* Até 300mbps de velocidade de download e 90mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix30012');
            });
            $("#btn-plan-business-9").on('click', function() {
                $('.name-plan').text('TurboMix50012²');
                $('.modal-price').text('259');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 389,90');
                $('.plan-description').text('* Até 500mbps de velocidade de download e 150mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix50012');
            });
            $("#btn-plan-business-10").on('click', function() {
                $('.name-plan').text('TurboMix100012²');
                $('.modal-price').text('519');
                $('.modal-decimal').text(',90');
                $('.price-old').text('*Após o vencimento R$ 779,90');
                $('.plan-description').text('* Até 1000mbps de velocidade de download e 300mbps de velocidade de upload.');
                $('#btn-plan-contract').attr('data-id', 'TurboMix100012');
            });
            $('#birth-date').inputmask("99/99/9999");
            $('#phone').inputmask({"mask": ["(99) 9999-9999", "(99) 99999-9999"], keepStatic: true}); 
            $('#cpf-cnpj').inputmask({"mask": ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true}); 
        });
    </script> 
    
</body>

</html>