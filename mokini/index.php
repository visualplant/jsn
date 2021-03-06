<?php $section="portfolio"; $page="mokini" ?>

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
					<div class="project-name">Mokini</div>
					<div class="headline opener">
						A <span  class="project-type">Web 3.0 platform</span>
						to organize <i>your</i> world's information.<a href=""></a>
						<div style="display:none;margin-top:6px;font-size:0.6em;font-weight:normal;line-height:1.3em;color:#999;">[*Google's mission, 1999: <i>to organize the world's information</i>.]</div>
					</div>

					<div class="opener-image" style="">
						<img src="/images/mokini/mokini-logo-card.png" alt="Mokini logo">
					</div>
				
				</div>
					
				<br clear="all"><br />

				<span style="float: left;font-size:2.3em;color:#bbb;align:bottom;" aria-hidden="true" data-icon="&#xe041;"></span>
				
				<div class="caption" style="float:left;margin-left: 10px;margin-top: 14px;">
					Produced and narrated by Jason Schmidt.
				</div>
			
				<div class="full-width-box">

					<!-- 
					<iframe width="274" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F33316982&amp;auto_play=false&amp;show_artwork=false&amp;color=00c9ff"></iframe>
					 -->

					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F33327638&amp;auto_play=false&amp;show_artwork=false&amp;color=00c9ff"></iframe>

				</div>

				<br clear="all"><br />


				<div class="text-cols body-text background-text">

					After founding <a href="/visualplant/">Visualplant</a>, I wanted to join forces with co-founders for my next 
					venture.
					
					<br /><br />
					
					At a networking event I met two students finishing up Master's degrees 
					in the MBA and Machine Learning programs at Stanford University. Together we debated ideas to pursue and presented to
					angel investors. We got accepted to a venture fellowship program sponsored by Lightspeed Venture Partners who
					provided us with funding and work space adjacent to their Sandhill headquarters. Here are the highlights.
					

				</div>

				
				<div class="text-head">Launch pad</div>
			
				<div class="text-cols body-text">
					
					College campuses are a dense microcosm of society. Diverse interest groups
					vie for attention and struggle to get their messages heard.
					
					In general, it's a great place to study how information flows and
					find opportunities to improve it.
					
					<br /><br />
					
					My co-founders and I conducted research at Stanford University and found that students and faculty use a myriad of modalities 
					to broadcast one-to-many messages:
					Web forums, Facebook, Twitter and to a great degree, old-school mailing lists. 
					Such real-time communication is spontaneous and intimate, but sadly the messages are either massively redundant or
					missed by many intended recipients and unsearchable. 
					
					I teamed up with a Machine Learning software developer to address 
					this problem. Stanford was a perfect place to conduct a pilot.

				</div>
				
				<div class="section-divider">&nbsp;</div>
				

				<div class="text-head">Cold start</div>

				<div class="text-cols body-text">
				
					How do you convince people to change the way they communicate? Offer better communication tools. 
					But if no one uses the tools, then they have no reach and <i>the tools are useless...</i>
					Therein lies the problem of the cold start. So, we began from a premise: don't expect users to change their
					habits.
					
					<br /><br />
					
					We first created a simple Web-based input to kickstart our data store with RSS feeds, Twitter accounts
					and email lists. We would promote the tool to students, but initially we used it 
					ourselves to curate a collection of trusted sources, carefully seeking permission from the publishers when necessary.
					Users did not need to change their communication habits; they could continue to use their usual 
					modalities to broadcast and 
					receive. But now, with the sources and content proxied to our platform,
					we began to capture the ephemeral chatter of exclusive interest groups.
		
					
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="full-width-box">

					<div class="headline" style="margin-top:20px;text-align:center;">
					Our platform captured the ephemeral chatter of<br />exclusive interest groups.
					</div>
					
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="full-width-box">
					
					<div class="caption">
						Fig 1: Users could add a myriad of source types &mdash; including RSS, Twitter and mailing lists &mdash; and vote to affect the trust index of each source. Users themselves were, in fact, sources with evolving influence.
					</div>
				
					<img src="/images/mokini/mokini-sources-new.png" alt="">
					
				</div>
				
				<br clear="all"><br />
				
				<div class="text-head">Evaluate sources</div>
				
				<div class="text-cols body-text">
					Once captured, our application evaluated the sources in depth. It tracked multiple reputation factors 
					and assigned a variable trust index to each.
					It then processed content from the sources and performed categorization, topic-modeling and ranking.
					Finally, it de-duped, prioritized and presented the content as trending topics and announcements &mdash; 
					all in near real-time. The results were stunningly helpful.

				</div>
				
				<br clear="all"><br />
				
				<div class="full-width-box">
				
					<img src="/images/mokini/philosophy.png" alt="">
				
					<br clear="all"><br /><br />
					
					<img src="/images/mokini/news.png" alt="">
	
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="full-width-box">

					<div class="headline" style="margin-top:20px;text-align:center;">
					As the platform gained traction,<br /> the community
					increasingly trusted it as their group hub.
					</div>
					
				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="full-width-box">
					
					<img src="/images/mokini/mokini-events-new.png" alt="">
					
					<br clear="all"><br /><br />
					
					<div class="caption">
						Fig 2: Users could create and follow public interest groups or apply to exclusive ones,
						while the platform suggested related groups.
					</div>
					
					<img src="/images/mokini/mokini-start.png" alt="">
					

				</div>
				
				<div class="section-divider">&nbsp;</div>
				
				<div class="text-cols-2 body-text">
					Mokini was developed over the course of 6 weeks at Lightspeed Venture Partners and unveiled at Stanford University in August of 2010.
					
					<br clear="all"><br />
					
					<div class="quote">
						<div class="quotation-mark"></div>
							[Mokini] is awesome and incredibly useful!
						<div class="quote-credit">&mdash;Taylor Savage, Stanford Student</div>
					</div>
					
					
				</div>

				
				<div class="credits-head">CREDITS</div>
				
				<div class="credits-box">

					<div class="threecol credits">
						<div class="roles">
							Co-founder / Product Designer
						</div>
						<div class="credit-name">Jason Schmidt</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Co-founder / Lead Software Developer
						</div>
						<div class="credit-name">Sid Batra</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Software Developer
						</div>
						<div class="credit-name">Deepak Rao</div>
					</div>
					
					<div class="twocol credits">
						<div class="roles">
							Co-founder / PR
						</div>
						<div class="credit-name">Beatrice Pang</div>
					</div>

				</div>
				
				
				<div class="full-width-box" style="text-align:center;margin-top:50px;margin-bottom:40px;">
					<a href="/visualplant/" class="case-study-button">next case study &raquo;</a>
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

</body>

</html>