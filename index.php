<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InvOper - Investigación de Operaciones I - AlejoJamC</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- MathJaX -->
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script type="text/javascript" async
            src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_CHTML">
    </script>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">InvOper</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#problem">Problema</a>
                </li>
                <li class="page-scroll">
                    <a href="#approach">Planteamiento</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <img src="img/alejojamc.jpg" class="imgresize img-responsive img-circle" alt="Autor">
            </div>
            <div class="col-xs-8">
                <div class="intro-text">
                    <span class="name">Investigación de Operaciones I</span>
                    <hr class="star-light">
                    <span class="skills">Solución problema propuesto #11</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Problem text and table -->
<section id="problem">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Problema #11</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <p class="text-justify">
                Una compañía petrolera produce un tipo de gasolina a partir de petróleo.
                Puede comprar cuatro tipos de petróleo y dispone de los siguientes datos:
            </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Crudo</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>Precio (U$litro)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>0.8</th>
                        <th>0.1</th>
                        <th>0.1</th>
                        <th>43</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>0.3</th>
                        <th>0.3</th>
                        <th>0.4</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>0.7</th>
                        <th>0.1</th>
                        <th>0.2</th>
                        <th>47</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>0.4</th>
                        <th>0.5</th>
                        <th>0.1</th>
                        <th>37</th>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="row">
            <p class="text-justify">
                A, B y C denotan los elementos a partir de los cuales se puede producir cada tipo de crudo.
                La tabla muestra los porcentajes de cada elemento en cada crudo producido.
                Las exigencias del mercado imponen que el crudo de base para la obtención de gasolina debe tener al menos el 60% del elemento A
                y no más del 30% de C. Obtenga el crudo base mezclando los cuatro tipos anteriores de forma tal que el coste sea mínimo.
            </p>
        </div>
    </div>
</section>

