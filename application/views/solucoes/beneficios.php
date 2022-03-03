<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    <title>Zamix | Benefícios</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <section class="sc-benefits" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 align-self-center text-white">
                    <!-- <h2 class="title-big">Clube <span class="color-orange">Zamix</span></h2> -->
                    <img src="<?php echo base_url('assets/img/clube-zamix.png') ?>" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <section class="ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-uppercase color-black">Benefícios perto de você e em todo país </h4>
                    <p class="m-text-align-left">Nossos clientes têm acesso exclusivo a uma plataforma de benefícios, o Clube Zamix! Além de ofertas perto de você, o Clube tem cobertura nacional, ou seja, dá para aproveitar de qualquer lugar.</p>
                    
                    <h4 class="text-uppercase color-black mt-5">É um mundo de vantagens!</h4>
                    <ul class="list-unstyled">
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Mais de 200 parceiros em todo o país </li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Cashback</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Combo de descontos</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Cartão Farmácia</li>
                    </ul>
                    <p class="m-text-align-left">Para aproveitar é super fácil: basta ser cliente ativo de qualquer plano novo Básico ou Premium, e acessar a aba ‘Clube Zamix’ no painel do assinante ou no app Minha Zamix e selecionar o produto e serviço de sua escolha.</p>

                    <p>Faça suas compras e aproveite! </p>
                    <p><a href="https://painel.zamix.com.br/clube-zamix" class="btn btn-orange hvr-buzz-out mt-2" target="_blank">Acesse o Clube</a></p>                    
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
</body>

</html>