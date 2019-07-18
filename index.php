<!DOCTYPE HTML>
<html>
<head>
<title>Ruraju Plastic</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet"/> 
<!--font-awesome css-->
<link rel="stylesheet" href="css/font-awesome.css"/>

<!--new-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="css/carousel.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
<!--//new-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!--new-->
       <script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>
		<!--//new-->



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
                if (! $clicked.parents().hasClass("dropdown"))
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
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
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

    		

    
       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			  <div class="wmuSliderWrapper">
				  <article style="position: relative; width: 100%; opacity: 1;"> 
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner1.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic Table</h1>
						    <h4>To Decorate Office</h4>
						    
						 </div>
						 <div class="clear"></div>
					 </div>
					</article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner3.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Almirah</h1>
						    <h4>To Decorate Your Room</h4>
						    
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner2.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Series Chair</h1>
						    <h4>To Decorate Outside Of Office</h4>
						    
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	<div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner4.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic Chair</h1>						    
						    <h4>To Decorate Your Office</h4>
						    
						 </div>
						 <div class="clear"></div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
					   	<div class="slider-left">
							<img src="images/banner1.jpg" alt=""/> 
						</div>
						 <div class="slider-right">
						    <h1>Classic Table</h1>
						    <h4>To Decorate Office</h4>
						    
						 </div>
						 <div class="clear"></div>
					 </div>
			      </article>
				</div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				
 						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
             </div>


             <div class="container">
             	<div class="row">
		        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
				        <div class="product_information" >
							<center><p>Feature Products</p></center>
						</div>
					</div>
				</div>
			</div>


             <div class="main">
                <div class="wrap">
             	  <div class="content-top">
             		
					
					  <div class="clear"></div>			
				   </div>
				  <div class="content-bottom">
				   <div class="box1">
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Series Chair</h3>
					  	<p class="m_2">To Decorate Outside Of Office</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Box</h3>
					  	<p class="m_2">To Decorate Your Room</p>
					    <div class="grid_img">
						   <div class="css3"><img src="images/pic1.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Classic Table</h3>
					  	<p class="m_2">To Decorate Your Office</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic2.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				  <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Tool</h3>
					  	<p class="m_2">To Use Numeric Place</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic3.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Classic Table</h3>
					  	<p class="m_2">To Decorate Office</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic4.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				   <div class="col_1_of_3 span_1_of_3"><a href="single.html">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1">Big Chair</h3>
					  	<p class="m_2">To Use Many Place</p>
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic5.jpg" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       
					   </div>
					    </div>
					   
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			    </div>
			  </div>
			 </div>
        </div>

       <!--why raju plastic-->
        <div class="container">
        	<div class="row">
	        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
			        <div class= "why_raju" >
						<center><p>Why Ruraju Plastic?</p></center>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		    <div class="raju_plastic_details">
				<p><b>Ruraju Plastic</b> is a professional trade company of Plastic raw materials. Since the establishment, we have been adhering to the “Service First” management concept. Our mission is to earn our reputation as a trusted partner globally while delivering value to our Customers and Suppliers and our vision is to be our Customer’s and our Supplier’s preferred trading partner to excel in the services we provide and strive for excellence to opRaju Plasticte with integrity, customer focus, flexibility and creativity.</p>
			</div>
            <div class="our_values">
				<div class="values_quality">

				<div class="row">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	    				<h4><b>Our Culture & People</b></h4>
	    				<ul>
	    					<li>Focus on the market and need of customers</li>
	    					<li>Posess an open world view</li>
	    					<li>Act with urgency</li>
	    					<li>Remain responsive to change</li>
	    					<li>Work efficiently</li>
	    					<li>Focus on the advertising to get more customers</li>
	    					<li>Be accountable for your actions & inactions.</li>
	    					<li>Inspire creativity, passion, optimism & fun</li>
	    				</ul>
	    			</div>


	    			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	    				<h4><b>Our Values</b></h4>
	    				<p>We have the courage to shape a better future by</p>
	    				<ul>
	    					<li>Efficiency</li>
	    					<li>Reliability</li>
	    					<li>Accountability</li>
	    					<li>Integrity</li>
	    					<li>Passion and</li>
	    					<li>expertise.</li>
	    				</ul>
	    			</div>
	    		</div>	
	
	    			
	    		</div>
			

			</div>
		</div>

		<!--//why raju plastic-->

<!--Our Happy Clients-->


		<div class="container">
        	<div class="row">
	        	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-md-offset-4">
			        <div class= "our_happy" >
						<center><p>Our Happy Clients</p></center>
					</div>
				</div>
			</div>
		</div>


	<div class="happy_clients">
		<div class="container">
			<section class="customer-logos slider">
				<div class="slide"><img src="images/images11.png"></div>
				<div class="slide"><img src="images/images12.png"></div>
				<div class="slide"><img src="images/images13.png"></div>
				<div class="slide"><img src="images/images14.png"></div>
				<div class="slide"><img src="images/images15.png"></div>
				<div class="slide"><img src="images/images16.png"></div>
				<div class="slide"><img src="images/images17.png"></div>
				<div class="slide"><img src="images/images18.png"></div>
			</section>
		</div>
	</div>

		


     <?php include 'footer.php' ?>