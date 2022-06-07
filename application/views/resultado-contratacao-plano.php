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
                    <h2 class="title-big">Obrigado por escolher a <span class="color-orange">Zamix</span></h2>                   
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="min-height: 500px;">
        <div class="row">
            <div class="col-lg-12 pt--80 pb-5">
                <div class="msg text-center"></div> <br><br>
                <p class="text-center"><a href="<?php echo base_url(); ?>" class="btn btn-orange hvr-grow btn-action">Ir para página principal</a></p>
            </div>       
        </div> 
    </div>
    
    <!-- footer -->
    <?php $this->load->view('templates/footer') ?> 
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
    <script>
        msg("<?php echo $message; ?>", "<?php echo $status_message; ?>");
        $(".btn-action").attr('href', "<?php echo $btn_link; ?>");
        $(".btn-action").text("<?php echo $label_link; ?>");
        //console.log(url);

        /**
         * VALIDATION
         */
        function msg(msg, tipo) {
            var retorno = $(".msg");
            var tipo = (tipo === 'success') ? 'success' : (tipo === 'alert') ? 'warning' : (tipo === 'error') ? 'danger' : (tipo === 'info') ? 'info' : '';
            retorno.empty().fadeOut('fast', function() {
                return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
            });
        }
    </script>
</body>