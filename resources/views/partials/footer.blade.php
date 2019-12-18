    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <div class="col-md-4">
                                <img class="img-responsive" src="assets/images/logos/logo.svg" width="100%" alt="houder image">
                            </div>
                            <div class="col-md-8">
                                <p class="txt-footer"> Houder adalah layanan jasa .</p>
                                <p class="txt-footer"> Houder merupakan sebuah layanan kerja cerdas yang bertujuan membantu kehidupan sehari hari masyarakat.</p>
                            </div>
                        </div>

                    </div>
                    <!-- end clearfix -->
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Informasi</h3>
                        </div>

                        <ul class="footer-links">
                        <li class="nav-item"><a class="nav-link" href="{{'/privacy-policy'}}" >Kebijakan Privasi</a ></li>
                            <li class="nav-item"><a class="nav-link" href="{{'/about'}}">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{'/faq'}}">Faq</a></li>
                        </ul>
                        <!-- end links -->
                    </div>
                    <!-- end clearfix -->
                </div>
                <!-- end col -->

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Media Sosial</h3>
                        </div>
                        <ul class="footer-links social-md">
                            <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a class="dr" href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a class="tw" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                        </ul>
                        <!-- end links -->
                    </div>
                    <!-- end clearfix -->
                </div>
                <!-- end col -->
            </div>
            <div class="container-fluid">
                <hr class="hr1">
                <div class="text-center " style="color: white;">
                    <h3 style="color: white;">Houder.co.id 2019 | Hak Cipta PT Houder Indonesia</h3>
                </div>
                <hr class="hr1">
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <script src="assets/js/all.js"></script>
    <script src="assets/js/custom.js"></script> 
    <script src="assets/js/jquery.mobile.customized.min.js"></script>
    <script src="assets/js/zenith.js"></script>
    <script>
        (function($) {
            "use strict";
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            smoothScroll.init({
                selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                speed: 500, // Integer. How fast to complete the scroll in milliseconds
                easing: 'easeInOutCubic', // Easing pattern to use
                offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                callback: function ( anchor, toggle ) {} // Function to run after scrolling
            });
        })(jQuery);
        $('#default').zenith({
            layout: 'default' , 
            slideSpeed: 450, 
            autoplaySpeed: 2000
        });
    </script>
</body>