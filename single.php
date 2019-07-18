<?php include 'header.php' ?>

    
       <div class="single">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
                   	  <h4>Occasion</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lorem</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ispum</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dolor</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lorem</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dolor</label>
						    </div>
						 </div>
                   	  <h4>Category</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lorem</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ispum</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dolor</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Amet</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Others</label>
						    </div>
						</div>
					 <h4>Styles</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Dolor</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Amet</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sit</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>ISpum</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Others</label>
						    </div>
						</div>
				</section>
		        
		</div>
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				     <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/t1.jpg" />
									<img class="etalage_source_image" src="images/t1.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t2.jpg" />
								<img class="etalage_source_image" src="images/t2.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t3.jpg" />
								<img class="etalage_source_image" src="images/t3.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t4.jpg" />
								<img class="etalage_source_image" src="images/t4.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t5.jpg" />
								<img class="etalage_source_image" src="images/t5.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/t6.jpg" />
								<img class="etalage_source_image" src="images/t6.jpg" />
							</li>
							
						</ul>
					
					
			<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">Series Chair</h3>
				<p class="m_desc">Color:</p>
				<p class="m_desc">Model No:</p>
    			<p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    			
                
			</div>
			<div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
			<li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Lorem</a><p></p></div></li>
			<li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Ipsum</a><p></p></div></li>
			<li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Lorem</a><p></p></div></li>
			<li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Ipsum</a><p></p></div></li>
			<li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Lorem</a><p></p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	 <div class="toogle">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>




	  <!--footer-->
        <div class="footer">
        	<!--footer top-->
       	   <div class="footer-top wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
		  <div class="row">	
			<div class="col-md-3 footer_top foot-left">
					<h3 style="color: #ddd; margin-bottom: 20px;">Get In Touch</h3>
					<p class="footer_para">Raju Plastic</p>
				
						<div class="contact-btm">
							<p class="footer_para"><span style="color: #ccc;" class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<span>Road#00, House#00</span><br/> &nbsp; &nbsp; <span>RDhaka-1216, Bangladesh</span></p>
						</div>
						<div class="contact-btm">
							<p class="footer_para"><span style="color: #ccc;" class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<span>For Support +880160000000</span></p>
						<div class="contact-btm">
						</div>
							<p class="footer_para"><span style="color: #ccc;" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<span>support@rajuplastic.com</span></p>
						</div>
						<div class="clearfix"></div>

			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 footer_top foot-left">
				
				<iframe class="link_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.841734665602!2d88.59984271433537!3d22.54760063957151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0208e6859488af%3A0xbf0c660908bd5ecd!2sRAJU+PLASTIC!5e0!3m2!1sen!2sbd!4v1513667538981" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

			<div class="col-md-3 footer_top foot-left">
				<h3 style="color: #ddd; margin-bottom: 20px;">Subscribe</h3>
				<p class="footer_para">Please subscribe to get all updates of our services.</p>
				<form action="#" method="post">	
					<input type="text" value="Your Email" name="email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Email';}">
					<input type="submit" value="Subscribe">
				</form>
			</div>
				<div class="clearfix"></div>
		   </div>		
		</div>
	</div>
<!-- /footer-top -->
       	 

       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>2018 © All rights reserved | <a href="">Renascence Software & Industrial Automation</a></p>
       	   </div>
       	 </div>
       </div>

       <!--//footer-->



       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>