<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags'); ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles'); ?>
    
    <title>Zamix | Conexão até nos cômodos mais difíceis</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header'); ?>
    <!-- ./HEADER -->
   
    <section class="sc-default h--100 slideshow" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">                
                <a href="#sc-first"><span class="icon-scroll"></span></a>
            </div>
        </div>
    </section>

    <section id="sc-first" class="sc-default">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 align-self-center">
                    <div class="round"></div>
                    <img src="<?php echo base_url('assets/img/with-you.png') ?>" class="img-responsive d-block mx-auto" alt="">
                </div>
                <div class="col-lg-6 align-self-center">
                    <h2 class="title-big-lighter color-black">Sua casa toda <strong class="color-orange">conectada!</strong></h2>
                    <p>Conexão em todos os cômodos do seu lar, seja ele um pequeno e aconchegante apê, ou uma grande casa com piscina.</p>
                    <p><a href="<?php echo base_url('solucoes/para-voce'); ?>" class="btn btn-orange hvr-grow mt-2">Soluções para você <i class="fas fa-long-arrow-alt-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="sc-default bg-grayscale circle">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 align-self-center">
                    <h2 class="title-big color-black m">Facilidade e agilidade na <strong class="color-orange">palma da mão.</strong></h2>                    
                    <ul class="list-inline list-store">
                        <li class="list-inline-item"><a href="https://apps.apple.com/br/app/minha-zamix/id1514467039" target="_blank" class="btn-store p-0"><img src="<?php echo base_url('assets/img/btn-apple-store.png') ?>" alt=""></a></li>
                        <li class="list-inline-item"><a href="https://play.google.com/store/apps/details?id=br.com.zamix.minhazamix&hl=pt" target="_blank" class="btn-store"><img src="<?php echo base_url('assets/img/btn-google-play.png') ?>" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-lg-5 align-self-center">
                    <img src="<?php echo base_url('assets/img/mobile-mockup.png'); ?>" class="img-responsive d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-3 align-self-center">
                    <p class="f-s-18 color-black">Com o App Minha Zamix, é fácil gerenciar a sua assinatura.</p>
                    <ul class="list-unstyled list-info-app">
                        <li><i class="fas fa-check"></i> Solicite suporte</li>
                        <li><i class="fas fa-check"></i> Descongele a sua conta</li>
                        <li><i class="fas fa-check"></i> Acesse sua fatura</li>
                        <li><i class="fas fa-check"></i> Troque de plano</li>
                        <li><i class="fas fa-check"></i> Indique amigos</li>
                        <li><i class="fas fa-check"></i> Aproveite promoções</li>
                    </ul>
                </div>
                <div class="about-shape">
                    <div class="about-circle1">
                        <img src="<?php echo base_url('assets/img/background/team1.png') ?>" alt="">
                    </div>
                    <div class="about-circle2">
                        <img src="<?php echo base_url('assets/img/background/main-banner1.png'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default business h--100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 align-self-center">
                    <!-- <small class="tx-center text-white">A solução para a sua venda física ou on-line</small> -->
                    <h2 class="title-big-lighter text-white pt-2">A solução para a sua venda física ou <strong class="color-orange">on-line!</strong></h2>
                    <p><a href="<?php echo base_url('solucoes/para-empresa'); ?>" class="btn btn-outline btn-white mt-4 hvr-grow mt-2">Soluções para empresa <i class="fas fa-long-arrow-alt-right"></i></a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-default bg-grayscale sc-blog">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 mb-3">
                    <h2 class="title-big color-black">Blog Zona X</h2>
                </div>
                <?php foreach($blog as $value) : ?>
                <div class="col-lg-4 mt-4">
                    <div class="card" style="min-height: 430px">
                        <img src="<?php echo base_url(); ?>assets/img/blog/<?php echo $value->image; ?>" class="card-img-top" alt="<?php echo $value->title; ?>" style="width: 100%; height: 240px; object-fit: cover;">
                        <div class="date-post"><i class="far fa-calendar-alt"></i> <?php echo $this->general->converte_date($value->created_at, 'pt-br'); ?></div>
                        <div class="card-body p-0">
                            <h5 class="card-title"><?php echo $value->title; ?></h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>       -->                      
                            <a href="<?php echo base_url(); ?>blog/materia/<?php echo $value->id ?>/<?php echo $this->general->normalize_url($value->title); ?>" class="btn btn-link">Leia mais <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>                   
                <div class="col-md-12">
                    <p class="text-center mt-5"><a href="<?php echo base_url('blog'); ?>" class="btn btn-orange hvr-grow">Ver mais notícias</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php $this->load->view('templates/footer'); ?>
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts'); ?>
</body>

</html>