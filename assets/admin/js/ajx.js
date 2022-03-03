$(function() {

    //BASE_URL = window.location.origin + '/';
    BASE_URL = window.location.origin + '/zamix/admin/';

    /**********************************
     * FORM LOGIN
     ***********************************/

    $('#frm-login').validate({
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
            var formData = $("#frm-login").serialize();
            $.ajax({
                url: BASE_URL + 'login/authenticate',
                type: 'GET',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $("#btn-login").text('aguarde...');
                },
                success: function(data) {
                    //console.log(data);
                    if (data === "TRUE") {
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'dashboard');
                        }, 2000);
                    } else if (data === "FALSE") {
                        $("#btn-login").text('Entrar');
                        msg("Dados não enviados!", "alert");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    msg("Erro crítico! Por favor, contate o administrador do sistema.", "error");
                    $("#btn-login").text('Entrar');
                }
            });
        }
    });


    /**********************************
     * FORM ABOUT
     ***********************************/

    $('#frm-about').validate({
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
            var formData = new FormData($("#frm-about")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/sobre/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/sobre');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM DEDICATED LINK
     ***********************************/

    $('#frm-dedicated-link').validate({
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
            var formData = new FormData($("#frm-dedicated-link")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/solucoes/linkdedicado/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/solucoes/linkdedicado');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });


    /**********************************
     * FORM TRANSPARENT
     ***********************************/

    $('#frm-transparent').validate({
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
            var formData = new FormData($("#frm-transparent")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/transparencia/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/transparencia');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM FOR YOU ABOUT
     ***********************************/

    $('#frm-for-you-about').validate({
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
            var formData = new FormData($("#frm-for-you-about")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/solucoes/paravoce/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/solucoes/paravoce');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM FOR BUSINESS ABOUT
     ***********************************/

    $('#frm-for-business-about').validate({
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
            var formData = new FormData($("#frm-for-business-about")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/solucoes/paraempresa/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/solucoes/paraempresa');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM Blog Post - New
     ***********************************/

    $('#frm-blog-post-new').validate({
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
            var formData = new FormData($("#frm-blog-post-new")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'blog/insert',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Post cadastrado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'blog');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });

    /**********************************
     * FORM Blog Post - Update
     ***********************************/

    $('#frm-blog-post-update').validate({
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
            var formData = new FormData($("#frm-blog-post-update")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'blog/update',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Post alterado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'blog');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });


    /**********************************
     * FORM Blog Post - Delete
     ***********************************/

    $(".btn-delete-blog").on('click', function() {
        var dados = 'id=' + $(this).attr("data-id");
        //console.log(dados);
        swal({
            title: 'Atenção',
            text: "Deseja realmente excluir este registro?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then(function() {
            $.ajax({
                type: 'POST',
                url: BASE_URL + 'blog/delete',
                data: dados,
                beforeSend: function(data) {
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);                
                    if (data === 'TRUE') {
                        $.unblockUI();
                        swal('Excluido!', 'Post excluído com sucesso.', 'success');
                        setTimeout(function() {
                            $(location).attr('href', BASE_URL + 'blog');
                        }, 2000);
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        swal('', 'Erro ao excluir post!', 'warning');
                    }
                },
                error: function() {
                    $.unblockUI();
                    swal("", "Erro na operação, consulte o administrador do sistema!", "warning");
                }
            });
        });
    });



    /**********************************
     * FORM PLANOS - PARA VOCÊ INSERT
     ***********************************/

    $('#frm-for-you-insert').validate({
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
            var formData = new FormData($("#frm-for-you-insert")[0]);
            $.ajax({
                url: BASE_URL + 'planos/paravoce/insert',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Plano cadastrado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'planos/paravoce');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });

    /**********************************
     * FORM PLANOS - PARA VOCÊ - UPDATE
     ***********************************/

    $('#frm-for-you-update').validate({
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
            var formData = new FormData($("#frm-for-you-update")[0]);
            $.ajax({
                url: BASE_URL + 'planos/paravoce/update',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Plano alterado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'planos/paravoce');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });


    /**********************************
     * DELETE PLANO PARA EMPRESA - Delete
     ***********************************/

    $("#btn-delete-plan-for-you").on('click', function() {
        var dados = 'id=' + $(this).attr("data-id");
        //console.log(dados);
        swal({
            title: 'Atenção',
            text: "Deseja realmente excluir este registro?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then(function() {
            $.ajax({
                type: 'POST',
                url: BASE_URL + 'planos/paravoce/delete',
                data: dados,
                beforeSend: function(data) {
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);                
                    if (data === 'TRUE') {
                        $.unblockUI();
                        swal('Excluido!', 'Plano excluído com sucesso.', 'success');
                        setTimeout(function() {
                            $(location).attr('href', BASE_URL + 'planos/paravoce');
                        }, 2000);
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        swal('', 'Erro ao excluir plano!', 'warning');
                    }
                },
                error: function() {
                    $.unblockUI();
                    swal("", "Erro na operação, consulte o administrador do sistema!", "warning");
                }
            });
        });
    });


    /**********************************
     * FORM PLANOS - PARA EMPRESA INSERT
     ***********************************/

    $('#frm-for-business-insert').validate({
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
            var formData = $("#frm-for-business-insert").serialize();
            $.ajax({
                url: BASE_URL + 'planos/paraempresa/insert',
                type: 'GET',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Plano cadastrado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'planos/paraempresa');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });

    /**********************************
     * FORM PLANOS - PARA EMPRESA UPDATE
     ***********************************/

    $('#frm-for-business-update').validate({
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
            var formData = $("#frm-for-business-update").serialize();
            $.ajax({
                url: BASE_URL + 'planos/paraempresa/update',
                type: 'GET',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    console.log(data);
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Plano alterado com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'planos/paraempresa');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    //console.log(data);
                    /* $('.msg').fadeIn('slow', function() {
                        $(this).text("Erro crítico! Por favor, contate o administrador do sistema.");
                    }); */
                }
            });
        }
    });


    /**********************************
     * DELETE PLANO PARA EMPRESA - Delete
     ***********************************/

    $("#btn-delete-plan-for-business").on('click', function() {
        var dados = 'id=' + $(this).attr("data-id");
        //console.log(dados);
        swal({
            title: 'Atenção',
            text: "Deseja realmente excluir este registro?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then(function() {
            $.ajax({
                type: 'POST',
                url: BASE_URL + 'planos/paraempresa/delete',
                data: dados,
                beforeSend: function(data) {
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);                
                    if (data === 'TRUE') {
                        $.unblockUI();
                        swal('Excluido!', 'Plano excluído com sucesso.', 'success');
                        setTimeout(function() {
                            $(location).attr('href', BASE_URL + 'planos/paraempresa');
                        }, 2000);
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        swal('', 'Erro ao excluir plano!', 'warning');
                    }
                },
                error: function() {
                    $.unblockUI();
                    swal("", "Erro na operação, consulte o administrador do sistema!", "warning");
                }
            });
        });
    });


    /**********************************
     * FORM FAQ - PAGE
     ***********************************/

    $('#frm-faq-page').validate({
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
            var formData = new FormData($("#frm-faq-page")[0]);
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/duvidas/update_page',
                type: 'POST',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros atualizados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/duvidas/pagina');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM FAQ - CONTENT INSERT
     ***********************************/

    $('#frm-faq-content-insert').validate({
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
            var formData = $("#frm-faq-content-insert").serialize();
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/duvidas/insert_content',
                type: 'GET',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/duvidas/conteudo');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * FORM FAQ - CONTENT UPDATE
     ***********************************/

    $('#frm-faq-content-update').validate({
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
            var formData = $("#frm-faq-content-update").serialize();
            //console.log(formData.get('description'));
            $.ajax({
                url: BASE_URL + 'institucional/duvidas/update_content',
                type: 'GET',
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                beforeSend: function(data) {
                    //console.log(data);
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);               
                    $.unblockUI();
                    if (data === "TRUE") {
                        swal("", "Registros cadastrados com sucesso!", "success");
                        setTimeout(() => {
                            $(location).attr('href', BASE_URL + 'institucional/duvidas/conteudo');
                        }, 2000);
                    } else if (data === "FALSE") {
                        swal("", "Dados não enviados!", "warning");
                    }
                },
                error: function(data) {
                    console.log(data);
                    swal("", "Erro crítico! Por favor, contate o administrador do sistema.", "warning");
                }
            });
        }
    });

    /**********************************
     * DELETE PLANO PARA EMPRESA - Delete
     ***********************************/

    $(".btn-delete-faq-content").on('click', function() {
        var dados = 'id=' + $(this).attr("data-id");
        //console.log(dados);
        swal({
            title: 'Atenção',
            text: "Deseja realmente excluir este registro?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then(function() {
            $.ajax({
                type: 'POST',
                url: BASE_URL + 'institucional/duvidas/delete_content',
                data: dados,
                beforeSend: function(data) {
                    $.blockUI({
                        message: '<h3>processando...</h3>',
                        css: {
                            border: 'none',
                            padding: '15px',
                            backgroundColor: '#000',
                            '-webkit-border-radius': '10px',
                            '-moz-border-radius': '10px',
                            opacity: .5,
                            color: '#fff'
                        }
                    });
                },
                success: function(data) {
                    //console.log(data);                
                    if (data === 'TRUE') {
                        $.unblockUI();
                        swal('Excluido!', 'Plano excluído com sucesso.', 'success');
                        setTimeout(function() {
                            $(location).attr('href', BASE_URL + 'institucional/duvidas/conteudo');
                        }, 2000);
                    } else if (data === 'FALSE') {
                        $.unblockUI();
                        swal('', 'Erro ao excluir plano!', 'warning');
                    }
                },
                error: function() {
                    $.unblockUI();
                    swal("", "Erro na operação, consulte o administrador do sistema!", "warning");
                }
            });
        });
    });

    /**********************************
     * FUNçÂO RESPONSE MESSAGE
     ***********************************/

    function msg(msg, tipo) {
        var retorno = $(".msg");
        var tipo = (tipo === 'success') ? 'success' : (tipo === 'alert') ? 'warning' : (tipo === 'error') ? 'danger' : (tipo === 'info') ? 'info' : '';
        retorno.empty().fadeOut('fast', function() {
            return $(this).html('<div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');
        });
        //esconde a div depois de 5 segundos
        setTimeout(function() {
            retorno.fadeOut('slow');
        }, 3000);
    }

});