<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Inwardly Interior Category Bootstrap Responsive Website Template | Gallery :: W3layouts</title>

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
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
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
        <li class="breadcrumb-item active">signup</li>
    </ol>
    <!-- contact -->
    <section class="banner-bottom-w3ls pt-lg-12 pt-md-12 pt-12">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
            <h2 class="tittle text-center mb-md-12 mb-4">signup</h2>
               <div class="container">
                  <div class="address row mb-5">
                     <div class="col-lg-12 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-12 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
            <form action="" method="post">
			<div class="form-group">
				<label for="name" class="form-label">Name:</label>
				<input type="text" class="form-control" name="name" placeholder="Enter name" >
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
			</div>
			<div class="mb-3">
				<label for="Password" class="form-label">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
			</div>
			<div class="mb-3">
				<label for="gender" class="form-label">Gender:</label><br>
				<tr>
                <td><input type="radio" name="gender" value="male">Male
				    <input type="radio" name="gender" value="female">Female</td>
                </tr>
			</div>
			<div class="mb-3">
				<label for="languages" class="form-label">Languages:</label><br>
				<td>
					Hindi:<input type="checkbox" name="languages[]" value="Hindi">
					English:<input type="checkbox" name="languages[]" value="English">
					Gujarati:<input type="checkbox" name="languages[]" value="Gujarati">
				</td>
			</div>
			<div class="form-group ">
                <label for="inputState">Country</label>
                <select id="inputState" name="cid" class="form-control">
                  <option value="">Select Country</option>
				  <?php
				  if(!empty($countries_arr))
				  {
					  foreach($countries_arr as $c)
					  {
						?>  
						<option value="<?php echo $c->cid?>"><?php echo $c->cnm?></option>
						<?php  
					  }
				  }
				  ?>
				</select>
			</div>
            <div class="mb-3">
				<label for="file" class="form-label">Image:</label>
				<input type="file" class="form-control" id="num" name="file"  placeholder="Mobile Number ">
			</div> 
			<div class="form-check mb-3">
				<label class="form-check-label"></label>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
			<a class="float-left" href="login">If you allready Register then click Login</a>
		</form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //contact -->
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
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html>
