<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- HTML Settings  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, width=1024">
    <meta http-equiv="Content-Language" content="ru">
    <meta charset="utf8" />
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- Page Settings  -->
    <title> @yield('title') | УчёныйКотик – Всероссийские олимпиады и конкурсы для начальной школы</title>
    <meta name="description" content="Присоединяйтесь к захватывающему миру школьных олимпиад с УчёнымКотиком! Наш сайт предлагает широкий спектр интеллектуальных состязаний для юных ученых начальных классов. Развивайте таланты и знания в увлекательной форме, участвуйте в конкурсах и получайте заслуженные награды!">
    <meta name="Keywords" content="школьные олимпиады, начальная школа, учебные конкурсы, интеллектуальные игры для детей, развитие ребенка, образовательные состязания, УчёныйКотик, маскот образования, детские научные соревнования">
    <meta property="og:site_name" content="УчёныйКотик – Путь к звездам начальной школы!"/>
    <meta property="og:description" content="Откройте дверь в мир знаний и творчества для вашего ребенка с УчёнымКотиком. Наши олимпиады и конкурсы способствуют развитию интеллекта и креативности юных умов. Присоединяйтесь к сообществу маленьких гениев и вместе достигайте новых высот!"/>

    <meta name="author" content="ZORGO">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ZORGO Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    @yield('custom-css')
    @yield('custom-js-before')
</head>
<body style="background-image: url({{ asset('/assets/images/bg.jpg') }});">
<!-- Fixed navbar -->
<div class="container p-0 mt-5">
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header mt-4">
            <!-- Button for smallest screens
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            -->
            <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt="УчёныйКотик"></a>
            <span id="logo-text">
            <p class="small-text mt-5 mb-0">Всероссийские олимпиады</p>
            <p>«Учёный котик»</p>
            </span>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="c1 active"><a href="/" class="fw-bold no-underline"><i class="fa fa-home"></i>Главная</a></li>
                <li class="c2"><a href="/events" class="fw-bold no-underline"><i class="fa fa-calendar"></i>Расписание</a></li>
                <li class="c3"><a href="/reg" class="fw-bold no-underline"><i class="fa fa-pencil"></i>Регистрация</a></li>
                <li class="c8"><a href="/cup" class="fw-bold no-underline"><i class="fa fa-trophy"></i>Победители</a></li>
                <li class="c5"><a href="/info" class="fw-bold no-underline"><i class="fa fa-question-circle"></i>Справка</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
</div>
<!-- /.navbar -->
<div class="container bg-white">
    <div class="row">
        <div class="col-3 aside">
            <div class="row">
                <div class="title-box clearfix "><h2 class="title-box_primary">Личный кабинет</h2></div>
                <form class="form-light" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Электронная почта">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-two">Вход</button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-two">Регистрация</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="list styled custom-list">
                    <ul>
                        <li><a title="Восстановление пароля" href="#">Забыли пароль?</a></li>
                    </ul>
                </div>
            </div>
        </div>
@yield('content')

    </div>

</div>

<footer id="footer">

    <div class="container">
        <div class="row">
            <div class="footerbottom">
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Course Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li><a href="#">
                                        List of Technology
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Business
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Photography
                                    </a>
                                </li>
                                <li><a href="#">
                                        List of Language
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Products Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li> <a href="#">
                                        Individual Plans  </a>
                                </li>
                                <li><a href="#">
                                        Business Plans
                                    </a>
                                </li>
                                <li><a href="#">
                                        Free Trial
                                    </a>
                                </li>
                                <li><a href="#">
                                        Academic
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>
                            Browse by Categories
                        </h4>
                        <div class="menu-course">
                            <ul class="menu">
                                <li><a href="#">
                                        All Courses
                                    </a>
                                </li>
                                <li> <a href="#">
                                        All Instructors
                                    </a>
                                </li>
                                <li><a href="#">
                                        All Members
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        All Groups
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footerwidget">
                        <h4>Contact</h4>
                        <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
                        <div class="contact-info">
                            <i class="fa fa-map-marker"></i> Kerniles 416  - United Kingdom<br>
                            <i class="fa fa-phone"></i>+00 123 156 711 <br>
                            <i class="fa fa-envelope-o"></i> youremail@email.com
                        </div>
                    </div><!-- end widget -->
                </div>
            </div>
        </div>
        <div class="social text-center">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>

        <div class="clear"></div>
        <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="index.html">Home</a> |
                            <a href="about.html">About</a> |
                            <a href="courses.html">Courses</a> |
                            <a href="price.html">Price</a> |
                            <a href="videos.html">Videos</a> |
                            <a href="contact.html">Contact</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            <span>&copy; Name 2019 All right reserved. </span> <a href="https://webthemez.com/tag/free" target="_blank">Free Templates</a> by WebThemez
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/js/modernizr-latest.js"></script>
<script type='text/javascript' src='assets/js/jquery.min.js'></script>
<script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>

<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/custom.js"></script>
@yield('custom-js-after')
</body>
</html>
