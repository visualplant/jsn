<?php $section="portfolio"; $page="visualplant" ?>

<!doctype html>
<html lang="en">

<? include('../includes/head.php') ?>

<body class="<?echo $section ?>">

<? include('../includes/mobile-menu.php') ?>

<? include('../includes/topbar.php') ?>

<div class="container animate-in">
	<div class="row">
	
		<? include('../includes/subnav.php') ?>
		
		<div class="tencol last">
			<div class="box work">
				
				<div class="full-width-box">
					<div class="project-name">Visualplant <sup style="font-size: 12px;font-weight: normal;">tm</sup></div>
					<div class="headline opener">
						A <span  class="project-type">video platform</span>
						with customizable players and cloud-based content management that helped pioneer a new market.
						
						<div class="background-button-container scrolllink">
							<a href="http://visualplant.net" target="_blank" class="background-button" style="color: #ff0099;font-size: 1.0em;" title="visit: visualplant.net" aria-hidden="true" data-icon="&#x33;"></a>
						</div>
						
						<div style="display:none;padding:15px;color:#666;font-weight:normal;font-size:0.6em;background-color:#ffffcc;border:1px dotted #ffffcc;margin-right:40px;margin-top:20px;line-height:1.4em;">
						
							Over the years I progressed from working with big teams in large companies 
							to working with smaller teams in early-stage ventures. I found a 
							clarity of purpose and efficiency of implementation in small teams that often gets crushed by
							beaurocracy in larger entities. Too much money and too many cooks in the kitchen can
							kill a good idea.
							
							<br /><br />
							
							I decided that I wanted to start my own venture keeping it small and agile. So,
							in 2006 I started Visualplant. Here's a synopsis.
							
						</div>
						
						
						
					</div>

					<div class="opener-image visualplant">
						<img src="/images/visualplant/vp-logo.png" alt="VISUALPLANT logo">
					</div>
				
				</div>
				
				
				<br clear="all"><br />
				
				<div class="text-cols body-text background-text">

					In 2002 I was recruited by a magazine publisher to become the Design Director for their Internet division.
					They had just acquired the most popular video site on the Web and wanted to "integrate it."
					I worked with their editorial team to redesign the 
					site and create a new content management workflow specifically for video publishing. We relaunched in 
					60 days and turned it profitable 
					in the first year by catering to business users. I became intimately acquainted with the unique challenges of putting video
					on the Web.

				</div> 
				
				<div class="text-head">Problem</div>
			
				<div class="text-cols body-text">
					
					Most businesses had high-speed 
					Internet in 2002, 
					but Cable and DSL penetration for consumers was sparse.
					This combined with a lack of file standards and
					competing browser plugins made the consumer experience for video lousy.
					No single company could solve all the problems alone. Lack of content and poor quality 
					yielded low viewership causing publishers to misread
					the problem as one of disinterest which in turn discouraged technologists from tackling the space.	
					But like text and audio before, video would inevitably come of age.
					Someone needed to take  
					the initiative to innovate the publishing tools, 
					to create a "Wordpress for video" at the opportune moment when the market was ready for it.
					
					<img src="/images/visualplant/codec-soup.png" class="text-image" alt="Video codec craziness!"> 
		
				</div>
				
				<div class="section-divider" style="margin-bottom:20px;">&nbsp;</div>
				
				<div style="text-align:center;color:#666;">
					<span class="break-head">2006: The year of Net video</span>
				</div>
				
				<div class="section-divider" style="margin-top:20px;">&nbsp;</div>
				
				
				<div class="text-head">Market timing</div>
			
				<div class="text-cols body-text">
					By 2006 video codecs like Sorenson had matured enough to achieve decent quality and reduced file size. Macromedia's Flash 
					plug-in provided the right blend of browser independence and player interactivity. High bandwidth penetration for 
					consumers finally surpassed 50%. 
					
					I gambled Web video was finally poised to take off. Perhaps, it was wishful thinking and a little luck.
					I left my full-time job to bootstrap a video-as-a-service (VAAS) platform. My former employer became 
					my first client, and my new company, Visualplant, was profitable in the first year.
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">Approach</div>
			
				<div class="text-cols body-text">
					Every product follows a unique path, but those with any success share at least one thing in common: they launch fast. 
					It was less than 30 days from my first design comp to when I launched Visualplant 
					to over 1 million users in its beta debut.
					<br /><br />
					How did I build one of the first ever scalable Web video services in a month? The honest answer is I didn't. 
					I created a video player that consumed manually-encoded files.
					Ironically, I put most of my 
					first efforts into designing a player when players already cluttered the market. Why?
					
					Because I needed to excite my potential clients on the look of the future, and I didn't have the time or money to build the plumbing just 
					yet. I showed them a newly-designed, custom-branded, fullscreen video player with auto-playback playlists
					and offered to serve their biggest viewing 
					event of the year for free. They loved the interface, the quality and the no risk proposal, so they took me up on it. 
					
					<div class="quote">
						<div class="quotation-mark"></div>
							Get customers, not investors.
						<div class="quote-credit">&mdash;TIM O'REILLY</div>
					</div>
					
				</div>
				
				<br clear="all"><br />

				<div class="full-width-box">
					
					<div class="caption">
						Fig 1: Visualplant Web Player combining video, audio, images, captions and targetted advertising.
					</div>
					
					<div id="slideshow" class="flexslider loading">
          				<ul class="slides">
            				<li>
							<img src="/images/visualplant/player.jpg" />
							</li>
							<li>
							<img src="/images/visualplant/player-fullscreen.jpg" />
							</li>
					  	</ul>
					</div>
				
					
				</div>
				
				<br clear="all">
				
				<div class="text-cols body-text">
				
					The demo earned me the clout to request 
					a follow-up sales meeting. I presented with the tact, "if you like the video player, then get a load of the platform 
					behind the scenes."
					I came with design mockups of the dashboard and 
					<span style="font-style:italic">convinced my first client to sign an agreement to pay for a platform that did not yet exist</span>.
	
					While the agreement was in legal, I assembled a small team from my network to begin engineering.
					The most critical tools, including the uploader/encoder, title manager and impression reporting came first.
					
					<div class="quote">
						<div class="quotation-mark"></div>
							Design first, then code.
						<div class="quote-credit">&mdash;i.e., think before you act</div>
					</div>
				
				</div>
				
				<br clear="all"><br />
				
				<div class="full-width-box">
				
					<div class="caption">Fig 2: Title Manager</div>
					<img src="/images/visualplant/library.png" width="100%" alt="">
					
					<br clear="all"><br />
				
					<div class="caption">Fig 3: Custom reporting tool</div>
					<img src="/images/visualplant/impressionreporting.png" width="100%" alt="">
				
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">Traction</div>
		
				<div class="text-cols body-text">
					
					With the income to develop and the traffic to attract more clients, we did both. 
					Releasing new features almost weekly, within three months we had developed a multi-tier, dynamically scalable 
					platform with two primary interfaces: a web services API
					for developers and a WYSIWYG templating engine for non-technical publishers.
					I designed each tool on the micro-level, writing
					pseudo-code to describe every user and system interaction,
					and I diagrammed a meta-view of the platform allowing my programmers
					to see the forest through the trees and for my clients to appreciate what they were
					paying for.
					
					<div class="headline" style="margin-top:20px;">
						Software design, documentation and marketing interwoven:
					</div>
					
				</div>
				
				<br clear="all">
				
				<div class="full-width-box">
					<img src="/images/visualplant/vp-diagram.png" width="100%" alt="">
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-head">Lesson</div>
			
				<div class="text-cols body-text">
					Creating Visualplant taught me more than ever that design is an iterative task. Much more than polishing 
					a user interface or perfecting code for a final release, it is choosing the right time to pursue the right product 
					and using design 
					to inspire belief in a mission. The team, investors, clients, press and users 
					all need to be engaged immediately and continually. 
					
					In the past I focused on the minutiae of product design from 
					set-go, but I learned to invest perfectionism in the long term vision that gets realized over many months 
					and often years. Today my design method encompasses a collaboration between me and everyone who 
					touches the product. That does <i>not</i> mean "design by committee." 
					Rather, I create 
					a vision of what to build, design in phases and observe how users respond to each release. 
					Course adjustments and sometimes pivots are essential to designing something great. Because nothing can 
					be called great until it proves itself in action.
				</div>
				
			
				
				<div class="credits-head">CREDITS</div>
				
				<div class="credits-box">

					<div class="threecol credits">
						<div class="roles">
							Founder / Director / Product Designer
						</div>
						<div class="credit-name">Jason Schmidt</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Senior Software Developer
						</div>
						<div class="credit-name">Matthew Rice</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Vitaliy Heleznov</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Vadim Zacez</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">David Lafferty</div>
					</div>
					
				</div>
				
				<div class="credits-box credits-box-2">

					<div class="threecol credits">
						<div class="roles">
							Legal Counsel
						</div>
						<div class="credit-name">Amy Laub</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Brian Brandes</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Ryan Provost</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Sales Engineer
						</div>
						<div class="credit-name">Craig Miller</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Technical Consultant
						</div>
						<div class="credit-name">Chris Mollis</div>
					</div>
					
				</div>
				
				<div class="full-width-box" style="text-align:center;margin-top:50px;margin-bottom:40px;">
					<a href="/traveal/" class="case-study-button">next case study &raquo;</a>
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="full-width-box">
					
					<? include('../includes/more-projects.php') ?>
					
					<br clear="all" /><br />
					
				</div>
				
			</div> <!-- /ninecol -->
		</div> <!-- /box work -->
		
	</div> <!-- /row -->
</div> <!-- /container -->

<? include('../includes/footer.php') ?>

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