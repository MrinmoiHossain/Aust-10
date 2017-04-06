        <footer class="fotter text-center">
            <div class="container">
                <div class="col-md-4">
                    <p>AUST ME - 10 &copy; 2016</p>
                </div>
                <div>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-rss"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-try"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
        <!-- News JavaScript -->
        <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- Gallery JavaScript -->
        <script type="text/javascript" src="js/main-gallery.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
        <!-- Main JavaScript -->
        <script src="js/mainJs.min.js"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.fullscreenbanner').revolution({
                    delay:9000,
                    startwidth:960,
                    startheight:500,
                    autoHeight:"off",
                    fullScreenAlignForce:"off",

                    onHoverStop:"off",

                    thumbWidth:100,
                    thumbHeight:50,
                    thumbAmount:3,

                    hideThumbsOnMobile:"on",
                    hideBulletsOnMobile:"on",
                    hideArrowsOnMobile:"on",
                    hideThumbsUnderResoluition:0,

                    hideThumbs:0,
                    hideTimerBar:"off",

                    keyboardNavigation:"on",

                    navigationType:"none",
                    navigationArrows:"solo",
                    navigationStyle:"navbar-old",

                    navigationHAlign:"center",
                    navigationVAlign:"bottom",
                    navigationHOffset:30,
                    navigationVOffset:30,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,


                    touchenabled:"on",
                    swipe_velocity:"0.7",
                    swipe_max_touches:"1",
                    swipe_min_touches:"1",
                    drag_block_vertical:"false",

                    stopAtSlide:-1,
                    stopAfterLoops:-1,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    hideSliderAtLimit:0,

                    dottedOverlay:"none",

                    fullWidth:"on",
                    forceFullWidth:"off",
                    fullScreen:"off",
                    fullScreenOffsetContainer:"#topheader-to-offset",

                    shadow:0

                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider_main').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        </script>
        <!--News Section-->
        <script type="text/javascript">
            $(function () {
                $(".demo1").bootstrapNews({
                    newsPerPage: 3,
                    autoplay: true,
                    pauseOnHover:true,
                    direction: 'up',
                    newsTickerInterval: 1000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });

                $(".demo2").bootstrapNews({
                    newsPerPage: 3,
                    autoplay: true,
                    pauseOnHover: true,
                    navigation: true,
                    direction: 'down',
                    newsTickerInterval: 500,
                    onToDo: function () {
                        //console.log(this);
                    }
                });

                $("#noticeBoard").bootstrapNews({
                    newsPerPage: 3,
                    autoplay: true,
                    direction: 'up',
                    newsTickerInterval: 1000,
                    onToDo: function () {
                        //console.log(this);
                    }
                });
            });
        </script>
    </body>
</html>