<!-- Approach Section -->
<section class="success" id="approach">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Planteamiento</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>
                    Variables de decision:<br>
                    $X_1$ = Numero de litros de crudo tipo 1<br>
                    $X_2$ = Numero de litros de crudo tipo 2<br>
                    $X_3$ = Numero de litros de crudo tipo 3<br>
                    $X_4$ = Numero de litros de crudo tipo 4<br>
                </p>
            </div>
            <div class="col-lg-4">
                <p>
                    Función objetivo ( $F. O.$ ):<br>
                    $MIN. Z= 43x_1 + 31x_2 + 47x_3 + 37x_4$<br>
                    <br>
                    Restricciones:<br>
                    $0.8x_1 + 0.3x_2 + 0.7x_3 + 0.4x_4 \geqslant 0.6$<br>
                    $0.1x_1 + 0.4x_2 + 0.2x_3 + 0.1x_4 \leqslant 0.3$<br>
                    $x_1 + x_2 + x_3 + x_4 \leqslant 1$<br>
                    $x_1, x_2, x_3, x_4 \geqslant 0$<br>
                </p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#solvingmodal" class="btn btn-lg btn-outline portfolio-link" data-toggle="modal">
                    <i class="fa fa-cogs"></i> Solucionar
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contacto</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <!-- Send contact email -->
            <div class="col-lg-6">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefono</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensaje</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact information -->
            <div class="col-lg-6">
                <div>
                    <h3>Acerce de @AlejojamC</h3>
                    <p>Mi nombre es <a href="http://alejojamc.com/" target="_blank">Alejandro Mantilla</a> Desarrollador de software y estudiante de Ingenieria de sistemas. Fuerte interes en Back-end #NodeJS #php #dotNet y en servicos web REST.</p>
                </div>
                <div>
                    <h3>Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://github.com/AlejoJamC" target="_blank" class="btn-social btn-outline"><i class="fa fa-github"></i></a>
                        </li>
                        <li>
                            <a href="https://co.linkedin.com/in/john-alejandro-mantilla-celis-30065662" target="_blank" class="btn-social btn-outline"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/AlejoJamC" target="_blank" class="btn-social btn-outline"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Invoper 2016
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Solving Modals -->
<div class="portfolio-modal modal fade" id="solvingmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Solucion ejercicio #11</h2>
                        <hr class="star-primary">
                        <p>
                            - Inecuaciones iniciales -<br>
                            Función objetivo ( $F. O.$ ):<br>
                            $MIN. Z= 43x_1 + 31x_2 + 47x_3 + 37x_4$<br>
                            <br>
                            Restricciones:<br>
                            $0.8x_1 + 0.3x_2 + 0.7x_3 + 0.4x_4 \geqslant 0.6$<br>
                            $0.1x_1 + 0.4x_2 + 0.2x_3 + 0.1x_4 \leqslant$<br>
                            $x_1 + x_2 + x_3 + x_4 \leqslant 1$<br>
                            $x_1, x_2, x_3, x_4 \geqslant 0$<br>
                        </p>
                        <p>
                            - Las inecuaciones son tratadas como igualdades -<br>
                            LaFunción objetivo es igualada a 0 (cero):<br>
                            $F. O. \Rrightarrow$ $ Z - 43x_1 - 31x_2 - 47x_3 - 37x_4 = 0$<br>
                            <br>
                            A las restricciones se le agregar varaibles de holgura:<br>
                            $0.8x_1 + 0.3x_2 + 0.7x_3 + 0.4x_4 + S_1 = 0.6$<br>
                            $0.1x_1 + 0.4x_2 + 0.2x_3 + 0.1x_4 + S_2 = 0.3$<br>
                            $x_1 + x_2 + x_3 + x_4 + S_3 = 1$<br>
                        </p>
                        <p>
                            - Primer proceso Simplex -<br>
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>$Variables$</th>
                                <th>$Z$</th>
                                <th>$X_1$</th>
                                <th>$X_2$</th>
                                <th>$X_3$</th>
                                <th>$X_4$</th>
                                <th>$S_1$</th>
                                <th>$S_2$</th>
                                <th>$S_3$</th>
                                <th>$b_i$</th>
                                <th>$b_i/Y_ij$</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>$Z$</th>
                                <th>1</th>
                                <th>-43</th>
                                <th>-31</th>
                                <th>-47</th>
                                <th>-37</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>-</th>
                            </tr>
                            <tr>
                                <th>$S_1$</th>
                                <th>0</th>
                                <th>0.8</th>
                                <th>0.3</th>
                                <th>0.7</th>
                                <th>0.4</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0.6</th>
                                <th>0.86</th>
                            </tr>
                            <tr>
                                <th>$S_2$</th>
                                <th>0</th>
                                <th>0.1</th>
                                <th>0.4</th>
                                <th>0.2</th>
                                <th>0.1</th>
                                <th>0</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0.3</th>
                                <th>1.5</th>
                            </tr>
                            <tr>
                                <th>$S_3$</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                            </tr
                            </tbody>
                        </table>
                        <p>
                            - Operaciones a realizar con cada valor segun su fila -<br>
                            $Z + 47$<br>
                            $S_1 + 0.3$ ó $S_1/0.7$<br>
                            $S_2 - 0.2$<br>
                            $S_3 - 1$<br>
                        </p>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>$Variables$</th>
                                <th>$Z$</th>
                                <th>$X_1$</th>
                                <th>$X_2$</th>
                                <th>$X_3$</th>
                                <th>$X_4$</th>
                                <th>$S_1$</th>
                                <th>$S_2$</th>
                                <th>$S_3$</th>
                                <th>$b_i$</th>
                                <th>$b_i/Y_ij$</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>$Z$</th>
                                <th>1</th>
                                <th>-43</th>
                                <th>-31</th>
                                <th>-47</th>
                                <th>-37</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>-</th>
                            </tr>
                            <tr>
                                <th>$S_1$</th>
                                <th>0</th>
                                <th>0.8</th>
                                <th>0.3</th>
                                <th>0.7</th>
                                <th>0.4</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0.6</th>
                                <th>0.86</th>
                            </tr>
                            <tr>
                                <th>$S_2$</th>
                                <th>0</th>
                                <th>0.1</th>
                                <th>0.4</th>
                                <th>0.2</th>
                                <th>0.1</th>
                                <th>0</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0.3</th>
                                <th>1.5</th>
                            </tr>
                            <tr>
                                <th>$S_3$</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>0</th>
                                <th>0</th>
                                <th>0</th>
                                <th>1</th>
                                <th>1</th>
                            </tr
                            </tbody>
                        </table>
                        <p>
                            - Resultado del pivote Simplex -<br>
                        </p>
                        <p>
                            - Valores respuesta -<br>
                            $Z = 47$<br>
                            $X_1 = 0$<br>
                            $X_2 = 0$<br>
                            $X_3 \approx 0.9$<br>
                            $X_4 = 0$<br>
                            $S_1 = 0$<br>
                            $S_2 \approx 0.1$<br>
                            $S_3 = 0$<br>
                        </p>
                        <hr><br>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Salir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>

</body>

</html>