<div id="mobile-menu" style="display:none;">

	<ul style="text-align: center;">
		<li <? if ($section=="about") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?> onclick="location.href='about.php'">about</li>
		<li <? if ($section=="portfolio") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?>  onclick="location.href='portfolio.php'">portfolio</li>
		<li <? if ($section=="blog") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?> onclick="location.href='blog.php'">blog</li>
		<li class="mobile-menu-item" onclick="location.href='mailto:jsn@visualplant.net'">contact</li>
	</ul>

</div>