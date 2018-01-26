<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--
New Event
http://www.templatemo.com/tm-486-new-event
-->
    <title>Ecomp jr</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

    <!-- =========================
     PRE LOADER       
============================== -->
    <div class="preloader">

        <div class="sk-rotating-plane"></div>

    </div>


    <!-- =========================
     NAVIGATION LINKS     
============================== -->
    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
        <div class="container">

            <!-- navbar header -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
                <a href="#" class="navbar-brand">ECOMP JR</a>
            </div>

            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="smoothScroll">Home</a></li>
                    <li><a href="_view/membros.html" class="smoothScroll">Membros</a></li>
                    <li><a href="_view/projetos.html" class="smoothScroll">Projetos</a></li>
                    <li><a href="_view/contatos.html" class="smoothScroll">Contatos</a></li>

                </ul>

            </div>

        </div>
    </div>


    <!-- =========================
    INTRO SECTION   
============================== -->
    <section id="intro" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h3 class="wow bounceIn" data-wow-delay="0.9s">Feira de Santana, BA</h3>
                    <h1 class="wow fadeInUp" data-wow-delay="1.6s">Empresa Júnior de Engenharia de Computação</h1>

                    <a href="#" onclick="exibe('login')" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">LOGIN</a>

                    <div id="login" class="col-md-12 col-sm-12" style="display: none">
                        <br>
                        <div class="col-md-offset-5 col-md-3 col-lg-3 col-sm-12">
                            <form action="_controller/login.php" method="POST">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
                                <br>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Digite sua Senha">
                                <br>
                                <div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
                                    <input name="login" type="submit" class="form-control" id="submit" value="entrar">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </section>   

        <!-- =========================
    FOOTER SECTION   
============================== -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2017 Your Company | Design: <a rel="nofollow" href="http://www.templatemo.com/page/1" target="_parent">Templatemo</a></p>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Conheça a Ecomp Jr. +55 (75) 10100-1010</p>
                        <ul class="social-icon">
                            <li>
                                <a target="_blanck" href="https://www.facebook.com/ecompjr.uefs/" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a>
                            </li>
                            <li>
                                <a target="_blanck" href="https://twitter.com/EcompJr" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a>
                            </li>

                            <li>
                                <a target="_blanck" href="https://www.instagram.com/ecompjr/?hl=pt-br" class="fa fa-instagram wow fadeInUp" data-wow-delay="1.6s"></a>
                            </li>
                            <li>
                                <a target="_blanck" href="http://www.ecompjr.com.br" class="fa fa-envelope-o wow fadeInUp" data-wow-delay="1.9s"></a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </footer>


        <!-- Back top -->
        <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


        <!-- =========================
     SCRIPTS   
============================== -->
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

</body>

</html