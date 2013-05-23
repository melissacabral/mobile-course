<?php
// Include the configuration file
include_once './wurfl_config.php';

// This line detects the visiting device by looking at its HTTP Request ($_SERVER)
$device = $wurflManager->getDeviceForHttpRequest($_SERVER);

if ($device->getCapability('resolution_width') <= 480) {
    $smallScreen = true;
} else {
    $smallScreen = false;
}
if ($device->getCapability('has_cellular_radio') === 'true') {
    if ($device->getCapability('xhtml_make_phone_call_string') !== 'none') {
        $wireless = true;
        $method = $device->getCapability('xhtml_make_phone_call_string');
    } else {
        $wireless = false;
    }
} else {
    $wireless = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yet Another Sports Site</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/style-8.2.css" />
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href=""/css/ie-2.css" media="all">
	<![endif]-->
</head>

<body id="top" class="<?php echo $device->getCapability('pointing_method'); ?>">
     <nav role="navigation">
         <div class="inner">
             <?php if ($smallScreen) { ?>
             <a href="#bottom" class="nav-collapse active" id="nav-collapse">Menu</a> 

             <?php } else { ?>
			 <a href="#nav" class="nav-collapse" id="nav-collapse">Menu</a> 
             <ul class="nav" id="nav">
                 <li class="active"><a href="#">Football</a></li>
                 <li><a href="#">Baseball</a></li>
                 <li><a href="#">Soccer</a></li>
                 <li><a href="#">Tennis</a></li>
                 <li><a href="#">Ice Soccer</a></li>
                 <li><a href="#">Basketball</a></li>
             </ul>
             <?php } ?>
         </div>
     </nav>
    <header role="banner">
        <div class="inner">
           <h1 class="logo"><a href="#"><img src="images/logo.png" alt="YetAnotherSportsSite" /></a></h1>
  		
        </div><!-- /.inner -->
     </header>
    <div id="container">
        <div class="inner">
        <article class="main" role="main">
            <h1>That guy has the ball</h1>
            <p class="summary">In what has to be considered a development of the utmost importance, that man over there now has the ball.</p>
            <p class="articleInfo">By Ricky Boucher | <time>January 1, 2012</time></p>
            <section>
                <img src="images/football.jpg" alt="Football" />

				
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan felis quis nibh pretium tempus. Nullam quis rhoncus massa. Vivamus laoreet convallis sem ac dapibus. Donec varius congue sem ac molestie. Nam purus neque, tincidunt ut aliquam dapibus, dictum a magna. Curabitur sagittis mi et ante aliquet tristique vitae nec justo. Quisque id tellus et quam pharetra lacinia nec id eros. Praesent fermentum dui id tellus aliquam tincidunt. Suspendisse eu ante sed est vestibulum dictum at sit amet nulla. Sed sed leo at ante consequat ullamcorper. Fusce mattis, justo sed eleifend bibendum, nunc risus pharetra est, ut rutrum libero justo et leo. Maecenas felis orci, porttitor eu venenatis vel, posuere in arcu. Phasellus sagittis pretium purus, vel semper massa aliquet sit amet.</p>
                <p>In hac habitasse platea dictumst. Sed vitae libero et dui lobortis accumsan et non nisi. Suspendisse commodo purus vitae risus rutrum eget scelerisque erat vehicula. Nullam eu nunc purus. Nulla rutrum laoreet magna eu pharetra. In libero dolor, varius sed tempor quis, tempus a turpis. Nullam suscipit, nisi a cursus viverra, sapien dolor scelerisque mauris, auctor mattis leo ante auctor enim. Suspendisse nec sodales risus. Donec suscipit, justo eu tincidunt venenatis, metus odio rhoncus quam, mollis accumsan diam eros quis lectus.</p>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean facilisis placerat dolor ut mattis. Duis vitae sem sapien. Vivamus orci mauris, ornare in fringilla vitae, pulvinar ut orci. Fusce pellentesque leo id arcu varius elementum. Vivamus id odio ac sapien pulvinar rutrum ut vitae libero. Nam eget rutrum mauris.</p>
                <p>Curabitur ultrices dictum eros sed dignissim. Nam blandit iaculis tincidunt. Proin semper, arcu in cursus tincidunt, orci neque congue nunc, eu sodales enim diam eu ligula. Donec condimentum consequat convallis. Sed id est nisi, eleifend gravida justo. Sed consectetur posuere magna sit amet imperdiet. Vestibulum rhoncus nisl vel sapien viverra eget feugiat magna cursus. Nullam scelerisque ultricies lacus vel sodales. Aliquam felis magna, interdum placerat viverra non, sodales eget augue. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nec neque quis odio hendrerit auctor nec vel erat. In ullamcorper nulla sed ipsum elementum varius. Morbi et sapien ac nisl suscipit tincidunt. Sed lacus nisl, tempus vel ultrices vel, vulputate a nunc. Suspendisse in diam vitae nulla tempor vulputate quis ac nunc.</p>
                <p>Nam in dui eget augue malesuada adipiscing ac at massa. In sed auctor libero. Quisque egestas mollis lobortis. Vivamus lacinia metus at quam posuere condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ipsum mauris, facilisis ut pharetra ut, lacinia vitae velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris imperdiet facilisis ligula, sed pharetra metus malesuada sed. Suspendisse tristique massa in magna posuere adipiscing. Ut semper magna facilisis justo dapibus vel auctor odio imperdiet. Donec non nulla fermentum erat condimentum ultrices et vel augue. Aenean aliquam neque ut nisi scelerisque sagittis. Phasellus quam odio, hendrerit et viverra sed, pellentesque vitae est. Praesent consequat, neque nec interdum accumsan, nibh lorem hendrerit arcu, et posuere nunc massa ac augue. Nam justo augue, consectetur sit amet tempus sit amet, faucibus ut magna. Donec semper, mi in adipiscing tincidunt, justo purus suscipit libero, dictum iaculis arcu augue a arcu.</p>
                <p>Aliquam feugiat venenatis porttitor. Fusce feugiat, arcu tristique cursus dignissim, magna nulla facilisis tortor, sed rutrum nisl dolor a augue. Etiam a ornare libero. Fusce massa nulla, gravida nec volutpat eleifend, venenatis nec nunc. Nam pulvinar iaculis ligula a luctus. Fusce vulputate odio id purus dictum placerat. Nullam condimentum, sem ac mattis congue, mi enim interdum risus, id rhoncus velit neque et magna.</p>
                <p>Pellentesque vestibulum rhoncus sollicitudin. Cras eget purus velit. Donec et quam elit, sed interdum diam. Fusce a dolor a elit tincidunt dictum et non orci. Integer aliquam vehicula elit at vehicula. Nam nec magna libero. Maecenas porttitor, tortor eget congue lobortis, dolor ligula cursus nulla, eget luctus sem tellus ultrices orci. Sed posuere egestas pretium. Fusce id arcu eu lectus suscipit malesuada et vel libero. Mauris nunc felis, auctor eu malesuada sed, elementum non felis. Praesent pellentesque suscipit commodo. Suspendisse commodo accumsan nisl ut consequat. Curabitur porta sapien a dolor facilisis in bibendum nibh rutrum. Nulla enim magna, dapibus sed auctor ac, pulvinar eu quam.</p>
            </section>
			
        </article>
        <aside>
            <section class="talkshow">
                <h2>We're talking sports!</h2>
                <?php
                if ($wireless) { ?>
                <p><a href="<?php echo $method; ?>+18005555555">1-800-555-5555</a></p>
                <?php 
                } else {
                ?>
                <p class="call">1-800-555-5555!</p>
                <?php
                }
                ?>
            </section>
            <section class="related">
                <h2><a href="headlines.html" data-target="related" id="lazy">View related headlines &raquo;</a></h2>
				
            </section>
			<section>
            	<img src="images/ad.png" alt="Boombox ad unit" />
			</section>
            <section>
                <h2>Tagged</h2>
                <ul class="tags">
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Ball</a></li>
                    <li><a href="#">Field</a></li>
                    <li><a href="#">Upset</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Winning</a></li>
                </ul>
            </section>
			<section class="soundbites">
				<h2>Sound Bites</h2>
				<blockquote>
				    ..this much is clear to me. If I were in his shoes, I would have already won 5 Super Bowls.
				    <cite><a href="#">—Guy with big ego</a></cite>
				</blockquote>
				<blockquote>
				    You play to win the game! Or at least, not to lose too badly.
				    <cite><a href="#">—Easy going coach</a></cite>
				</blockquote>
			</section>
        </aside>
		<div class="more-stories">
			<h2>More in Football</h2>
			<ul class="slats">
                <li class="group">
                    <a data-src="images/ball.jpg" href="#">
                        <h3>Kicker connects on record 13 field goals</h3>
                    </a>
                </li>
                <li data-src="images/goal_post.jpg" class="group">
                    <a href="#">
                        <h3>Your favorite team loses to that team no one likes</h3>
                    </a>
                </li>
                <li data-src="images/ball_field.jpg" class="group">
                    <a href="#">
                        <h3>The Scarecrows Win 42-0</h3>
                    </a>
                </li>
            </ul>
		</div>
		</div>
    </div><!-- /#container -->
    <footer id="bottom" role="contentinfo">
        <div class="inner">
			<h1 class="logo"><a href="#"><img src="images/logo-footer.png" alt="YetAnotherSportsSite" /></a></h1>
            <nav role="navigation">
                <ul>
                    <li><a href="#">Football</a></li>
                    <li><a href="#">Baseball</a></li>
                    <li><a href="#">Soccer</a></li>
                    <li><a href="#">Tennis</a></li>
                    <li><a href="#">Ice Soccer</a></li>
                    <li><a href="#">Basketball</a></li>
					<li class="top"><a href="#top">Back to Top</a></li>
                </ul>
            </nav>
        </div><!-- /.inner -->
    </footer>
<script type="text/javascript" src="yass.js"></script>
</body>
</html>



