(function($) {
    BASE_URL = window.location.origin + '/';
    //BASE_URL = window.location.origin + '/zamix/';

    // Navbar Fixed  
    $('.logo-menu').attr("src", BASE_URL + "assets/img/logo.png");
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active');
            $('.logo-menu').attr("src", BASE_URL + "assets/img/logo-orange.png");
            $('.btn-outline.white .label').html("<i class='fas fa-sign-in-alt'></span>");
            $('.fas.fa-bars').css('color', '#ff5400');
            $('.btn-outline.white').addClass('on-scroll');
        } else {
            $('.navbar').removeClass('active');
            $('.logo-menu').attr("src", BASE_URL + "assets/img/logo.png");
            $('.fas.fa-bars').css('color', '#fff');
            $('.btn-outline.white .label').html("Painel do Assinante <i class='fas fa-sign-in-alt'></span>");
            $('.btn-outline.white').removeClass('on-scroll');
        }
    });

    $(".info-service-prime").on('click', function(e) {
        e.preventDefault();
    });

    /* $('.parallaxie').parallaxie({
        speed: 0.5,
    }); */

    $('.carousel-testimonials').owlCarousel({
        /* center: true, */
        loop: true,
        //stagePadding: 80,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
                loop: true
            },
            600: {
                items: 1,
                nav: false,
                dots: false,
                loop: true
            },
            1000: {
                items: 1,
                nav: true,
                dots: false,
                loop: true
            }
        }
    });

    $('#popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    /**
     *  FORM Buy Plan
     */
    $('#frm-buy-plan').validate({
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            $.ajax({
                url: BASE_URL + 'assineagora/send_buy_plan',
                type: 'GET',
                data: $('#frm-buy-plan').serialize(),
                contentType: false,
                processData: false,
                //async: false, //blocks window close
                beforeSend: function(data) {
                    //console.log(data);
                    msg("<b>Processando... Por favor, aguarde!<b>", 'alert');
                },
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                    //console.log(obj.status);
                    if (obj.status === '200') {
                        $(location).attr('href', BASE_URL + 'assine-agora/resultado?status=ok&plano=' + obj.internet_id);
                        /* msg("Recebemos o seu pedido! <br><br> Entraremos em contato com a confirmação nas próximas 24h via e-mail, SMS ou ligação. <br><br> Você acabou de ganhar um desconto na primeira mensalidade completa por R$ 79,90*. <br><br> *Verifique com o consultor a existência de prorrata com o valor dos dias utilizados.", "success");
                        //$.unblockUI();
                        //swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', '');
                        }, 10000); */
                    } else if (response === '201') {
                        //$.unblockUI();
                        $(location).attr('href', BASE_URL + 'assine-agora/resultado?status=venda-ja-cadastrada');
                        //msg("<b>Venda já cadastrada!</b>", "error");
                    } else if (data === '') {
                        //$.unblockUI();
                        msg("<b>Erro ao cadastrar!<b>", "error");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    //$.unblockUI();
                    msg("Erro crítico! Por favor, consulte o administrador do sistema!", "error");
                    setTimeout(() => {
                        $('.msg').fadeOut('slow');
                    }, 2000);
                }
            });
        }
    });

    /************************
     *  FORM LINK DEDICADO
     ************************/
    $('#frm-dedicate-link').validate({
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            $.ajax({
                url: BASE_URL + 'assineagora/send_buy_dedicate_link',
                type: 'GET',
                data: $('#frm-dedicate-link').serialize(),
                contentType: false,
                processData: false,
                //async: false, //blocks window close
                beforeSend: function(data) {
                    //console.log(data);
                    msg("<b>Processando... Por favor, aguarde!<b>", 'alert');
                },
                success: function(data) {
                    //console.log(data);
                    if (data === 'TRUE') {
                        $(location).attr('href', BASE_URL + 'assine-agora/resultado?status=link-dedicado-ok');
                        /* msg("Recebemos o seu pedido! <br><br> Entraremos em contato nas próximas 24h via telefone para gerarmos o seu orçamento.", "success");
                        setTimeout(() => {
                            $(location).attr('href', '');
                        }, 10000); */
                    } else if (data === 'FALSE') {
                        msg("Dados não enviados!", "error");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    msg("Erro crítico! Por favor, consulte o administrador do sistema!", "error");
                    setTimeout(() => {
                        $('.msg').fadeOut('slow');
                    }, 2000);
                }
            });
        }
    });

    /* $('.js-tilt').tilt({
        scale: 1.2
    }); */

    /* wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init(); */

    /**
     * VALIDATION
     */
    function msg(msg, tipo) {
        var retorno = $(".msg");
        var tipo = (tipo === 'success') ? 'success' : (tipo === 'alert') ? 'warning' : (tipo === 'error') ? 'danger' : (tipo === 'info') ? 'info' : '';
        retorno.empty().fadeOut('fast', function() {
            return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
        });
        //esconde a div depois de 5 segundos
        /* setTimeout(function() {
            retorno.fadeOut('slow');
        }, 3000); */
    }
})(jQuery);