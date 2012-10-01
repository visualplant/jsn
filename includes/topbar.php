<div class="header clearfix">
	
	<div class="top-logo"><a href="javascript:window.location = '/alias/'">alias</a></div>
	
	<div class="nav">
		<ul class="menu" style="clear: both;">
			
			<!-- shows for desktop -->
			<li><a href="/alias/about/" <? if ($section=="about") { echo "class='active-globalsection'"; } else { echo "class='globalsection'"; } ?> id="desktop-menu-link">about</a></li>	
			<li><a href="/alias/portfolio/#case-studies" <? if ($section=="portfolio") { echo "class='active-globalsection'"; } else { echo "class='globalsection'"; } ?> id="desktop-menu-link">portfolio</a></li>		
			<li><a href="http://blog.visualplant.net" <? if ($section=="blog") { echo "class='active-globalsection'"; } else { echo "class='globalsection'"; } ?> id="desktop-menu-link">blog</a></li>
			
			<!-- shows for mobile -->
			<li><a href="#" class="globalsection" id="mobile-menu-link">menu</a></li>
			
		</ul>
	</div>

	
</div>


<!--
<div class="container topbar">
	<div class="row topbar-content">

			<div class="top-logo" onclick="javascript:window.location = 'index.php'">
				alias<span style="font-size:24px;font-family:kefa;margin-right:6px;font-weight:bold;letter-spacing:0.03em;color:#eee;margin-left:2px;">made</span>
			</div>
			

			<div class="fivecol last">

				<ul class="globalnav-items">
					
					<li><a href="about.php" <? if ($section=="about") { echo "class='globalnav active-section'"; } else { echo "class='globalnav'"; } ?> >about</a></li>
				
					<li class="globalnav-item-active"><a href="portfolio.php" <? if ($section=="portfolio") { echo "class='globalnav active-section'"; } else { echo "class='globalnav'"; } ?> >portfolio</a></li>
				
					<li><a href="http://blog.visualplant.net" class="globalnav" target="_blank">blog</a></li>
				
					<li><a href="mailto:jsn@visualplant.net" class="globalnav">contact</a></li>
				
				</ul>
				
			</div>

		
	</div>
</div>
-->

