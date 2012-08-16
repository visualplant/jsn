<?php $page="portfolio" ?>

<!doctype html>
<html lang="en">

<? include('includes/head.php') ?>


<body>

<? include('includes/topbar.php') ?>

<div class="container">
	<div class="row">
	
		<div class="threecol">
			<div class="box project">
				<div class="name">Traveal:</div>
				<div class="tagline">
					<b>Sabre Travel Network</b>
				</div>
				
				<div class="back">
					<br clear="all"><br />
					<a href="javascript:history.go(-1)" class="back-button">back</a>
				</div>
				
			</div>
		</div>
		
		<div class="ninecol last">
			<div class="box work">
				
				<div class="row opener-row">
					<div class="sixcol opener">
						A simple <span style="color:#999;">tablet app</span>
						to discover hotel deals and inspire impulse travel.
					</div>
					
					<div class="fourcol">
						<div class="quote-small">
							<div class="quotation-mark"></div>
							I was blown away by Jason's ability to instinctually translate 
							business requirements into functional wireframes and elegant designs.
							<div class="quote-credit">Will Pinnel, DIR MOBILE STRATEGY<br />SABRE TRAVEL NETWORK</div>
						</div>
					</div>
					
					<div class="twocol last quote-image" style="margin-top:8px;margin-left:-40px;">
						<img src="images/traveal/willpinnell.jpg" valign="top" width="100%" alt="">
					</div>
					
				</div>
		
				
				
				<!-- 
				<div class="byline">
					How I did it &mdash; 
					<span class="byline-name">by Jason Schmidt</span>
				</div>
 				-->
				
				
				<br clear="all"><br />

				
				<div class="full-width-box">
					<img src="images/traveal/traveal-combo.png" valign="top" width="100%" alt="">
				</div>
				
				
				
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">Assignment</div>
			
				<div class="text-cols body-text">
					
					Sabre Travel Network, well-known as the parent company of Travelocity.com, hired me to help their
					Mobile Strategy Group repurpose the company's huge travel inventory and 
					powerful transaction technology by designing a proof-of-concept for
					a leisure tablet app. 
					
					The assignment was to highlight transitory hotel deals, promote the hotel venues and make reservations a breeze. 
					Will Pinnel, Sabre's Director of Mobile Strategy, provided impeccable direction 
					to catalyze creativity &mdash; simple, clear slides illustrating the business requirements.
					
					<img src="images/traveal/traveal-directive.png" class="text-image" alt="Sketch from Sabre"> 

				</div>
				
				<div class="section-divider" style="margin-bottom:20px;">&nbsp;</div>
				
				<div class="text-head">Sketches</div>
				
				<div class="text-cols-2 body-text">
					
					<img src="images/traveal/traveal-sketch.jpg" alt="Sketch"> 
					
					<img src="images/traveal/traveal-sketch-map.jpg" alt="Sketch"> 
					
				</div>
				
				<div class="text-cols body-text">
					I love to brainstorm with the team, and simple sketches are a great way to guide the discussion.
					
					It's a myth that every design deliverable must look visually stunning. To the contrary, prematurely polished designs
					can stifle good ideas, because they make mediocre ideas look better than they really are, and less visually-competent 
					team members can become intimidated and reticent to contribute. Because good ideas can come from anyone, I restrain visual chops
					until later. I first presented crudely-drawn sketches to the Sabre team. 
					<br /><br />
					I suggested that we stress the limited time offer by placing an animated, signature countdown timer anchored in the header of 
					every browse screen
					&mdash; a friendly, looming reminder. All agreed.
					<br /><br />
					Sabre has a lot of hotel partners and tons of inventory, and although users will tell you otherwise if you ask them, 
					unlimited choice makes for frustrating user experience. Psychology knows that overwhelming 
					options lead to user fatigue and inaction. So, I proposed that we limit the inventory to just 8 daily deals, enough for variety
					but not too much to absorb in a single glance. More agreement.
					
					
				</div>

				<div class="section-divider" style="margin-top:20px;">&nbsp;</div>

				<div class="text-head">Specifications</div>
			
				<div class="text-cols body-text">
					After several iterations of sketches, presentations, note-taking and corrections, we had reduced the features and screens to the bare
					minimum to support the experience. We had the outline of a minimum viable product encompassing a comfortable 6 screens. Final
					specs included the sketches with annotations, plus written documentation describing the user and system interactions.
					
					<img src="images/traveal/TechSpecsIcon.png" class="text-image" alt="">
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">User Interface Design</div>
				
				<div class="text-cols body-text">
					Once the screens were defined, I could focus strictly on the aesthetics of the UI. I kept it organized and familiar 
					with rounded corners and subtle depth derived from an IOS-style grid, layering price-tag icons on top of hotel photos. I chose bright red
					for the background hue for two reasons: 1- red reflects urgency and, in finance, loss without action; 2- red is Sabre's corporate color. 
					The loud color scheme was abated by the simple fact that this app was never intended for long session use. 
					A user would purchase quickly or exit, and the interface would be instantly imprinted on her visual cortex &mdash; 
					good for brand recall and impulsion to return.
				</div>
				
				<br clear="all">
			
				<div class="full-width-box">
				
					<img src="images/traveal/Traveal-Deals.png" alt="">
					
					<br clear="all"><br />
					
					<img src="images/traveal/Traveal-Hotels.png" alt="">
					
					<br clear="all"><br />
					
					<img src="images/traveal/Traveal-Places.png" alt="">
					
					<br clear="all"><br />
					
					<img src="images/traveal/Traveal-Choose-Dates.png" alt="">
					
					<br clear="all"><br />
					
					<img src="images/traveal/Traveal-Splash.png" alt="">
					
				</div>
				
				<br clear="all">
				
				<div class="text-head">Implementation</div>
				
				<div class="text-cols body-text">
					I was a vocal proponent of implementing Traveal as a multi-platform HTML5 Web app. A single code-base of Javascript, HTML and CSS 
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



</body>

</html>