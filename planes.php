<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gimnasio Fitness</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/tms-0.3.js"></script>
        <script src="js/tms_presets.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/Asap_400.font.js"></script>
        <script src="js/Coolvetica_400.font.js"></script>
        <script src="js/Kozuka_M_500.font.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/FF-cash.js"></script>
        <script>
            $(window).load(function () {
                $('.slider')._TMS({
                    prevBu: '.prev',
                    nextBu: '.next',
                    pauseOnHover: true,
                    pagNums: false,
                    duration: 800,
                    easing: 'easeOutQuad',
                    preset: 'Fade',
                    slideshow: 7000,
                    pagination: '.pagination',
                    waitBannerAnimation: false,
                    banners: 'fade'
                })
            })
        </script>
        <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
        <!--[if lt IE 9]>
                    <script type="text/javascript" src="js/html5.js"></script>
            <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
            <![endif]-->
    </head>
    <body>
        <div class="main">
            <div class="bg-img"></div>
            <!--==============================header=================================-->
           <?php include("includes/menu.php"); ?>  
            <!--==============================content================================-->
            <section id="content"><div class="ic"></div>
                <div class="container_12">
                    <div class="grid_12">
                        <div class="slider">
                            <ul class="items">
                                <li><img src="images/slider-1.jpg" alt="">
                                    <div class="banner">
                                        <p class="font-1">Special<span>Program</span></p>
                                        <p class="font-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </li>
                                <li><img src="images/slider-2.jpg" alt="">
                                    <div class="banner">
                                        <p class="font-1">Get Free<span>Training</span></p>
                                        <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </li>
                                <li><img src="images/slider-3.jpg" alt="">
                                    <div class="banner">
                                        <p class="font-1">Join<span>our team</span></p>
                                        <p class="font-2">Liquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="pagination">
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                    <div class="grid_12 top-1">
                        <div class="block-1 box-shadow">
                            <p class="font-3">Gimnasio Fitness is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank" class="color-1">free website templates</a> created by TemplateMonster. This website template is optimized for 1280X1024 screen resolution. This <a href="http://blog.templatemonster.com/2012/04/02/free-website-template-jquery-slider-fitness-club/" class="color-1">Fitness Club Template</a> goes with 2 packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com.</p>
                        </div>
                    </div>
                    <div class="grid_12 top-1">
                        <div class="box-shadow">
                            <div class="wrap block-2">
                                <div class="col-1">
                                    <h2 class="p3"><span class="color-1">Latest</span> events</h2>
                                    <div class="wrap box-1">
                                        <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                                        <div class="extra-wrap">
                                            <p class="p2"><strong>Ut wisi enim ad minim veniamis nostrud</strong> </p>
                                            <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                                        </div>
                                    </div>
                                    <div class="wrap box-1 top-2">
                                        <img src="images/page1-img2.jpg" alt="" class="img-border img-indent">
                                        <div class="extra-wrap">
                                            <p><strong>Duis autem vel eum iriure dolor</strong></p>
                                            <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilis lorem ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <h2 class="p3"><span class="color-1">Services</span> list</h2>
                                    <ul class="list-1">
                                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                        <li><a href="#">Consetetur sadipscing elitr sed</a></li>
                                        <li><a href="#">Diam nonumy eirmod tempor</a></li>
                                        <li><a href="#">Invidunt ut labore dolore</a></li>
                                        <li><a href="#">Magna aliquyam erat sed</a></li>
                                    </ul>
                                    <div class="form-search">
                                        <h2><span class="color-1">Find us</span> near you</h2>
                                        <form id="form-search" method="post">
                                            <input type="text" value="Enter your Zip" onBlur="if (this.value == '')
                                                                this.value = 'Enter your Zip'" onFocus="if (this.value == 'Enter your Zip')
                                                                            this.value = ''"  />
                                            <a href="#" onClick="document.getElementById('form-search').submit()" class="search_button">Search</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </section> 
            <!--==============================footer=================================-->
            <footer>
                <p>© 2015 Gimnasio Fitness</p>
            </footer>	
        </div>    
        <script>
            //Permite sustituir la fuente predeterminada de tu web por otra cualquiera
            Cufon.now();
        </script>
    </body>
</html>