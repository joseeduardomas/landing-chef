<?php
    $GLOBALS['App'] = new stdClass();

    $method = $_SERVER['REQUEST_METHOD'];
    $medios_contacto = ['Teléfono', 'Email'];

    switch ($method)
    {
        case 'GET':?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>ChefOnline - Administra tu </title>
        <!-- mobile responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">

        <link rel="stylesheet" href="../js/jQuery-Validation-Engine/css/validationEngine.jquery.css">

        <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>

        <div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->

        <header class="header home-page-one">
            <div class="container">
                <div class="appilo-menu clearfix">
                    <nav class="navbar navbar-expand-lg navbar-custom navbar-light">

                        <a class="navbar-brand  mr-auto " href="../index.html">
                            <img src="../img/Chef-Online-LOGO.png" alt="Awesome Image" class="default-logo">
                            <img src="../img/Chef-Online-LOGO-white.png" alt="Awesome Image" class="stick-logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse navbar-nav" id="navbarToggler">
                            <ul class="ml-auto">
                                <li><a class="nav-link active" href="/index.html#banner">Inicio</a></li>
                                <li><a class="nav-link" href="/index.html#features">Características</a></li>
                                <li><a class="nav-link" href="/index.html#how-it-works">Como funciona</a></li>
                                <li><a class="nav-link" href="/index.html#pricing">Precios</a></li>
                                <li class="dropdown">
                                    <a class="nav-link" href="#">
                                        Apps
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/index.html#ceochefonline">CEO ChefOnline</a></li>
                                        <li><a href="/apps.html#ceochefonlineDOM">ChefOnline a Domicilio </a></li>
                                        <li><a href="/apps.html#ceochefonlineGP">ChefOnline GP</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="sign-up-btn">
                            <a href="https://chefonline.com.mx/chefonline/web/index.php/site/login" target="_blank" class="sign-btn">Iniciar Sesión</a>
                        </div>
                    </nav>
                </div>
        </header><!-- /.header -->

        <section class="banner-static" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-content">
                            <h3>Administra tu <br /> restaurante fácilmente</h3>
                            <p>ideal para cafeterías, pizzerías, antojitos, sin <br> procesos complejos, fácil de usar y accesible<br> desde cualquier lugar.</p>
                            <p>Pruébalo por 15 días gratis, ¡solo tienes que registrarte!</p>

                            <?php if (false) { ?>
                            <a href="https://chefonline.com.mx/chefonline/web/index.php/auto/auto-registro" target="_blank" class="thm-btn"><span>Regístrate</span></a>
                            <a href="https://calendly.com/chefonline/demostracion-de-chefonline" target="_blank" class="thm-btn borderd"><span>Solicita tu Demo</span></a>
                            <?php } ?>
                        </div><!-- /.banner-content -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-lg-6 col-md-12" style="">
                        <form action="" method="post" id="contact_form">
                            <div class="banner-content">
                                <div class="p-3" style="background: rgba(255,255,255,.6); border-radius: 3px; ">
                                    <div class="form-group">
                                        <h5 class="">Para obtener más información rellena este formulario</h5>
                                    </div>
                                    <div id="form-app">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        <footer class="footer">
            <div class="subscribe-section">
                <div class="container">
                    <div class="sec-title text-center">
                        <h2>Suscríbete a nuestro Newsletter</h2>
                        <p>Para recibir información, actualizaciones, novedades y próximos lanzamientos.</p>
                    </div><!-- /.sec-title -->
                    <form action="https://chefonline.us17.list-manage.com/subscribe/post?u=cd756406073b554e2d8963d9f&amp;id=44fb14a75b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate subscribe-form clearfix" target="_blank" novalidate>
                        <div class="left-content float-left clearfix">
                            <i class="far fa-envelope"></i>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="tu@mail.com" required />
                        </div><!-- /.left-content -->
                        <div class="right-content float-right">
                            <button name="subscribe" id="mc-embedded-subscribe" class="thm-btn" type="submit"><span>Suscríbete ahora</span></button>
                        </div><!-- /.right-content -->
                    </form><!-- /.subscribe-form -->
                </div><!-- /.container -->
            </div><!-- /.subscribe-section -->
            <div class="footer-widget-wrapper">
                <div class="container">
                    <div class="row masonary-layout">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <a href="index.html"><img src="../img/Chef-Online-LOGO.png" alt="Awesome Image"/></a>
                                <p>Es una poderosa herramienta que te permite controlar y administrar tu restaurante, es ideal para pizzerías, restaurantes de antojitos, cafeterías y comida rápida.</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <div class="title">
                                    <h3>Contacto</h3>
                                </div><!-- /.title -->
                                <p><span>Teléfono:</span> +52 981 816 7139</p>
                                <p><span>Email:</span> contacto@chefonline.com.mx</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="title">
                                    <h3>Enlaces Rápidos</h3>
                                </div><!-- /.title -->
                                <ul class="link-list">
                                    <li><a href="#">Aviso de Privacidad</a></li>
                                    <li><a href="#">2Sis</a></li>
                                </ul><!-- /.link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget tweets-widget">
                                <div class="title">
                                    <h3>Redes Sociales</h3>
                                </div><!-- /.title -->
                                <div class="social">
                                    <a href="https://www.facebook.com/tuChefOnline/" class="fab fa-facebook-f"></a><!--
						--><a href="https://twitter.com/tu_ChefOnline" class="fab fa-twitter"></a><!--
						--><a href="https://www.youtube.com/channel/UC4iLzKkEpvH9ztsVYOH2PWQ" class="fab fa-youtube"></a>
                                </div><!-- /.social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-widget-wrapper -->
            <div class="footer-bottom" id="footer-id">
                <div class="container">
                    <div class="footer-copyright">
                        <div class="float-left left-content">
                            <p>© 2020, ChefOnline es un producto de <a href="http://2sis.com.mx/">2SIS</a>.</p>
                        </div><!-- /.float-left left-content -->
                        <div class="float-right right-content">
                            <p>Todos los derechos reservados.</p>
                        </div><!-- /.float-right -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.footer-bottom -->
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112534061-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-112534061-1');
            </script>
        </footer><!-- /.footer -->

        <div class="scrollup"><span class="fas fa-angle-up"></span></div>

        <script src="../js/jquery.js"></script>

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap-select.min.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/isotope.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/jquery.easing.min.js"></script>
        <script src="../js/swiper.min.js"></script>
        <script src="../js/jquery.bxslider.min.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/vue/vue.js"></script>
        <script src="../js/jQuery-Validation-Engine/js/jquery.validationEngine.min.js"></script>
        <script src="../js/jQuery-Validation-Engine/js/languages/jquery.validationEngine-es.js"></script>

        <script type="text/template" id="form-app-template">
            <div>
                <div class="form-group row">
                    <label for="nombre" class="col-form-label col-md-4">Nombre</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control validate[required]" name="nombre" id="nombre">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="restaurante" class="col-form-label col-md-4">Restaurante</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control validate[required]" name="restaurante" id="restaurante">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telefono" class="col-form-label col-md-4">Teléfono</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control validate[required, custom[phone]]" name="telefono" id="telefono">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-form-label col-md-4">Email</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control validate[required, custom[email]]" name="email" id="email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reto" class="col-form-label col-md-4">Principal reto o problema a resolver</label>
                    <div class="col-md-8">
                        <textarea name="reto" id="reto" class="form-control validate[required]"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="medio_contacto" class="col-form-label col-md-4">Medio de contacto</label>
                    <div class="col-md-8">
                        <select name="medio_contacto" id="medio_contacto" class="form-control">
                            <?php foreach ($medios_contacto as $medio) {?>
                                <option value="<?= $medio ?>"> <?= $medio ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reto" class="col-form-label col-md-4">¿Desea probar gratis la herramienta?</label>
                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="probar_herramienta" id="probar_herramienta_si" value="Si" v-model="probar_herramienta">
                            <label class="form-check-label" for="probar_herramienta_si">
                                Si
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="probar_herramienta" id="probar_herramienta_no" value="No" v-model="probar_herramienta">
                            <label class="form-check-label" for="probar_herramienta_no">
                                No
                            </label>
                        </div>
                    </div>
                </div>

                <div>
                    <button class="thm-btn" type="submit">
                        <span>Enviar</span>
                    </button>
                </div>

                <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" ref="modal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <!--<div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>-->
                            <div class="modal-body pt-5 pb-5">
                                <div class="text-center">
                                    <i class="fas fa-check-circle fa-5x" style="color: lightgreen;"></i>
                                </div>
                                <h6 class="mt-5">
                                    Gracias...
                                </h6>
                                <h6 class="">
                                    {{modalMessage}}
                                </h6>
                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </script>

        <script>
            (function () {
                new Vue({
                    template: '#form-app-template',
                    mounted: function () {

                        var vm = this;
                        $('#contact_form').validationEngine('attach', {
                            onValidationComplete: function (form, status)
                            {
                                if (status)
                                {
                                    switch (vm.probar_herramienta)
                                    {
                                        case "Si":
                                            vm.modalMessage = 'En breve será redirigido para obtener su prueba gratis de 15 días.';
                                            break;
                                        case "No":
                                            vm.modalMessage = 'Hemos recibido su solicitud, en breve le contactaremos'
                                            break;
                                    }

                                    $(vm.$refs.modal).modal({
                                        show: true,
                                        keyboard: false,
                                        backdrop: 'static'
                                    })

                                    setTimeout(function () {
                                        form[0].submit();
                                    }, 5000)

                                    return false;
                                }

                                return status;
                            }
                        });

                    },
                    data: {
                        probar_herramienta: 'Si',
                        modalMessage: undefined
                    }
                }).$mount('#form-app')
            })()
        </script>

    </body>
</html>

<?php
            break;
        case 'POST':
            require('Mail.php');

            $mail_enviado = false;
            $url_redirect = $_SERVER['REQUEST_URI'];

            try {
                $valid = true;
                if (!isset($_POST['nombre'], $_POST['restaurante'], $_POST['telefono'], $_POST['email'],
                    $_POST['reto'], $_POST['medio_contacto'], $_POST['probar_herramienta']))
                {
                    $valid = false;
                }


                $email = $_POST['email'] ?? '';

                if (!filter_var($email,  FILTER_VALIDATE_EMAIL))
                {
                    $valid = false;
                }

                $medio_contacto = $_POST['medio_contacto'] ?? '';
                if (!in_array($medio_contacto, $medios_contacto, true))
                {
                    $valid = false;
                }

                $probar_herramienta = $_POST['probar_herramienta'] ?? '';
                if (!in_array($probar_herramienta, ['Si', 'No'], true))
                {
                    $valid = false;
                }

                $contacto_caliente = false;

                if ($probar_herramienta === 'Si')
                {
                    $url_redirect = 'https://chefonline.com.mx/chefonline/web/index.php/auto/auto-registro';

                    if ($medio_contacto === 'Email') {
                        $contacto_caliente = true;
                    }
                }
                else if ($medio_contacto === 'Telefono') {
                    $contacto_caliente = true;
                }

                if ($valid)
                {

                    $_data = $_POST;
                    $_data['tipo_contacto'] = $contacto_caliente ? "Caliente" : "Frío";
                    $mail_enviado = Mail::sendFormContactData($_data);
                }
            }
            catch (Exception $e)
            {

            }


            header( "Location: $url_redirect", true, 303 );
            exit();
            break;
    }
?>
