<!doctype html>
<html lang="pt-br">

<head>
    <!-- meta tags -->
    <?php $this->load->view('templates/metatags') ?>
    <!-- STYLES -->
    <?php $this->load->view('templates/styles') ?>

    <?php 
        foreach ($blog as $value) :
    ?>

    <title><?php echo $value->title; ?></title>
</head>

<!--FIX IMG MOBILE-->
<style>
.card-body img{
    width:100% !important;
}
</style>

<body>

    <!-- HEADER -->
    <?php $this->load->view('templates/header') ?>
    <!-- ./HEADER -->    
   
    <section class="sc-default-2" id="particles-js" style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("<?php echo base_url('assets/img/background/blog.jpg'); ?>") no-repeat scroll center 0/cover;'>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 align-self-center text-white">
                    <h2 class="title-big f-s-80">Blog <span class="color-orange">Zona X</span></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sc-blog-detail">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-0">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/<?php echo $value->image; ?>" loading="lazy" class="rounded card-img-top" alt="<?php echo $value->title; ?>">
                                    <div class="card-body">
                                        <div class="date pt-2"><i class="far fa-calendar-alt"></i> 
                                            <?php 
                                                echo $this->general->converte_date($value->created_at, 'pt-br');
                                                /* $date = $this->general->converte_date($value->created_at, 'pt-br');   
                                                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%d de %B de %Y', strtotime($date));   */                                              
                                            ?>
                                        </div>
                                        <h5 class="card-title color-black"><?php echo $value->title; ?></h5>                                        
                                        <?php echo $value->description; ?>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <!-- COMMENTS -->
                            <!-- <div id="disqus_thread"></div> -->
                            <script>
                                /**
                                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://zamix-multiplay.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            <!-- /.COMMENTS -->
                        </div>
                        <p class="text-center">
                            <a href="<?php echo base_url('blog');?>" class="btn btn-sm btn-orange hvr-grow mt-5"><i class="fas fa-arrow-left"></i> Voltar</a>
                        </p>
                    </div>                
                </div>                
                <div class="col-lg-4">
                    <div class="blog-sidebar">                   
                        <div class="widget-search">
                            <!-- SEARCH -->
                            <form class="form-blog-search" action="<?php echo base_url('blog/pesquisar'); ?>">
                                <div class="input-group">
                                    <input type="search" name="s" class="form-control widget-input" placeholder="Pesquisar">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-search"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="widget-category">
                            <h4 class="title color-black">Categorias</h4>
                            <ul class="list-unstyled">
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#"><i class="fas fa-caret-right"></i> Tecnologia (15)</a></li>
                                <li class="pt-3"><a href="#" class="f-s-12">Todas as categoria</a></li>
                            </ul>
                        </div> -->
                        <div class="widget-more-views">
                            <h4 class="title color-black">Mais Vistos</h4>
                            <div class="row">
                                <?php foreach ($rand as $value) : ?>
                                <div class="col-lg-12">
                                    <div class="card border-0 mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <a href="<?php echo base_url(); ?>blog/materia/<?php echo $value->id ?>/<?php echo $this->general->normalize_url($value->title); ?>">
                                                    <img src="<?php echo base_url(); ?>assets/img/blog/<?php echo $value->image; ?>" class="w-100" loading="lazy" alt="<?php echo $value->title; ?>">
                                                </a>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title color-black f-s-18"><?php echo $value->title; ?></h5>
                                                    <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> <?php echo $this->general->converte_date($value->created_at, 'pt-br'); ?></small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>   
                            </div>
                        </div>
                        <!-- ADVERTISING -->  
                        <small class="text-muted">Anúncio</small>                     
                        <img src="<?php echo base_url('assets/img/ads/1.jpg') ?>" class="w-100" alt="">
                        <!-- ./ADVERTISING -->
                        <!-- <div class="widget-instagram">
                            <h4 class="title color-black">Instagram</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="#" class="">
                                        <img class="img-fluid" src="<?php echo base_url('assets/img/instagram.jpg') ?>" alt="">
                                    </a>
                                </div>                                                           
                            </div>
                        </div> -->
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
    <script id="dsq-count-scr" src="//zamix-multiplay.disqus.com/count.js" async></script>
    <?php endforeach; ?>
</body>

</html>