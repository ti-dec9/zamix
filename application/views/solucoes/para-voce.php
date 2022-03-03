<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    
    <title>Zamix | Para Você</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?> 
    <!-- ./HEADER -->    
   
    <?php foreach ($for_you as $value) : ?>
    <section class="sc-default h--100" id="particles-js" style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("<?php echo base_url() ?>assets/img/background/<?php echo $value->header_background; ?>") no-repeat scroll center 0/cover;'>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-center text-white">                    
                    <?php echo $value->header_title; ?>                    
                    <p class="text-light f-s-20"><?php echo $value->header_subtitle; ?></p>
                    
                </div>
                <a href="#sc-first"><span class="icon-scroll"></span></a>
            </div>
        </div>
    </section>    

    <section id="sc-first" class="h-100 ptb--80 about-us">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/img/site_1.gif') ?>" class="w-100 h-100" alt="">
                    <!-- <div class="v-dot"><img src="<?php echo base_url('assets/img/v-dot.png') ?>" alt=""></div> -->
                </div>
                <div class="col-lg-6 align-self-center">
                    <h2 class="title-big color-black f-s-40" style="line-height: 40px"><?php echo $value->title; ?></h2>
                    <p class="m-align-center"><a href="<?php echo $value->btn_link; ?>" class="btn btn-orange hvr-grow mt-2" target="_blank">Acesse</a><p>
                    <!-- <p class="title-lighter mt-4">O Wi-Fi Inteligente foi feito para qualquer tamanho e tipo de imóvel. Com o plano Casa P, você conecta 4 cômodos da sua casa por apenas R$ 149,00, além de contar com até 1 Gbps de velocidade via cabo. </p> -->
                    <?php echo $value->description; ?>
                </div>
            </div>
        </div>
    </section>   
    <?php endforeach; ?> 

    <section class="sc-plain bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-big color-black text-center">A <span class="color-orange">revolução</span> está em suas mãos<span class="color-orange">.</span></h2>
                </div> 
                <div class="col-lg-12 pt-5">
                    <img src="<?php echo base_url('assets/img/label-premium.png'); ?>" class="d-block mx-auto" width="280px" height="auto" alt="" srcset="">              
                </div>

                <?php foreach($plan as $value) : ?>
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
                                    <p><?php echo $value->description; ?></p>
                                </div>
                                <div class="price">
                                    <p class="label-price color-orange">
                                        <?php $price = explode(".", $value->value_plan); ?>
                                        <span class="f-s-15">R$</span> <?php echo $price[0] ?>,<span class="decimal"><?php echo $price[1] ?></span></p>
                                </div>
                            </div>       
                            <div class="col-lg-12">
                                <img src="<?php echo base_url(); ?>assets/img/plans/<?php echo $value->image; ?>" class="w-100 pb-50" alt="">
                            </div>
                            <div class="col-lg-12 pt-4">
                                <a href="<?php echo base_url(); ?>assine-agora?plano=<?php echo $value->id_plan; ?>" class="btn btn-orange hvr-grow">Quero esse!</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <?php endforeach; ?>               

                <div class="col-md-3" style="margin-top: 100px;">
                    <div class="card ui-cards border-0">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/img/icons/world.png'); ?>" style="width: 50px; height: auto;" alt="">
                            <h5 class="card-title">
                                Amplo
                            </h5>
                            <p class="card-text color-black">Tenha a liberdade de navegar em <strong>todos os cômodos da sua casa</strong> com ultravelocidade.</p>                                
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 100px;">
                    <div class="card ui-cards border-0">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/img/icons/head.png'); ?>" style="width: 50px; height: auto;" alt="">
                            <h5 class="card-title">
                                Inteligente
                            </h5>
                            <p class="card-text color-black">Experimente a mais nova tecnologia que conecta você ao dispositivo Wi-Fi mais próximo <strong>automaticamente</strong>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 100px;">
                    <div class="card ui-cards border-0">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/img/icons/star.png'); ?>" style="width: 50px; height: auto;" alt="">
                            <h5 class="card-title">
                                Exclusivo
                            </h5>
                            <p class="card-text color-black">Conecte-se à vontade com <strong>planos de até 1Gbps de velocidade</strong> garantidos via cabo, sem taxa de adesão.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-top: 100px;">
                    <div class="card ui-cards border-0">
                        <div class="card-body text-center">
                            <img src="<?php echo base_url('assets/img/icons/signal.png'); ?>" style="width: 50px; height: auto;" alt="">
                            <h5 class="card-title">
                                Personalizado
                            </h5>
                            <p class="card-text color-black">Trabalhe de casa, assista filmes, séries, estude e muito mais, com uma <strong>conexão estável e forte</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>

    <section class="sc-plain bg-grayscale" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-plan-ultra">
                    <img src="<?php echo base_url('assets/img/label-basico.png'); ?>" class="d-block mx-auto" width="280px" height="auto" alt="" srcset="">                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-plan">
                                <div class="row">
                                    <div class="col-lg-3 align-self-center">
                                        <img src="<?php echo base_url('assets/img/wifi.png') ?>" class="w-80 d-block mx-auto" alt="">                                                                       
                                    </div>
                                    <div class="col-lg-6 align-self-center text-center">
                                        <div class="header-plain">
                                            <h4>UltraMix 500</h4>
                                        </div>
                                        <div>
                                            <p>Velocidade para download: 500 Mbps <br> Velocidade para upload: 500 Mbps <br> Roteador Gigabit Dual-band incluso <br> Adesão grátis e Wi-Fi incluso</p>
                                        </div>                                       
                                    </div>       
                                    <div class="col-lg-3 align-self-center">
                                        <div class="price">
                                            <!-- <div class="label">A partir de</div> -->
                                            <p class="label-price ultra text-center color-orange"><span class="f-s-15">R$</span> 99<span class="decimal">,90</span></p>
                                            <!-- <div class="label-month">ao mês</div> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text-center"><a href="<?php echo base_url('assine-agora?plano=BasicoUltraMix500'); ?>" class="btn btn-orange hvr-grow" id="btn-plan-4">Quero esse!</a></p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
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
                                <img class="logo-modal" src="<?php echo base_url('assets/img/logo-orange.png') ?>">
                            </div>
                            <div class="col-8">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                    <form class="form-area" id="frm-solution-for-you">
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
                                                <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" required>
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
                                                <select name="identify" class="form-control" style="width: 100%;" required>
                                                    <option value="" selected disabled>Como você se identifica?</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Feminino">Feminino</option>
                                                    <option value="Outro">Outro</option>
                                                    <option value="Prefiro não dizer">Prefiro não dizer</option>
                                                </select>
                                            </div> 
                                        </div>   
                                        <div class="col-lg-12">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input check-input" id="check-input" name="">
                                                <label class="form-check-label" for="check-input">Serviços Prime</label> <a href="#" class="info-service-prime" data-toggle="modal" data-target="#modal-service-prime"><i class="fas fa-info-circle"></i></a>
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
                                            <p class="mt-5 text-bold f-s-12 color-orange">Valor fixo mensal</p>
                                            <span class="modal-dolar color-orange">R$</span> <span class="modal-price"></span> <span class="modal-decimal"></span>
                                            <br><br>
                                            <div class="about-service-prime mb-2">
                                                <h5 class="color-orange text-bold f-s-12">Serviços Prime <small>Adicional</small></h5>
                                                <span class="service-dolar color-orange">R$</span> <span class="service-price">6</span> <span class="service-decimal">,99</span>
                                                <br><br>
                                                <p>Valor final mensal</p>
                                                <span class="result"></span>                                                
                                            </div>
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

            //Btn's
            $("#btn-plan-1").on('click', function() {
                $('.name-plan').text('Premium Casa P');
                $('.modal-price').text('149');
                $('.modal-decimal').text(',90');
                $('.plan-description').text('* Cobertura de sinal em até 4 cômodos com velocidade de até 1Gbps.');
                $('#btn-plan-contract').attr('data-id', 'PremiumCasaP');
            });
            $("#btn-plan-2").on('click', function() {
                $('.name-plan').text('Premium Casa M');
                $('.modal-price').text('179');
                $('.modal-decimal').text(',90');
                $('.plan-description').text('* Cobertura de sinal em 5 cômodos com velocidade de até 1Gbps.');
                $('#btn-plan-contract').attr('data-id', 'PremiumCasaM');
            });
            $("#btn-plan-3").on('click', function() {
                $('.name-plan').text('Premium Casa G');
                $('.modal-price').text('199');
                $('.modal-decimal').text(',90');
                $('.plan-description').text('* Cobertura de sinal em 6 cômodos ou mais com velocidade de até 1Gbps.');
                $('#btn-plan-contract').attr('data-id', 'PremiumCasaG');
            });
            $("#btn-plan-4").on('click', function() {
                $('.name-plan').text('UltraMix 500');
                $('.modal-price').text('99');
                $('.modal-decimal').text(',90');
                $('.plan-description').text('Velocidade para download: 500 Mbps / Velocidade para upload: 500 Mbps / Roteador Gigabit Dual-band incluso / Adesão grátis e Wi-Fi incluso');
                $('#btn-plan-contract').attr('data-id', 'BasicoUltraMix500');
            });
            $('#birth-date').inputmask("99/99/9999");
            $('#phone').inputmask({"mask": ["(99) 9999-9999", "(99) 99999-9999"], keepStatic: true}); 
            $('#cpf-cnpj').inputmask({"mask": ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true});
            $('#cep').inputmask("99999-999");
        });
    </script>    
</body>

</html>