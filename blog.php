

<?php $section="blog"; $page="home" ?>

<!doctype html>
<html lang="en">

<? include('includes/head.php') ?>

<body class="<?echo $section ?>">

<? include('includes/mobile-menu.php') ?>

<? include('includes/topbar.php') ?>

<div class="container animate-in">
	<div class="row">
	
		<div class="onecol last">&nbsp;</div>

		<div class="elevencol last">
			<div class="box work">

				<div class="full-width-box" style="height: 8000px;">
					
					<?php
					
					function is_mobile() {
					
						// Get the user agent
					
						$user_agent = $_SERVER['HTTP_USER_AGENT'];
					
						// Create an array of known mobile user agents
						// This list is from the 21 October 2010 WURFL File.
						// Most mobile devices send a pretty standard string that can be covered by
						// one of these.  I believe I have found all the agents (as of the date above)
						// that do not and have included them below.  If you use this function, you 
						// should periodically check your list against the WURFL file, available at:
						// http://wurfl.sourceforge.net/
					
					
						$mobile_agents = Array(
					
					
							"240x320",
							"acer",
							"acoon",
							"acs-",
							"abacho",
							"ahong",
							"airness",
							"alcatel",
							"amoi",	
							"android",
							"anywhereyougo.com",
							"applewebkit/525",
							"applewebkit/532",
							"asus",
							"audio",
							"au-mic",
							"avantogo",
							"becker",
							"benq",
							"bilbo",
							"bird",
							"blackberry",
							"blazer",
							"bleu",
							"cdm-",
							"compal",
							"coolpad",
							"danger",
							"dbtel",
							"dopod",
							"elaine",
							"eric",
							"etouch",
							"fly " ,
							"fly_",
							"fly-",
							"go.web",
							"goodaccess",
							"gradiente",
							"grundig",
							"haier",
							"hedy",
							"hitachi",
							"htc",
							"huawei",
							"hutchison",
							"inno",
							"ipad",
							"ipaq",
							"ipod",
							"jbrowser",
							"kddi",
							"kgt",
							"kwc",
							"lenovo",
							"lg ",
							"lg2",
							"lg3",
							"lg4",
							"lg5",
							"lg7",
							"lg8",
							"lg9",
							"lg-",
							"lge-",
							"lge9",
							"longcos",
							"maemo",
							"mercator",
							"meridian",
							"micromax",
							"midp",
							"mini",
							"mitsu",
							"mmm",
							"mmp",
							"mobi",
							"mot-",
							"moto",
							"nec-",
							"netfront",
							"newgen",
							"nexian",
							"nf-browser",
							"nintendo",
							"nitro",
							"nokia",
							"nook",
							"novarra",
							"obigo",
							"palm",
							"panasonic",
							"pantech",
							"philips",
							"phone",
							"pg-",
							"playstation",
							"pocket",
							"pt-",
							"qc-",
							"qtek",
							"rover",
							"sagem",
							"sama",
							"samu",
							"sanyo",
							"samsung",
							"sch-",
							"scooter",
							"sec-",
							"sendo",
							"sgh-",
							"sharp",
							"siemens",
							"sie-",
							"softbank",
							"sony",
							"spice",
							"sprint",
							"spv",
							"symbian",
							"tablet",
							"talkabout",
							"tcl-",
							"teleca",
							"telit",
							"tianyu",
							"tim-",
							"toshiba",
							"tsm",
							"up.browser",
							"utec",
							"utstar",
							"verykool",
							"virgin",
							"vk-",
							"voda",
							"voxtel",
							"vx",
							"wap",
							"wellco",
							"wig browser",
							"wii",
							"windows ce",
							"wireless",
							"xda",
							"xde",
							"zte"
						);
					
						// Pre-set $is_mobile to false.
					
						$is_mobile = false;
					
						// Cycle through the list in $mobile_agents to see if any of them
						// appear in $user_agent.
					
						foreach ($mobile_agents as $device) {
					
							// Check each element in $mobile_agents to see if it appears in
							// $user_agent.  If it does, set $is_mobile to true.
					
							if (stristr($user_agent, $device)) {
					
								$is_mobile = true;
					
								// break out of the foreach, we don't need to test
								// any more once we get a true value.
					
								break;
							}
						}
					
						return $is_mobile;
					}
					
					if (is_mobile()) {
						header('Location: http://www.nytimes.com');
					}
					
					else {
						print '<iframe src="http://blog.visualplant.net" scrolling="auto" frameborder="0" height="8000" width="100%" style="margin-top: 60px;height: 8000px;"></iframe>';
						
					}
					
					?>
					
					
				
				</div>
		
			</div> <!-- /elevencol -->
		</div> <!-- /box work -->
		
	</div> <!-- /row -->
</div> <!-- /container -->


<? include('includes/footer.php') ?>


</body>

</html>