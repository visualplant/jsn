<div id="mobile-menu" style="display:none;">

	<ul style="text-align: center;">
		<a href="/about/"><li <? if ($section=="about") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?>>about</li></a>
		<a href="/portfolio/"><li <? if ($section=="portfolio") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?>  onclick="location.href='/portfolio/'">portfolio</li></a>
		<a href="http://blog.visualplant.net"><li <? if ($section=="blog") { echo "class='mobile-menu-item-active'"; } else { echo "class='mobile-menu-item'"; } ?> >blog</li></a>
		<a href="mailto:jsn@visualplant.net"><li class="mobile-menu-item">contact</li></a>
	</ul>

</div>