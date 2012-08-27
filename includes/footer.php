<div class="topbar-repeat"></div>

<div class="footer">

	<div class="container">
		<div class="row">
		
			<div class="twelvecol last body-text" style="margin-left:20px;margin-left:20px;margin-top:20px;text-align:center;color:#999;">
		
				&copy; 1996 - 2012. Jason Schmidt.
				<div class="social">
					<span onclick="location.href='https://twitter.com/visualplant'" style="cursor:pointer;font-size:2.6em;color:#ccc;margin:3px;" aria-hidden="true" data-icon="&#x25;"></span>
					<span onclick="location.href='http://www.linkedin.com/in/visualplant'" style="cursor:pointer;font-size:2.6em;color:#ccc;margin:3px;" aria-hidden="true" data-icon="&#x28;"></span>
					<span onclick="location.href='http://blog.visualplant.net'" style="cursor:pointer;font-size:2.6em;color:#ccc;margin:3px;" aria-hidden="true" data-icon="&#x24;"></span>
				</div>
			
			</div>
		
		</div>
	</div>

</div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>


<!-- FlexSlider -->
<script defer src="js/jquery.flexslider-min.js"></script>

<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>

<!-- Optional FlexSlider Additions -->
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/demo.js"></script>