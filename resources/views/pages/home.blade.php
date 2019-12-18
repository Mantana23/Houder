@extends('partials.header')

<div class="content-wrapper">
    <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('assets/uploads/15733.jpg');">
        <div class="container">
            <div class="row">
            
                <div class="col-md-7 col-sm-12">
                    <div class="jumbotron">
                        <div class="container">
                            <div class="big-tagline">
                                <h2>Temukan hunian</h2>
                                <p class="lead"><i class="fa fa-angle-double-right"></i> Cari hunian yang anda inginkan. <br><i class="fa fa-angle-double-right"></i> Bandingkan dengan yang lain. <br><i class="fa fa-angle-double-right"></i> Bayar hunian menggunakan
                                    aplikasi.
                                </p>
                                <div class="text-color">
                                    <a href="#" class="btn-grd btn-radius ban-btn">Download Sekarang!!!</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class=" hidden-xs col-md-5 hidden-sm pt-5">
                    <div class="app_iphone_02 wow slideInDown bgphone" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/uploads/phonebg1.png" width="60%" height="100%" alt="">
                    </div>
                </div>
           
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="post-media wow fadeIn">
                        <img src="assets/uploads/about_01.jpg" alt="" class="img-responsive img-rounded">
                        <a href="https://www.youtube.com/watch?time_continue=7&v=w81fSJ3Eqd8" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->

                <div class="col-md-5 m40">
                    <div class="message-box">
                        <h2>Apa Itu Houder</h2>
                        <p class="lead">Houder ialah sebuah layanan kerja cerdas yang bergerak dibidang jasa khususnya periklanan dimana yang diiklankan itu sebagai berikut :</p>

                        <div class="skills">
                            <div class="skills-wrapper">
                                <h3>Kost Kostan</h3>

                                <p>Dimana kebutuhan masyarakat semakin bertambah terutama dibidang hunian khususnya kost kostan, maka Houder hadir untuk memuaskan kebutuhan tersebut.</p>

                            </div>
                            <!-- end skills-wrapper -->

                            <div class="skills-wrapper">
                                <h3>Rumah Kontrak</h3>

                                <p>Dimana kebutuhan masyarakat semakin bertambah terutama dibidang hunian khususnya Rumah kontrak, maka Houder hadir untuk memuaskan kebutuhan tersebut.</p>
                            </div>
                        </div>
                        <!-- end skills -->
                    </div>
                    <!-- end messagebox -->
                </div>
            </div>
            <!-- end row -->
        </div>

    </div>

    <hr class="hr1">

    <div id="service" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Mengapa Harus Houder?</h3>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="service">
                    <div class="post-media ">
                        <a href="assets/images/slider/cari.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/slider/cari.jpeg" alt="" class="img-responsive img-rounded">
                    </div>
                    <br>
                    <h4>Cari</h4>
                    <p class="text-black" style="color:black;">Dimana fitur ini berfungsi untuk mencari hunian yang diinginkan.</p>
                </div>
                <!-- end service -->
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="services">
                    <div class="post-media ">
                        <a href="assets/images/slider/bandingkan.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/slider/bandingkan.jpeg" alt="" class="img-responsive img-rounded">
                    </div><br>
                    <h4>Bandingkan</h4>
                    <p style="color:black;" class="text-black">Bandingkan Houder dengan yang lain. Houder mempermudah siapapun untuk mencari hunian dan harga juga sesuai dengan tarif hunian yang ada.</p>
                </div>
                <!-- end service -->
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="services">
                    <div class="post-media ">
                        <a href="assets/images/slider/bayar.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="assets/images/slider/bayar.jpeg" alt="" class="img-responsive img-rounded">
                    </div><br>
                    <h4>Bayar</h4>
                    <p style="color:black;" class="text-black">Bayar kost, kontrakan, apartemen dan rumah impian menggunakan Houder tanpa perlu ribet.</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr1">
    {{-- <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Cara Penggunaan Aplikasi</h3>
                <p class="lead">Temukan hunian impian anda di aplikasi kami.</p>
            </div>
        
            <div id="default" class="row clearfix zenith_slider">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left-row">
                    <ul class="features-left">
                        <li class="highlight highlight-title" data-index="0">
                            <span class="fa fa-download effect-2"></span>
                            <div class="fl-inner ">
                                <h4>Download</h4>
                                <p>Anda bisa mendownload aplikasi Houder di Play Store</p>
                            </div>
                        </li>
                

                        <li class="highlight highlight-title lhgh" data-index="1">
                            <span class="fa fa-google effect-1"></span>
                            <div class="fl-inner">
                                <h4>Install</h4>
                                <p>Silahkan install aplikasi houder.</p>
                            </div>
                        </li>
                       

                        <li class="highlight lhgh highlight-title" data-index="2">
                            <span class="fa fa-edit effect-1"></span>
                            <div class="fl-inner">
                                <h4>Data Diri</h4>
                                <p>Isilah data diri anda sesuai dengan KTP</p>
                            </div>
                        </li>
                      

                        <li class="highlight lhgh highlight-title" data-index="3">
                            <span class="fa fa-plus-square-o effect-1"></span>
                            <div class="fl-inner">
                                <h4>Tambah Kost</h4>
                                <p>Isi data kost anda dengan data yang valid</p>
                            </div>
                        </li>
                     
                    </ul>
                </div>
            

                <div class="highlights-phone col-lg-6 col-md-6 col-sm-12 col-xs-12 wht">

                    <div class="phone-holder">
                        <div id="fon"></div>

                        <div class="hgh-linner hgi" data-index="0">
                            <img width="234" height="398" src="assets/images/ss/ss-houder-download.jpeg" class="attachment-highlight wp-post-image" alt="screen" />
                        </div>

                        <div class="hgh-linner hgi" data-index="1">
                            <img width="234" height="398" src="assets/images/ss/ss-houder-install.jpeg" class="attachment-highlight wp-post-image" alt="screen" />
                        </div>

                        <div class="hgh-linner hgi" data-index="2">
                            <img width="234" height="398" src="assets/images/ss/ss-holik-view.jpeg" class="attachment-highlight wp-post-image" alt="screen" />
                        </div>

                        <div class="hgh-rinner hgi" data-index="3">
                            <img width="234" height="398" src="assets/images/ss/ss-holik-mitra.jpg" class="attachment-highlight wp-post-image" alt="screen" />
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div> --}}
</div>

@extends('partials.footer')