<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>
    
    <title>Zamix | Dúvidas</title>
</head>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <?php foreach($page as $value) : ?>
    <section class="sc-faq" id="particles-js" style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("assets/img/background/<?php echo $value->image; ?>") no-repeat scroll; background-position: 50% 40%;'>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-white">
                    <!-- <h2 class="title-big">Tire suas <strong class="color-orange">Dúvidas</strong></h2>  -->
                    <?php echo $value->title; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <section class="ptb--80 bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section 1 -->
                    <?php foreach ($faq_section_1 as $value) : ?>
                    <h4 class="color-black mb-3"><?php echo $value->section; ?></h4>
                    <?php endforeach; ?>

                    <?php foreach($faq_1 as $value) : ?>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $value->id; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $value->id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $value->id; ?>">
                                        <?php echo $value->title; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse<?php echo $value->id; ?>" class="collapse" aria-labelledby="heading<?php echo $value->id; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                   <?php echo $value->description; ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <?php endforeach; ?>   
                    <!-- ./Section 1 -->   
                    
                    <br><br>

                    <!-- Section 2 -->
                    <?php foreach ($faq_section_2 as $value) : ?>
                    <h4 class="color-black mb-3"><?php echo $value->section; ?></h4>
                    <?php endforeach; ?>

                    <?php foreach($faq_2 as $value) : ?>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $value->id; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $value->id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $value->id; ?>">
                                        <?php echo $value->title; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse<?php echo $value->id; ?>" class="collapse" aria-labelledby="heading<?php echo $value->id; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                   <?php echo $value->description; ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <?php endforeach; ?>
                    <!-- ./Section 2 -->

                    <br><br>
                    
                    <!-- Section 3 -->
                    <?php foreach ($faq_section_3 as $value) : ?>
                    <h4 class="color-black mb-3"><?php echo $value->section; ?></h4>
                    <?php endforeach; ?>

                    <?php foreach($faq_3 as $value) : ?>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading<?php echo $value->id; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $value->id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $value->id; ?>">
                                        <?php echo $value->title; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse<?php echo $value->id; ?>" class="collapse" aria-labelledby="heading<?php echo $value->id; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                   <?php echo $value->description; ?>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <?php endforeach; ?>
                    <!-- ./Section 3 -->
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