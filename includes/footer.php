<div class="topbar-repeat"></div>

<div class="footer">

	<div class="container">
		<div class="row">
		
			<div class="twelvecol last" style="margin-top:20px;text-align:center;color:#999;">
		
				&copy; 1996 - 2012.
				
				<div class="social">
					<span onclick="location.href='https://twitter.com/visualplant'" style="cursor:pointer;font-size:2.6em;color:#aaa;margin:3px;" aria-hidden="true" data-icon="&#x7b;"></span>
					
					<span onclick="location.href='http://www.linkedin.com/in/visualplant'" style="cursor:pointer;font-size:2.6em;color:#aaa;margin:3px;" aria-hidden="true" data-icon="&#xe048;"></span>
					
					<span onclick="location.href='http://blog.visualplant.net'" style="cursor:pointer;font-size:2.6em;color:#aaa;margin:3px;" aria-hidden="true" data-icon="&#xe047;"></span>
					
					<div onclick="location.href='mailto:jsn@visualplant.net'" style="cursor:pointer;font-size:2.6em;color:#aaa;margin-top: 6px;" aria-hidden="true" data-icon="&#x7a;"></div>
				</div>
			
			</div>
		
		</div>
	</div>

</div>

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>

<!-- scrollto -->
<script type='text/javascript' src='/js/jquery.scrollTo-min.js'></script>
<script type='text/javascript' src='/js/jquery.localscroll-min.js'></script>
<script type='text/javascript' src='/js/init.js'></script>

<!-- FlexSlider -->
<script defer src="/js/jquery.flexslider-min.js"></script>

<!-- FancyBox -->
<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.0"></script>

<!-- Add FancyBox Media helper (optional) -->
<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.3"></script>

<link rel="stylesheet" type="text/css" href="/js/jquery.fancybox.css?v=2.1.0" media="screen" />

<script type="text/javascript">
$(document).ready(function() {
	
	//fancybox
	$('.fancybox').fancybox({
        padding : 20,
        openEffect  : 'elastic'
    });
    
    //mobile menu
    $('#mobile-menu-link').click(function() {
    	$('#mobile-menu').slideToggle('fast');
    	return false;
    });

    $(window).resize(function() {
    	if ( $(window).width() > 767) {
    	   $('#mobile-menu').hide('fast');
    	}
    });
    
   
	
});
</script>




