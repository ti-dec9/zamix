$(function() {
    //BASE_URL = window.location.origin + '/zamix/';
    BASE_URL = window.location.origin + '/';

    $("#cmb-state").change(function() {
        var dados = 'id=' + $(this).val();
        //console.log(dados);
        $.ajax({
            type: "GET",
            url: BASE_URL + 'ajx/loading_city',
            beforeSend: function() {
                $(".loading-city").fadeIn(function() {
                    $(this).html("carregando...");
                });
            },
            data: dados,
            success: function(data) {
                $(".loading-city").fadeOut('slow');
                //console.log(data);
                $("#cmb-city").html(data);
            }
        });
    });

    $('.about-service-prime').hide();
    $("#check-input").on('click', function() {
        cbStatus = $('#check-input').is(':checked');
        if (cbStatus == true) {
            $('.about-service-prime').fadeIn('slow');
            var price = $(".modal-price").text();
            var decimal = $(".modal-decimal").text().replace(',', '.');
            var soma = parseFloat(price + decimal);
            total = soma + 9.99;
            subTotal = total.toFixed(2);
            result = subTotal.toString();
            $(".result").text("R$ " + result.replace('.', ','));
            //console.log(subTotal.toString());
        } else {
            $('.about-service-prime').fadeOut('slow');
        }
    });

    /**
     * Reseta o botão serviços prime quando a modal
     * de contratação dos planos é fechada.
     */
    $('.modal-plan').on('hidden.bs.modal', function() {
        $('#check-input').prop('checked', false);
        $('.about-service-prime').hide();
        console.log('Fechou a abriu');
    });
});;