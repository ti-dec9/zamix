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
                <div class="msg"></div>
            </div>       
        </div> 
    </div>
    
    <!-- footer -->
    <?php $this->load->view('templates/footer') ?> 
    <!-- footer  -->

    <!-- JavaScript -->
    <?php $this->load->view('templates/scripts') ?>
    <script>
        var message;
        var url = "<?php echo $this->input->get('status'); ?>";
        if (url === 'ok') {
            msg("Recebemos o seu pedido! <br><br> Entraremos em contato com a confirmação nas próximas 24h via e-mail, SMS ou ligação. <br><br> Você acabou de ganhar um desconto na primeira mensalidade completa por R$ 79,90*. <br><br> *Verifique com o consultor a existência de prorrata com o valor dos dias utilizados.", "success");
        } else if (url === 'venda-ja-cadastrada') {
            msg("<b>Venda já cadastrada!</b>", "error");
        } else {
            msg("<b>Erro!<b>", "error");
        }
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