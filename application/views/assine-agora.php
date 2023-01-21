<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    
    <title>Zamix | Assine Agora</title>
</head>

<body>
    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?> 
    <!-- ./HEADER --> 

    <section class="sc-sign-plan" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-white">
                    <h2 class="title-big">Contrate <span class="color-orange">seu plano</span></h2>                      
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-lg-8 pt--80 pb-5">
            <h5 class="text-uppercase text-bold color-black">Você está a poucos passos de aproveitar a nossa conexão. Preencha seus dados e clique em contratar!</h5>
        </div>        
    </div>
    
    <div class="container pb--80">
        <div class="row">
            <form class="form-area" id="frm-buy-plan">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="voucher" class="form-control" placeholder="Voucher">
                                        <?php foreach ($plan as $value) : ?>
                                        <input type="hidden" name="plan" value="<?php echo $value->slug; ?>">
                                        <?php endforeach; ?>
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
                                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" required>
                                        <div class="error-regex error invalid-feedback">Email inválido</div>
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
                                                <option value="<?php echo $obj->id; ?>"><?php echo $obj->nome; ?></option>
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
                                <?php if ($status_prime === 'true') : ?>
                                <div class="col-lg-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input check-input" id="check-input" name="">
                                        <label class="form-check-label" for="check-input">Serviços Prime</label> <a href="#" class="info-service-prime" data-toggle="modal" data-target="#modal-service-prime"><i class="fas fa-info-circle color-orange"></i></a>
                                    </div>
                                </div>                
                                <?php endif; ?> 
                            </div>                                
                        </div>
                        <div class="col-lg-4">
                            <div class="card pl-4 pt-4 pb-4 shadow rounded m-align-center border-0">
                                <div class="card-body">
                                    <?php foreach ($plan as $value) : ?>
                                    <p class="card-text">Você selecionou o plano</p>
                                    <p class="name-plan text-uppercase color-orange"><?php echo $value->name; ?></p>
                                    <p class="mt-5 text-bold f-s-12 color-orange">Valor fixo mensal</p>
                                    <span class="modal-dolar color-orange">R$</span> 
                                        <?php $price = explode(".", $value->value_plan); ?>
                                        <span class="modal-price"><?php echo $price[0]; ?></span>
                                        <span class="modal-decimal">,<?php echo $price[1]; ?></span>
                                    <br><br>
                                    <div class="about-service-prime mb-2">
                                        <h5 class="color-orange text-bold f-s-12">Serviços Prime <small>Adicional</small></h5>
                                        <span class="service-dolar color-orange">R$</span> <span class="service-price">9</span> <span class="service-decimal">,99</span>
                                        <br><br>
                                        <p>Valor final mensal</p>
                                        <span class="result"></span>                                             
                                    </div>
                                    <small class="plan-description"></small> <br>
                                    <small><?php echo $value->obs; ?></small>
                                    <div class="container pl-0">
                                        <div class="col-lg-12 mt-3 pl-0">
                                            <button type="submit" class="btn btn-orange hvr-grow" id="btn-plan-contract" data-id="">Contratar <i class="fi fi-rr-Angle-double-right"></i></button>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>                                     
                        </div>
                        <!-- <div class="g-recaptcha" data-sitekey="6LfBbfUdAAAAACJYfPbnUXaj0GPr5ul93abuYK7e"></div> -->
                    </div>
                </div>
            </form>
            <div class="col-lg-12 mt-4 mb-5">
                <div class="msg"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-service-prime" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fi fi-rr-cross"></i>
                    </button>
                    <p>Chega de pagar uma taxa extra para cada imprevisto</p>   
                    <p>Quando precisar, use sem se preocupar com o valor da fatura no início do mês. Por apenas <strong class="color-orange">R$ 9,99 mensais</strong>, você tem todos os serviços adicionais disponíveis na Zamix:</p>
                    <ul class="list-unstyled">
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Atendimento agilizado</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Manutenção simples</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Manutenção Wi-Fi</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Mudança de endereço (com viabilidade)</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Mudança de cômodo</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Ponto adicional</li> 
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Migração de tecnologia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?> 
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
    <script src="<?php echo base_url('assets/vendors/inputmask/jquery.inputmask.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/valida-documento.js') ?>"></script>    
    <script src="<?php echo base_url(); ?>assets/js/ajx.js?v=<?php echo md5(time()); ?>"></script>
    <script>        
        $(function() {    
            //select2
            $('.select2').select2();
            $('#birth-date').inputmask("99/99/9999");
            $('#phone').inputmask({"mask": ["(99) 9999-9999", "(99) 99999-9999"], keepStatic: true}); 
            $('#cpf-cnpj').inputmask({"mask": ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true});
            $('#cep').inputmask("99999-999");
        });
    </script> 
    <!-- RECAPTCHA API -->
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</body>