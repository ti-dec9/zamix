<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    <title>Zamix | Visualiza</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->

    <section class="sc-visualiza" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 align-self-center text-white">
                    <!-- <h2 class="title-big">Clube <span class="color-orange">Zamix</span></h2> -->
                    <img src="<?php echo base_url('assets/img/logo-visualiza.webp') ?>"
                        class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-inovation ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?php echo base_url('assets/img/about-cam.webp') ?>"
                        class="img-fluid" alt="cam zamix">
                </div>
                <div class="col-lg-7 pl-4 align-self-center">
                    <h4 class="title-md color-orange">#InovaçãoLaranja <br></h4>
                    <h4 class="title-md color-black">em proteção</h4>
                    <div class="description">
                        <p class="color-black f-s-18">A Zamix leva até você o serviço de
                            <span class="font-weight-bold">monitoramento via câmeras Wi-Fi.</span>
                        </p>
                        <p class="color-black f-s-18">
                            A solução mais eficiente para promover cuidado e tranquilidade
                            dentro e fora de casa, mesmo quando você estiver ausente.
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <h4 class="text-uppercase color-black">Benefícios perto de você e em todo país</h4>
                    <p class="m-text-align-left">Nossos clientes têm acesso exclusivo a uma plataforma de benefícios, o
                        Clube Zamix! Além de ofertas perto de você, o Clube tem cobertura nacional, ou seja, dá para
                        aproveitar de qualquer lugar.</p>

                    <h4 class="text-uppercase color-black mt-5">É um mundo de vantagens!</h4>
                    <ul class="list-unstyled">
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Mais de 200 parceiros em todo o país </li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Cashback</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Combo de descontos</li>
                        <li><i class="fi fi-rr-checkbox f-s-12"></i> Cartão Farmácia</li>
                    </ul>
                    <p class="m-text-align-left">Para aproveitar é super fácil: basta ser cliente ativo de qualquer
                        plano novo Básico ou Premium, e acessar a aba ‘Clube Zamix’ no painel do assinante ou no app
                        Minha Zamix e selecionar o produto e serviço de sua escolha.</p>

                    <p>Faça suas compras e aproveite! </p>
                    <p><a href="https://painel.zamix.com.br/clube-zamix" class="btn btn-orange hvr-buzz-out mt-2"
                            target="_blank">Acesse o Clube</a></p>
                </div> -->
            </div>
        </div>
    </section>

    <section class="sc-tech-cam bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-md-5">
                    <h3 class="title-big color-black">
                        Tecnologia para <br> <span class="color-orange">cuidar</span> do que é seu:
                    </h3>
                    <br>
                    <ul class="list-unstyled color-black f-s-16">
                        <li><i class="fi fi-rr-checkbox"></i> Monitoramento 24h</li>
                        <li><i class="fi fi-rr-checkbox"></i> Imagens em alta definição</li>
                        <li><i class="fi fi-rr-checkbox"></i> Nitidez dia e noite</li>
                        <li><i class="fi fi-rr-checkbox"></i> Amplo campo de visão</li>
                        <li><i class="fi fi-rr-checkbox"></i> Flexibilidade de uso em diferentes espaços</li>
                        <li><i class="fi fi-rr-checkbox"></i> Instalação feita pela Zamix*</li>
                        <li><i class="fi fi-rr-checkbox"></i> App VisualiZa</li>
                        <li><i class="fi fi-rr-checkbox"></i> Incluso cartão midro-SD 32GB</li>
                        <li><i class="fi fi-rr-checkbox"></i> Armazenamento em nuvem via Intelbras</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="visual-plan-change">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mb-5">
                    <h4 class="title-big color-black">Escolha a <span class="color-orange">vizualização ideal</span>
                        <br> para o que você precisa proteger:
                    </h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/cam-interna.webp') ?>"
                        class="img-cam-interna d-block mx-auto" alt="Camera interna zamix">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/cam-externa.webp') ?>"
                        class="img-cam-externa d-block mx-auto" alt="Camera externa zamix">
                </div>
                <div class="col-md-12">
                    <p class="text-center mt-5">
                        <a href="#" class="btn btn-black hvr-buzz-out mt-2" target="_blank">
                            Quero Contratar!
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-mobile-cam bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h4 class="title-big color-black">
                        <span class="color-orange">Monitoramento</span> na <br> palma da sua mão
                    </h4>
                    <p class="f-s-18 color-black">Com o <strong>App VizualiZa</strong>, você configura suas câmeras para
                        ter <strong>acesso em tempo real</strong>, além de receber
                        notificações sempre que houver movimentação na sua casa.</p>    
                    <p class="title-big f-s-25 text-uppercase color-black">Baixe Agora!</p>
                    <ul class="list-inline list-store" style="margin-top: -50px;">
                        <li class="list-inline-item">
                            <a href="https://apps.apple.com/br/app/minha-zamix/id1514467039" target="_blank"
                                class="btn-store p-0">
                                <img src="<?php echo base_url('assets/img/btn-apple-store.png') ?>"
                                    alt="">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://play.google.com/store/apps/details?id=br.com.zamix.minhazamix&hl=pt"
                                target="_blank" class="btn-store">
                                <img src="<?php echo base_url('assets/img/btn-google-play.png') ?>"
                                    alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/cam-phone.webp'); ?>"
                        class="w-img-mobile d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-cloud-cam ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title-big color-black f-s-45">
                        Guarde os momentos <br> <span class="color-orange">mais importantes</span>
                    </h5>
                    <p class="f-s-18 color-black">
                        Tenha autonomia para definir como prefere armazenar suas imagens:
                    </p>  
                    <ul class="list-unstyled color-black f-s-16">
                        <li><i class="fi fi-rr-checkbox"></i> Cartão micro-SD</li>
                        <li><i class="fi fi-rr-checkbox"></i> DVR/NVR com tecnologia Onvif</li>
                        <li><i class="fi fi-rr-checkbox"></i> Serviço de gravação em nuvem Mibo Cloud*</li>
                    </ul>  
                    <small>
                    *O Mibo Cloud não faz parte das funcionalidades padrão do produto. O serviço está disponível para aquisição extra via Intelbras. Consulte a Loja Intelbras para mais informações.
                    </small>
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="<?php echo base_url('assets/img/cloud-visualiza.webp'); ?>" class="w-img-cloud d-block mx-auto" alt="">
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