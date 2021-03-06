<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- TITLE OF SITE -->
    <title>{{$settings->title}}</title>

    <meta name="description" content="{{$settings->description}}">
    <meta name="keywords" content="{{$settings->keywords}}">
    <meta name="author" content="">

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    @if($settings->favicon)
        <link rel="shortcut icon" href="/uploads/images/favicon/{{$settings->favicon}}" type="image/x-icon">
        <link rel="icon" href="/uploads/images/favicon/{{$settings->favicon}}" type="image/x-icon">
    @else
        <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ URL::asset('images/favicon.ico') }}" type="image/x-icon">
    @endif

    <!-- =========================
       STYLESHEETS
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/bootstrap.min.css') }}">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="{{ URL::asset('css/icons/iconfont.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">

    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/loaders.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/pickadate-default.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/plugins/pickadate-default.date.css') }}">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#main-navbar">

<!-- Preloader -->
<div class="loader bg-white">
    <div class="loader-inner ball-scale-ripple-multiple vh-center">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<div class="main-container" id="page">
    <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
    <header id="nav5-1">

        <!-- Top Bar -->
        <section class="top-bar bg-edit">
            <div class="container p-l-0">
                <!-- Working Hours -->
                {{--<div class="schedule text-edit">--}}
                    {{--<i class="icon-clock2"></i> <span>Schedule:</span> Mon-Sat 8:00-18:00, Sun 8:00-14:00--}}
                {{--</div>--}}
                <!-- Contact Info -->
                <div class="contact-info text-edit">
                    @if($contact->email)
                        <div class="email m-r-lg"><i class="icon-envelope"></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
                    @endif
                    @if($contact->phone)
                        <div class="phone"><i class="icon-phone3"></i><span>Call us at:</span>{{ $contact->phone }}</div>
                    @endif
                </div>
            </div><!-- /End Container -->
        </section>


        <nav class="navbar nav-2 bg-edit affix-top" id="main-navbar">
            <div class="container">

                <div class="navbar-header">
                    <!-- Menu Button for Mobile Devices -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Image Logo -->
                    <!--
                    recommended sizes
                        width: 150px;
                        height: 35px;
                    -->
                    <a href="/" class="navbar-brand smooth-scroll">
                        @if($settings->logo_image)
                            <img src="/uploads/images/logo/{{$settings->logo_image}}" alt="{{$settings->logo_text}}">
                        @endif
                        @if($settings->logo_text)
                            <h3 style="float: left;">{{$settings->logo_text}}</h3></a>
                        @endif
                    <!-- Image Logo For Background Transparent -->
                    <!--
                        <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                        <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a>
                    -->
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- Menu Links -->
                    <ul class="nav navbar-nav navbar-right">
                        @foreach($menu as $point)
                            @if($point->active)
                                <li><a href="{{ $point->url }}" class="smooth-scroll">{{ $point->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div><!-- /End Navbar Collapse -->

            </div><!-- /End Container -->
        </nav><!-- /End Nav -->
    </header><!-- =========================
            HERO SECTION
        ============================== -->

    @yield('content')

    <section id="subscription5-3" class="p-y-lg subscription bg-edit bg-img" style="background-image:url('/uploads/images/resize/{{$data->footer_image}}')">
        <div class="overlay"></div>
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <h2>Подать заявку</h2>
                        <p class="lead">Чтобы подать заявку, зполните форму и мы с вами свяжимся в ближайшее время</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- Mailchimp Form -->
                    {!! Form::open(['class' => 'form-horizontal form-white form-margin text-white', 'id' => 'callbackFrom']) !!}
                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'm2Name', 'placeholder' => 'Имя']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'm3PhoneLayout', 'placeholder' => 'Телефон']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('ОТПРАВИТЬ ЗАЯВКУ', ['class' => 'btn btn-shadow btn-green btn-md']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div><!-- /End Row -->
        </div><!-- /End Container -->

    </section><!-- =========================
             FOOTER
        ============================== -->
    <footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-dark">
        <div class="container">

            <div class="row">
                <!-- Copy -->
                <div class="col-sm-6 text-white">
                    <p>Copyright © 2016 powered by <a href="https://www.linkedin.com/in/evgeniy-nakoneschniy-841720bb" class="f-w-900 inverse">Evgeniy Nakoneschniy</a> & <a href="https://www.linkedin.com/in/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%BA%D0%BE%D0%B2%D0%B0%D0%BB%D0%B5%D0%BD%D0%BA%D0%BE-673a11a3" class="f-w-900 inverse">Roman Kovalenko</a></p>
                </div>
                <!-- Social Links -->
                <div class="col-sm-6">
                    <div class="contact-info text-edit">
                        @if($contact->email)
                            <div class="email m-r-lg"><i class="icon-envelope"></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></div>
                        @endif
                        @if($contact->phone)
                            <div class="phone"><i class="icon-phone3"></i><span>Call us at:</span>{{ $contact->phone }}</div>
                        @endif
                    </div>
                </div>
            </div><!-- /End Row -->
        </div><!-- /End Container -->
    </footer></div><!-- /End Main Container -->

<!-- Back to Top Button -->
<!--
<a href="#" class="top">Top</a>
-->


<!-- =========================
     SCRIPTS
============================== -->
<script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script src="{{ URL::asset('js/plugins/jquery1.11.2.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.easing.1.3.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.countTo.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.jCounter-0.1.4.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.vide.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/spectragram.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/twitterFetcher_min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/wow.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/picker.js') }}"></script>
<script src="{{ URL::asset('js/plugins/picker.date.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/jquery.maskedinput.min.js') }}"></script>
<!-- Custom Script -->
<script src="{{ URL::asset('js/custom.js') }}"></script>



<iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"></iframe>
</body>
</html>