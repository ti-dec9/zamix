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

    <!-- footer -->
    <?php $this->load->view('templates/footer') ?> 
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
</body>

</html>