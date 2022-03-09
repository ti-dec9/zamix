<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    <title>Zamix | Link Dedicado</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <?php foreach ($dedicated_link as $value) : ?>
    <section class="sc-link h--100" id="particles-js" style='background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("../assets/img/background/<?php echo $value->background; ?>");'>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-center text-white">
                    <?php echo $value->title; ?>
                </div>
                <a href="#sc-first"><span class="icon-scroll"></span></a>
            </div>
        </div>
    </section>

    <section class="sc-velocity ptb--80">
        <div class="container">
            <div class="row">                
                <?php echo "$value->description"; ?>
                <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/img/creative-link.png'); ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-12">
                    <p class="m-text-center">   
                        <button type="button" class="btn btn-orange hvr-grow" data-toggle="modal" data-target="#exampleModalCenter">Quero uma cotação</button>
                    </p>
                </div>
            </div>
        </div>        
    </section>
    <?php endforeach; ?>

    <section class="testimonial text-center">
        <div class="container">
            <div class="heading white-heading">
            <h3 class="title-big f-s-30 color-black text-center">Depoimentos Empresariais</h3>
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/unimed.png') ?>"  alt="Unimed Volta Redonda">
                            <p>“Os serviços atendem nossas necessidades. Com a implantação ganhamos em qualidade, custo e principalmente em relacionamento. Entendemos que isso faz toda a diferença para uma parceria de sucesso.” </p>
                            <h4 class="f-s-16 color-orange">Unimed Volta Redonda</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/uss.png') ?>" alt="Universidade Severino Sombra">
                            <p>“Nossa experiência como clientes da Zamix é extremamente positiva, tanto na qualidade da entrega de nossos links quanto no suporte que nos é dado. Em 2021, montamos nosso Centro de Desenvolvimento de Genética Bovina, que está localizado em uma fazenda. A Zamix fez um projeto para entrega de link com fibra óptica que ficou perfeito, desta forma viabilizando o projeto.” </p>
                            <h4 class="f-s-16 color-orange">USS (Universidade Severino Sombra)</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/california.png') ?>" alt="Transportes California">
                            <p>“A Zamix é uma ótima empresa. Somos clientes desde o início da operação em Resende (RJ) desde 2017, nunca tivemos problema por falta de algum suporte ou auxílio. Todos os setores sempre muito prestativos em ajudar.” </p>
                            <h4 class="f-s-16 color-orange">Transportes Califórnia</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/floresta.png') ?>" alt="Floresta Supermercados">
                            <p>“A Zamix é uma parceira incrível, há mais de 10 anos nos entregando internet confiável com qualidade extraordinária, nível muito acima da concorrência.” </p>
                            <h4 class="f-s-16 color-orange">Floresta Supermercados</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/npe.png') ?>" alt="NPE">
                            <p>“Agradecemos pelo bom atendimento. Já conhecia o trabalho da empresa, então já tinha confiança de um serviço de boa qualidade. Estamos muito satisfeitos com os serviços prestados. O atendimento é super rápido e de boa qualidade, a Zamix cumpre o que promete.” </p>
                            <h4 class="f-s-16 color-orange">NPE Service Manut e Montagem S.A</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="<?php echo base_url('assets/img/customers/sitran.png') ?>" alt="Sitran">
                            <p>“Recomendo a Zamix fortemente, preço justo e qualidade de serviço muito boa!” </p>
                            <h4 class="f-s-16 color-orange">Sitran</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <i class="fas fa-chevron-left color-black"></i>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <i class="fas fa-chevron-right color-black"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="title-big f-s-25 color-black mb-3 text-center" style="line-height: 30px">A experiência de quem confia</h3>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme carousel-testimonials text-center">                        
                        <div class="item">
                            <img src="<?php echo base_url('assets/img/customers/unimed.png') ?>" class="w-50 mx-auto"  alt="Unimed Volta Redonda">
                            <p>“Os serviços atendem nossas necessidades. Com a implantação ganhamos em qualidade, custo e principalmente em relacionamento. Entendemos que isso faz toda a diferença para uma parceria de sucesso.” </p>
                            <h4 class="f-s-16 color-orange">Unimed Volta Redonda- Setor de TI </h4>
                        </div>
                        <div class="item">
                            
                        </div>
                        <div class="item">
                        </div>
                        <div class="item">
                            
                        </div>
                        <div class="item">
                            
                        </div>
                        <div class="item">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content p-2">
                <div class="modal-header pl-4 border-0">
                    <h5 class="modal-title color-black text-bold" id="exampleModalCenterTitle">Quero uma cotação</h5>                   
                    <button type="button" class="close color-black" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                    <i class="fi fi-rr-cross"></i>
                    </button>
                </div>

                <div class="container pl-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Preencha o formulário abaixo para solicitar uma cotação.</p>
                        </div>
                        <div class="col-lg-12 mt-1 mb-1">
                            <div class="msg"></div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-body">
                    <form class="form-area" id="frm-dedicate-link">
                        <div class="container">
                            <div class="row">                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nome" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="street" class="form-control" placeholder="Rua" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" name="number" class="form-control" placeholder="Número" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="neighborhood" class="form-control" placeholder="Bairro" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="state" class="form-control" placeholder="Estado" required>
                                    </div>
                                </div>                            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="Cidade" required>
                                    </div>                            
                                </div>
                                <div class="col-lg-12">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-orange">Enviar</button>
                                    </p>
                                </div> 
                            </div>                            
                        </div>
                    </form>
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
    <script src="<?php echo base_url('assets/js/ajx.js') ?>"></script>
    <script>
        $(function() {
            //select2
            $('.select2').select2();
            $('#phone').inputmask({"mask": ["(99) 9999-9999", "(99) 99999-9999"], keepStatic: true}); 
            $('#cnpj').inputmask("99.999.999/9999-99");
            $('#cep').inputmask("99999-999");           
        });
    </script>
</body>

</html>