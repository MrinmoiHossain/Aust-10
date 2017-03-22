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
        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!--Calender JavaScript-->
        <script type="text/javascript" src="js/moment.latest.min.js"></script>
        <script type="text/javascript" src="js/pignose.calendar.js"></script>
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
        <script type="text/javascript">
            $(function() {
                $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.ComponentVersion);
                function onClickHandler(date, obj) {
                    /**
                     * @date is an array which be included dates(clicked date at first index)
                     * @obj is an object which stored calendar interal data.
                     * @obj.calendar is an element reference.
                     * @obj.storage.activeDates is all toggled data, If you use toggle type calendar.
                     * @obj.storage.events is all events associated to this date
                     */

                    var $calendar = obj.calendar;
                    var $box = $calendar.parent().siblings('.box').show();
                    var text = 'You choose date ';

                    if(date[0] !== null) {
                        text += date[0].format('YYYY-MM-DD');
                    }

                    if(date[0] !== null && date[1] !== null) {
                        text += ' ~ ';
                    } else if(date[0] === null && date[1] == null) {
                        text += 'nothing';
                    }

                    if(date[1] !== null) {
                        text += date[1].format('YYYY-MM-DD');
                    }

                    $box.text(text);
                }

                // Default Calendar
                $('.calendar').pignoseCalendar({
                    select: onClickHandler
                });

                // Input Calendar
                $('.input-calendar').pignoseCalendar({
                    buttons: true, // It means you can give bottom button controller to the modal which be opened when you click.
                });

                // Calendar modal
                var $btn = $('.btn-calendar').pignoseCalendar({
                    modal: true, // It means modal will be showed when you click the target button.
                    buttons: true,
                    apply: function(date) {
                        console.log($btn);
                        $btn.next().show().text('You applied date ' + date + '.');
                    }
                });

                // Color theme type Calendar
                $('.calendar-dark').pignoseCalendar({
                    theme: 'dark', // light, dark, blue
                    select: onClickHandler
                });

                // Blue theme type Calendar
                $('.calendar-blue').pignoseCalendar({
                    theme: 'blue', // light, dark, blue
                    select: onClickHandler
                });

                // Schedule Calendar
                $('.calendar-schedules').pignoseCalendar({
                    scheduleOptions: {
                        colors: {
                            holiday: '#2fabb7',
                            seminar: '#5c6270',
                            meetup:  '#ef8080'
                        }
                    },
                    schedules: [{
                        name: 'holiday',
                        date: '2017-02-08'
                    }, {
                        name: 'holiday',
                        date: '2017-02-16'
                    }, {
                        name: 'holiday',
                        date: '2017-03-01',
                    }, {
                        name: 'holiday',
                        date: '2017-03-05'
                    }, {
                        name: 'holiday',
                        date: '2017-03-18',
                    }, {
                        name: 'seminar',
                        date: '2017-02-14'
                    }, {
                        name: 'seminar',
                        date: '2017-03-01',
                    }, {
                        name: 'meetup',
                        date: '2017-02-16'
                    }, {
                        name: 'meetup',
                        date: '2017-03-01',
                    }, {
                        name: 'meetup',
                        date: '2017-03-18'
                    }, {
                        name: 'meetup',
                        date: '2017-04-04',
                    }, {
                        name: 'meetup',
                        date: '2017-05-01'
                    }, {
                        name: 'meetup',
                        date: '2017-06-19',
                    }],
                });

                // Multiple picker type Calendar
                $('.multi-select-calendar').pignoseCalendar({
                    multiple: true,
                    select: onClickHandler
                });

                // Disabled date settings.
                !(function() {
                    // IIFE Closure
                    var times = 30;
                    var disabledDates = [];
                    for(var i=0; i<times; /* Do not increase index */) {
                        var year = moment().year();
                        var month = 0;
                        var day = parseInt(Math.random() * 364 + 1);
                        var date = moment().year(year).month(month).date(day).format('YYYY-MM-DD');
                        if($.inArray(date, disabledDates) === -1) {
                            disabledDates.push(date);
                            i++;
                        }
                    }

                    disabledDates.sort();

                    var $dates = $('.disabled-dates-calendar').siblings('.guide').find('.guide-dates');
                    for (var idx in disabledDates) {
                        $dates.append('<span>' + disabledDates[idx] + '</span>');
                    }

                    $('.disabled-dates-calendar').pignoseCalendar({
                        select: onClickHandler,
                        disabledDates: disabledDates
                    });
                } ());

                // Disabled Weekdays Calendar.
                $('.disabled-weekdays-calendar').pignoseCalendar({
                    select: onClickHandler,
                    disabledWeekdays: [0, 6]
                });

                // Disabled Range Calendar.
                var minDate = moment().set('dates', Math.min(moment().day(), 2 + 1)).format('YYYY-MM-DD');
                var maxDate = moment().set('dates', Math.max(moment().day(), 24 + 1)).format('YYYY-MM-DD');
                $('.disabled-range-calendar').pignoseCalendar({
                    select: onClickHandler,
                    minDate: minDate,
                    maxDate: maxDate
                });

                // Multiple Week Select
                $('.pick-weeks-calendar').pignoseCalendar({
                    pickWeeks: true,
                    multiple: true,
                    select: onClickHandler
                });

                // Disabled Ranges Calendar.
                $('.disabled-ranges-calendar').pignoseCalendar({
                    select: onClickHandler,
                    disabledRanges: [
                        ['2016-10-05', '2016-10-21'],
                        ['2016-11-01', '2016-11-07'],
                        ['2016-11-19', '2016-11-21'],
                        ['2016-12-05', '2016-12-08'],
                        ['2016-12-17', '2016-12-18'],
                        ['2016-12-29', '2016-12-30'],
                        ['2017-01-10', '2017-01-20'],
                        ['2017-02-10', '2017-04-11'],
                        ['2017-07-04', '2017-07-09'],
                        ['2017-12-01', '2017-12-25'],
                        ['2018-02-10', '2018-02-26'],
                        ['2018-05-10', '2018-09-17'],
                    ]
                });

                // I18N Calendar
                $('.language-calendar').each(function() {
                    var $this = $(this);
                    var lang = $this.data('lang');
                    $this.pignoseCalendar({
                        lang: lang
                    });
                });

                // This use for DEMO page tab component.
                $('.menu .item').tab();
            });
        </script>
    </body>
</html>