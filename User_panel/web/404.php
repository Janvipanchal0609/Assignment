<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Inwardly Interior Category Bootstrap Responsive Website Template | 404 :: W3layouts</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Inwardly
 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
    <!--//web font-->

</head>

<body>
    <!-- banner -->
    <section class="banner-inner" id="home">
        <!-- header -->
       <?php
	   include_once('header.php');
	   ?>
        <!-- //header -->
        <!-- banner -->
        <div class="bs-slider-overlay-inner">
        </div>
    </section>
    <!-- //banner -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">404</li>
    </ol>
    <!-- error -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-4  py-3">
        <div class="container">
            <div class="inner-sec-wthreelayouts py-md-5 py-3">
                <div class="error-404">
                    <h4>404</h4>
                    <p>Oops ! Nothing to See here.</p>
                    <form action="#" method="post">
                        <input class="form-control" type="search" name="serch" placeholder="Search here" required="">
                        <button class="btn btn1">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
                        <div class="clearfix"> </div>
                    </form>
                    <div class="test_social_pos">
                        <ul class="social_list1">
                            <li>
                                <a href="#" class="facebook1">
														<i class="fab fa-facebook-f"></i>

													</a>
                            </li>
                            <li>
                                <a href="#" class="twitter2">
														<i class="fab fa-twitter"></i>

													</a>
                            </li>
                            <li>
                                <a href="#" class="dribble3">
														<i class="fab fa-dribbble"></i>
													</a>
                            </li>
                        </ul>
                    </div>
                    <a class="b-home btn" href="index.php">Back to Home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //error -->
    <!--/footer-->
    <?php
	   include_once('footer.php');
	?>
    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/search.js"></script>
    <!-- /dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- Smooth-Scrolling-JavaScript -->
    <script src="js/easing.js"></script>
    <script src="js/move-top.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //Smooth-Scrolling-JavaScript -->
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <!-- //Smooth-Scrolling-JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>