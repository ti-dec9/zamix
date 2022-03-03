<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    <title>Zamix | Teste de Velocidade</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <section class="sc-velocity-header" id="particles-js">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-white">
                    <h2 class="title-big">Teste de <strong class="color-orange">Velocidade</strong></h2>                
                </div>
            </div>
        </div>
    </section>

    <section class="sc-velocity ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 bg-white align-self-center">
                    <h4 class="title-big color-black f-s-40 mb-3">Tudo sobre seu <strong class="color-orange">teste</strong></h4>
                    <p>Você sabia que para alcançar a máxima potência de velocidade do seu plano, o seu dispositivo deve ser compatível? É importante que seu aparelho tenha suporte para aproveitar o melhor da conexão Zamix.   </p>
                    <p>Assista ao vídeo e entenda o teste de velocidade de maneira prática e rápida.</p> 
                    <p class="m-text-center"><a href="<?php echo base_url('assets/video/movie.mp4') ?>" class="btn btn-orange hvr-grow mt-2" id="popup-video">Assistir ao vídeo</a></p>
                </div>
                <!-- <div class="col-lg-6" style="background: url('assets/img/creative-velocity.png') no-repeat; background-size: 100% 100%; height: 600px;"> -->
                <div class="col-lg-6">                 
                    <img src="<?php echo base_url('assets/img/creative-velocity.png')?>" class="w-100" alt="Creative Velocitys">
                </div>                                               
            </div>
        </div>        
    </section>

    <section class="ptb--80 bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center text-center">
                    <h6 class="title-big f-s-25 mb-4 color-black" style="line-height: 35px">Teste a velocidade da sua <strong class="color-orange">conexão</strong></h6>
                    <a href="https://velocidade.zamix.com.br/" class="btn btn-orange hvr-grow mt-2" target="_blank">Quero Testar</a>
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