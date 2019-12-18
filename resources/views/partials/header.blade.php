    <head>
        <meta charset="utf-8">
        <title>Houder</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="assets/images/logos/logo.svg">
    
        <link rel="shortcut icon" href="assets/images/logos/logo.svg" type="image/x-icon" />
        <link rel="apple-touch-icon" href="assets/images/logos/logo.svg">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Colors CSS -->
        <link rel="stylesheet" href="assets/css/colors.css">
        <!-- ALL VERSION CSS -->
        <link rel="stylesheet" href="assets/css/versions.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
    </head>
    <body>
        <header class="header header_style_01">
            <nav class="megamenu navbar-default ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <a class="navbar-brand"><img class="navbar-brand" src="assets/images/logos/Houder_11193.png" width="300px" alt="image"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                            <li><a class="btn-light btn-radius btn-brd top-btn {{ Request::is('join-mitra') ? 'btn-brd' : null }}" href="{{'/join-mitra'}}"><i class="fa fa-angle-double-right"></i>Join Mitra</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right menu-top">
                            <li ><a class="{{ Request::is('/') ? 'active' : null }}" href="{{'/'}}">Beranda</a ></li>
                            <li ><a class="{{ Request::is('about-us') ? 'active' : null }}" href="{{'/about-us'}}">Tentang Kami</a></li>
                            <li><a class="{{ Request::is('service') ? 'active' : null }}" href="{{'/service'}}">Layanan</a></li>
                            <li><a class="{{ Request::is('contact') ? 'active' : null }}" href="{{'/contact'}}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>        
        <div id="preloader">
            <div id="cupcake" class="box">
                <span class="letter">L</span>
                <div class="cupcakeCircle box">
                    <div class="cupcakeInner box">
                        <div class="cupcakeCore box"></div>
                    </div>
                </div>
                <span class="letter box">A</span>
                <span class="letter box">D</span>
                <span class="letter box">I</span>
                <span class="letter box">N</span>
                <span class="letter box">G</span>
            </div>
        </div>
        <!-- END LOADE