<?php $section="portfolio"; $page="traveal" ?>

<!doctype html>
<html lang="en">

<? include('includes/head.php') ?>

<body class="<?echo $section ?>">

<? include('includes/topbar.php') ?>

<div class="container animate-in">
	<div class="row">
	
		<? include('includes/subnav.php') ?>
		
		<div class="tencol last">
			<div class="box work">

				<div class="full-width-box">
					<div class="project-name">Traveal</div>
					<div class="headline opener">
						A simple <span style="color:#ff0099;">mobile app</span>
						to discover hotel deals and inspire impulse travel.
						
						<div class="background-button-container scrolllink">
							<span class="background-button" style="color: #ff0099;" aria-hidden="true" data-icon="&#xe030;"></span>
						</div>
					</div>
					

					<div class="opener-image">
						<div class="quote-small">
							<div class="quotation-mark"></div>
							I was blown away by Jason's ability to instinctually translate 
							business requirements into functional wireframes and elegant designs.
							<div class="quote-credit">Will Pinnel, DIR MOBILE STRATEGY<br />SABRE TRAVEL NETWORK</div>
						</div>
						<div class="quote-image">
							<img src="images/traveal/willpinnell.jpg" valign="top" width="100%" alt="">
						</div>
						
					</div>
				
				</div>
				
				
				<br clear="all"><br />
				
				
				<br clear="all"><br />

				
				<div class="full-width-box">
					<img src="images/traveal/traveal-combo.png" valign="top" width="100%" alt="">
				</div>
			
				
				<div class="section-divider" style="margin-top:0;">&nbsp;</div>
				
				<div class="text-head" id="section1">Background</div>
			
				<div class="text-cols body-text">
					
					Sabre Travel Network, best-known as the parent company of Travelocity.com, hired me to help their
					Mobile Strategy Group design a leisure travel mobile app. 
					
					The goal was to repurpose the company's travel inventory and 
					transaction API, to highlight transitory hotel deals, promote the hotel venues and make in-app reservations a breeze. 
					Sabre's Director of Mobile Strategy, provided impeccable direction 
					to catalyze creativity &mdash; simple, clear slides illustrating the product concept and top-level user
					experience.
					
					<img src="images/traveal/traveal-directive.jpg" class="text-image" alt="Sketch from Sabre"> 

				</div>
				
				<div class="section-divider" style="margin-bottom:40px;">&nbsp;</div>
				
				<div class="text-head">Sketches</div>

				<div class="text-cols body-text">
					

					Early design concepts usually should <i>not</i> be
				 	prematurely-polished which can stifle good ideas, make mediocre ideas look better than they really are and silence 
					team members understandably reticent to contribute to something that looks already complete. 
					Good ideas can come from anyone, so when team collaboration is important, I restrain visual chops
					until later. Sketching is a good way to inspire constructive discussion. 
					
					<br /><br />
					
					After some thought, I sketched the concept of a limited time offer by placing an animated, signature countdown timer anchored in the header of 
					every browse screen &mdash; a friendly, looming reminder.
					
					<br /><br />
					
					Sabre has a lot of hotel partners comprising tons inventory, and the temptation was to offer all of it at once. 
					When asked, users inevitably say they want more of everything, so why not give it to them? 
					Because too many options are paralyzing, and overwhelming 
					choice leads to fatigue and inaction. Instead, I proposed that we limit display to 8 current deals 
					from different cities, 
					enough for variety but not too much to absorb in a glance. A map view would provide for 
					browsing by location.
					
					
				</div>
				
				<br clear="all"><br />
				
				<div class="caption">Fig 1: Sketches: Very rough, very fast</div>
				<div class="text-cols-2 body-text">

					<img src="images/traveal/traveal-sketch.jpg" alt="Sketch"> 

					<img src="images/traveal/traveal-sketch-map.jpg" alt="Sketch">

				</div>

				<div class="section-divider" style="margin-top:20px;">&nbsp;</div>

				<div class="text-head">Specifications</div>
			
				<div class="text-cols body-text">
					After several iterations of sketches, presentations, note-taking and corrections, we reduced the features and screens to the bare
					minimum to support the experience. We had the outline of a minimum viable product encompassing a comfortable 6 screens. Final
					specs included the sketches with annotations, plus written documentation describing the user and system interactions.
					
					<br clear="all"><br /><br />
					
					<div style="font-size:6.6em;color:#999;" aria-hidden="true" data-icon="&#x2a;"></div>
					<div style="color:#999;font-size:0.8em;margin-left:14px;margin-top:2px;"><i>Confidential</i></div>
					
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">User Interface Design</div>
				
				<div class="text-cols body-text">
					With the specs and screenflow defined I could shift focus to the aesthetics of the UI. I kept it organized
					and familiar with an IOS-style grid, rounded corners and subtle depth, layering price-tag icons atop 
					hotel photos. I chose red for the background hue for two reasons: 
					1- it reflects urgency; 
					2- red is Sabre's corporate color. 
					
					While the color could become overbearing in app where users spend a lot of time,
					we wanted Traveal users to purchase quickly and exit. And when they didn't, the intensity of the interface
					was memorable &mdash; good for brand recall and impulsion to return later.
				</div>
				
				<br clear="all">
			
				<div class="full-width-box">
					<div class="caption">Fig 2: The primary screens, formatted for iPad</div>
					<div id="slideshow" class="flexslider loading">
          				<ul class="slides">
            				<li>
							<img src="images/traveal/Traveal-Deals.png" />
							</li>
							<li>
							<img src="images/traveal/Traveal-Hotels.png" />
							</li>
							<li>
							<img src="images/traveal/Traveal-Places.png" />
							</li>
							<li>
							<img src="images/traveal/Traveal-Choose-Dates.png" />
							</li>
							<li>
							<img src="images/traveal/Traveal-Splash.png" />
							</li>
					  	</ul>
					</div>
				
					
					
				</div>
				
				<br clear="all">
				
				<div class="text-head">Implementation</div>
				
				<div class="text-cols body-text">
					I always design for the medium and usually get involved in front-end implementation. I was a proponent of building 
					Traveal as a multi-platform HTML5 Web app. 
					A single code-base of Javascript, HTML and CSS 
					could be repurposed for
					any mobile platform, served to a Web browser and/or compiled to native apps for IOS, Android and Symbian. The PhoneGap
					API allows for access to all device functions required in this app, including geolocation.
				</div>
			
				
				<div class="credits-head">CREDITS</div>
				
				<div class="credits-box">

					<div class="threecol credits">
						<div class="roles">
							Product Designer
						</div>
						<div class="credit-name">Jason Schmidt</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Director
						</div>
						<div class="credit-name">Will Pinnel</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Project Manager
						</div>
						<div class="credit-name">Derek Peachey</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Eric Mansfield</div>
					</div>
					
				</div>
				
				<div class="full-width-box" style="text-align:center;margin-top:50px;margin-bottom:40px;">
					<a href="mokini.php" class="case-study-button">next case study &raquo;</a>
				</div>
				
			</div> <!-- /ninecol -->
		</div> <!-- /box work -->
		
	</div> <!-- /row -->
</div> <!-- /container -->


<? include('includes/footer.php') ?>

<!-- Flexslider -->
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: false, // start automatically?
        start: function(slider){
          $('#slideshow').removeClass('loading');
        }
      });
    });
</script>

</body>

</html>