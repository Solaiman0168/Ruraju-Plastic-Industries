<!DOCTYPE HTML>
<html>

<head>
    <title>Ruraju Plastic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });

            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    <!-- end menu -->
    <!-- top scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1200);
            });
        });
    </script>
</head>

<body>
    <div class="header-top">
        <div class="wrap">
            <div class="logo">
                <a href="index.php"><img src="images/logo5.png" class="img-responsive" alt="" /></a>
            </div>

            <div class="cssmenu">
			   <ul>
				 <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li> 
				 <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li> 
				 <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li> 
				 <li><a href="https://www.google.com/"><i class="fa fa-google"></i></a></li> 
			   </ul>
		    </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap">
            <!-- start header menu -->
            <ul class="megamenu skyblue">
               <li class="active grid"><a class="color4" href="index.php">Home</a>
			<li class="active grid"><a class="color4" href="about_us.php">About Us</a>
				
  			   <li class="active grid"><a class="color4" href="#">Products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>RURAJU BESTWARE</h4>
								<ul>
									<li><a href="chair_sereis.php">Chair Series</a></li>
									<li><a href="table_series.php">Table Sereis</a></li>
									<li><a href="tool_series.php">Tools Series</a></li>
									<li><a href="steel_series.php">Steel Bed Series</a></li>
									<li><a href="kids_series.php">Kids Series</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>HOME FURNITURE</h4>
								<ul>
									<li><a href="bed_series.php">Bed series</a></li>
									<li><a href="almirah.php">Almirah</a></li>
									<li><a href="showcase_dressing.php">Showcase&Dressing Table</a></li>
									<li><a href="chest_of_drawer.php">Chest of Drawer</a></li>
									<li><a href="dining.php">Dining</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>OFFICE FURNITURE</h4>
								<ul>
									<li><a href="chair_sereis.php">Chair Series</a></li>
									<li><a href="chair_sereis.php">Table Series</a></li>
									<li><a href="chair_sereis.php">Conference Table</a></li>
									<li><a href="chair_sereis.php">Sofa</a></li>
									<li><a href="chair_sereis.php">Accessories</a></li>
									
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>HOSPITAL FURNITURE</h4>
								<ul>
									<li><a href="chair_sereis.php">Bed Series</a></li>
									<li><a href="chair_sereis.php">Chair&Tools Series</a></li>
									<li><a href="chair_sereis.php">Trolley</a></li>
									<li><a href="chair_sereis.php">Accessories</a></li>
									
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>INDUSTRIAL PRODUCT</h4>
								<ul>
									<li><a href="chair_sereis.php">Chair</a></li>
									<li><a href="chair_sereis.php">Industry Rak</a></li>
									<li><a href="chair_sereis.php">Box</a></li>
									<li><a href="chair_sereis.php">Floor Mat</a></li>
									
								</ul>	
							</div>
						</div>

						<div class="col1">
							<div class="h_nav">
								<h4>LGED</h4>
								<ul>
									<li><a href="chair_sereis.php">Chair</a></li>
									<li><a href="chair_sereis.php">Table</a></li>
									<li><a href="chair_sereis.php">Bench</a></li>
									
								</ul>	
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					</div>
    			</li>				
				<li class="active grid"><a class="color4" href="#">Our Achievement</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>2015</h4>
								<ul>
									<li><a href="national_export_trophy.php">National Export Trophy</a></li>
									<li><a href="dhl_daily_star_award.php">DHL Daily Star Award</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>2016</h4>
								<ul>
									<li><a href="superbrands_award.php">Superbrands Award</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>2017</h4>
								<ul>
									<li><a href="national_productivity_award.php">National Productivity Award</a></li>
									
								</ul>	
							</div>												
						</div>
						
						<div class="col1">
						 <div class="h_nav">
						   <img src="images/nav_img1.jpg" alt=""/>
						 </div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
					</div>
    			</li>

            </ul>
            <div class="clear"></div>
        </div>
    </div>