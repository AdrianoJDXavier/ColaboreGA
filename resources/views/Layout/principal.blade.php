<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/logo.png">

    <title>ColaboreGA</title>

    <!-- Bootstrap CSS -->

    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{URL::asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{URL::asset('css/elegant-icons-style.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/abaStyle.css')}}" rel="stylesheet">

</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
                <i class="icon_menu"></i>
            </div>
        </div>

        <!--logo start-->
        <a href="/" class="logo">Colabore
            <span class="lite">GA</span>
        </a>
        <!--logo end-->

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right/ top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<span class="profile-ava">
								<img alt="" src="">
							</span>
                        <span class="username">Bem Vindo:
								<strong>Adriano Xavier</strong>
							</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#">
                                <i class="icon_profile"></i> Meu Perfil</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon_mail_alt"></i> Menssagens</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon_clock_alt"></i> Linha do Tempo</a>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="icon_key_alt"></i> Sair</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="/">
                        <i class="icon_house_alt"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Contratos</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a class="" href="cadastrar contrato">Cadastrar Contrato</a>
                        </li>
                        <li>
                            <a class="" href="contratos">Listar contratos</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class=" icon_profile"></i>
                        <span>Participantes</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a class="" href="cadastrar participante">Cadastrar Participantes</a>
                        </li>
                        <li>
                            <a class="" href="listar participantes">Listar Participantes</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_documents"></i>
                        <span>TOR</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li>
                            <a class="" href="listar pessoaF">TOR Pessoa Fisica</a>
                        </li>
                        <li>
                            <a class="" href="PessoaJ">TOR Pessoa Juridica</a>
                        </li>
                        <li>
                            <a class="" href="Eventos">TOR Eventos</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <section class="content" id="main-content">
        <section class="wrapper">
            @yield('conteudo')
        </section>
    </section>
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<!-- custom select -->
<script src="js/jquery.customSelect.min.js"></script>
<script src="assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="js/scripts.js"></script>
<!-- custom script for this page-->
<script src="js/jquery.slimscroll.min.js"></script>
</body>

</html>