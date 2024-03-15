<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
                    <img src="<?php echo base_url('assets/img/logo-visualiza.png') ?>"
                        class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sc-inovation ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?php echo base_url('assets/img/about-cam.png') ?>"
                        class="img-fluid" alt="cam zamix">
                </div>
                <div class="col-lg-7 pl-4 align-self-center">
                    <h4 class="title-md color-orange">InovaçãoLaranja <br></h4>
                    <h4 class="title-md color-black">em proteção</h4>
                    <div class="description">
                        <p class="color-black f-s-18">A Zamix leva até você o serviço de <br>
                            <span class="font-weight-bold">monitoramento via câmeras Wi-Fi.</span>
                        </p>
                        <p class="color-black f-s-18">
                            A solução mais eficiente para promover <br> cuidado e tranquilidade
                            dentro e fora de casa, <br> mesmo quando você estiver ausente.
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

    <section class="sc-tech-cam">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 bg-grayscale pr-md-5 rw-padding">
                    <h3 class="title-big color-black">
                        Tecnologia para você <br> <span class="color-orange">cuidar</span> do que é seu:
                    </h3>
                    <br>
                    <ul class="list-unstyled color-black f-s-16">
                        <li><i class="fi fi-rr-checkbox"></i> Monitoramento 24h</li>
                        <li><i class="fi fi-rr-checkbox"></i> Imagens em alta definição</li>
                        <li><i class="fi fi-rr-checkbox"></i> Nitidez dia e noite</li>
                        <li><i class="fi fi-rr-checkbox"></i> Amplo campo de visão</li>
                        <li><i class="fi fi-rr-checkbox"></i> Flexibilidade de uso em diferentes espaços</li>
                        <li><i class="fi fi-rr-checkbox"></i> Multiarmazenamento</li>
                        <li><i class="fi fi-rr-checkbox"></i> Instalação feita pela Zamix</li>
                    </ul>
                </div>
                <div class="col-lg-6 bg-orange rw-padding">
                    <div class="row h-100 align-self-center">
                        <div class="col-lg-12 pt-md-5 pl-5 pr-5">
                            <h4 class="text-center text-white">
                                O <span class="font-weight-bolder">VizualiZa</span> é a melhor solução para <span
                                    class="font-weight-bolder">você cuidar daquilo que mais ama!</span>
                            </h4>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide sws-visualiza">
                                        <img src="<?php echo base_url('assets/img/carrossel-visualiza/bebe.png'); ?>"
                                            alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url('assets/img/carrossel-visualiza/home.png'); ?>"
                                            alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url('assets/img/carrossel-visualiza/idoso.png'); ?>"
                                            alt="...">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="<?php echo base_url('assets/img/carrossel-visualiza/pet.png'); ?>"
                                            alt="...">
                                    </div>
                                </div>
                                <div class="swiper-button-next text-white"></div>
                                <div class="swiper-button-prev text-white"></div>
                                <!-- <div class="swiper-pagination"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visual-plan-change">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center mb-5">
                    <h4 class="title-big color-black">Escolha a <span class="color-orange">visualização ideal</span>
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
                        <a href="https://wa.me/552435122106" target="_blank" class="btn btn-black hvr-buzz-out mt-2"
                            target="_blank">
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
                    <p class="f-s-18 color-black">Com o <strong>App VisualiZa Zamix</strong>, você configura suas câmeras para
                        ter <strong>acesso em tempo real</strong>, além de <strong>receber
                        notificações</strong> sempre que houver movimentação na sua casa.</p>
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
                    <img src="<?php echo base_url('assets/img/cam-phone.png'); ?>"
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
                    <span class="color-orange">Guarde os momentos</span> <br> mais importantes
                    </h5>
                    <p class="f-s-18 color-black">
                        Armazene suas imagens de forma prática e segura na nuvem, com funções exclusivas.
                    </p>
                    <p class="f-s-18 font-weight-bold color-black">
                        Plano 72h
                    </p>
                    <p class="title-big color-black">
                        <span class="color-orange">R$ 19,90*</span>
                    </p>
                    <p class="">
                        <a href="https://api.whatsapp.com/send?phone=552433450002" target="_blank" class="btn btn-black btn-custom hvr-buzz-out mt-2"
                            target="_blank">
                            Quero Contratar!
                        </a>
                    </p>

                    <p>*Valor individual. É necessário contratar um plano para cada câmera alugada.</p>
                    <ul class="list-unstyled color-black f-s-16">
                        <li><i class="fi fi-rr-checkbox"></i> Gravação em nuvem</li>
                        <li><i class="fi fi-rr-checkbox"></i> Gravações aceleradas em até 32x</li>
                        <li><i class="fi fi-rr-checkbox"></i> Gravações filtradas por tipo de evento</li>
                        <li><i class="fi fi-rr-checkbox"></i> Download em segundo plano dos vídeos gravados</li>
                        <li><i class="fi fi-rr-checkbox"></i> Visualização dos eventos instantâneos</li>
                    </ul>
                    <!-- <small>
                        *O Mibo Cloud não faz parte das funcionalidades padrão do produto. O serviço está disponível
                        para aquisição extra via Intelbras. Consulte a Loja Intelbras para mais informações.
                    </small> -->
                </div>
                <div class="col-md-6 align-self-center">
                    <img src="<?php echo base_url('assets/img/cloud-visualiza.png'); ?>"
                        class="w-img-cloud d-block mx-auto" alt="">                    
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?>
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            /* cssMode: true, */
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: false,
            keyboard: true,
        });
    </script>
</body>

</html>