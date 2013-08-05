<?php include('includes/contact-parse.php'); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Metamorph - An Adaptive Experience</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- 57x57 older iPhone and Android devices -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <!-- iPad 1 and 2 & iPad mini -->
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <!-- iPhone 4, 4S, 5 and iPod Touch -->
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- iPad 3rd gen -->
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet" media="screen, projection">
</head>
<body>
    <header id="pageHeader" role="banner">
        <h1><a href="index.html">MetaMorph</a></h1>
        <h2>Your Visual Life</h2>
    </header>
    <a href="#menu" class="menu-link"><i class="icon-chevron-sign-right"></i> Menu</a>
    <nav id="menu" role="navigation" class="cf">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <main role="main" class="cf">
       <div class="page-content"> 
          <article id="contact-form"> 


              <h1>Contact Us</h1>
              <div class="mobile-emphasis">
                  <a href="tel:15551234569" class="primary action"><i class="icon-phone-sign"></i> Call us directly: <span class="phone">1-555-123-4569</span></a> 
              </div>

              <p>Please let us know how we can help you. It only takes a moment, and we'll get back to you shortly. </p> 

           <?php if( $_POST['did_submit'] ){ display_error_or_success($errors, $mail_sent); } ?>

            <form action="contact.php" method="post" name="signup" id="signup" novalidate >

              <fieldset id="messageInfo">
                  <legend>Your Message</legend>

                  <label for="title">Message title</label>
                  <input type="text" name="title" id="title" value="<?php sticky_field($title); ?>" />
                  <div class="label">I would like more information about: </div>
                  <!-- having a UL here makes it really easy to change the display from a vertical to horizontal list-->

                  <ul class="choice-list">
                    <li>
                      <!--wrapping the label makes 'hit' area easier to control, is totally valid-->
                      <label for="installation">
                          <input type="radio" name="subject" id="installation" value="installation" class="required" title="Please select an option" <?php checked($subject, 'installation'); ?>>
                          Installation
                      </label>
                  </li>
                  <li>
                      <label for="licensing">
                          <input type="radio" name="subject" id="licensing" value="licensing" <?php checked($subject, 'licensing'); ?>>
                          Licensing
                      </label>
                  </li>
                  <li>
                      <label for="support">
                          <input type="radio" name="subject" id="support" value="support" <?php checked($subject, 'support'); ?>>
                          Support
                      </label>
                  </li>
              </ul>


              <label for="message"> Your Message </label>
              <textarea id="message" name="message" placeholder="Write your message" cols="45" rows="5"><?php sticky_field($message); ?></textarea>

          </fieldset>

          <fieldset id="generalInfo">
           <legend>Your Contact Info </legend>
           <label for="name" class="label">Name </label>
           <input name="name" id="name" type="text" class="required" required value="<?php sticky_field($name); ?>" />

           <label for="email">E-mail Address</label>
           <input name="email" type="email" class="required" required value="<?php sticky_field($email); ?>" />

           <label for="url" class="label">URL</label>
           <input name="url" type="url" id="url" placeholder="http://www.maryjoe.com" value="<?php sticky_field($url); ?>">

           <label for="state">State</label>
           <select name="state" id="state" tabindex="150">
              <option <?php selected('', $state); ?> value="">--Please select one--</option>
              <option <?php selected('FU', $state); ?> value="FU">None of Your Business</option>
              <option <?php selected('AL', $state); ?> value="AL">Alabama</option>
              <option <?php selected('AK', $state); ?> value="AK">Alaska</option>
              <option <?php selected('AZ', $state); ?> value="AZ">Arizona</option>
              <option <?php selected('AR', $state); ?> value="AR">Arkansas</option>
              <option <?php selected('CA', $state); ?> value="CA">California</option>
              <option <?php selected('CO', $state); ?> value="CO">Colorado</option>
              <option <?php selected('CT', $state); ?> value="CT">Connecticut</option>
              <option <?php selected('DE', $state); ?> value="DE">Delaware</option>
              <option <?php selected('DC', $state); ?> value="DC">District of Columbia</option>
              <option <?php selected('FL', $state); ?> value="FL">Florida</option>
              <option <?php selected('GA', $state); ?> value="GA">Georgia</option>
              <option <?php selected('HI', $state); ?> value="HI">Hawaii</option>
              <option <?php selected('ID', $state); ?> value="ID">Idaho</option>
              <option <?php selected('IL', $state); ?> value="IL">Illinois</option>
              <option <?php selected('IN', $state); ?> value="IN">Indiana</option>
              <option <?php selected('IA', $state); ?> value="IA">Iowa</option>
              <option <?php selected('KA', $state); ?> value="KA">Kansas</option>
              <option <?php selected('KY', $state); ?> value="KY">Kentucky</option>
              <option <?php selected('LA', $state); ?> value="LA">Louisiana</option>
              <option <?php selected('ME', $state); ?> value="ME">Maine</option>
              <option <?php selected('MD', $state); ?> value="MD">Maryland</option>
              <option <?php selected('MA', $state); ?> value="MA">Massachusetts</option>
              <option <?php selected('MI', $state); ?> value="MI">Michigan</option>
              <option <?php selected('MN', $state); ?> value="MN">Minnesota</option>
              <option <?php selected('MO', $state); ?> value="MO">Missouri</option>
              <option <?php selected('MT', $state); ?> value="MT">Montana</option>
              <option <?php selected('NE', $state); ?> value="NE">Nebraska</option>
              <option <?php selected('NV', $state); ?> value="NV">Nevada</option>
              <option <?php selected('NH', $state); ?> value="NH">New Hampshire</option>
              <option <?php selected('NJ', $state); ?> value="NJ">New Jersey</option>
              <option <?php selected('NM', $state); ?> value="NM">New Mexico</option>
              <option <?php selected('NY', $state); ?> value="NY">New York</option>
              <option <?php selected('NC', $state); ?> value="NC">North Carolina</option>
              <option <?php selected('ND', $state); ?> value="ND">North Dakota</option>
              <option <?php selected('OH', $state); ?> value="OH">Ohio</option>
              <option <?php selected('OK', $state); ?> value="OK">Oklahoma</option>
              <option <?php selected('OR', $state); ?> value="OR">Oregon</option>
              <option <?php selected('PA', $state); ?> value="PA">Pennsylvania</option>
              <option <?php selected('RI', $state); ?> value="RI">Rhode Island</option>
              <option <?php selected('SC', $state); ?> value="SC">South Carolina</option>
              <option <?php selected('SD', $state); ?> value="SD">South Dakota</option>
              <option <?php selected('TN', $state); ?> value="TN">Tennessee</option>
              <option <?php selected('TX', $state); ?> value="TX">Texas</option>
              <option <?php selected('UT', $state); ?> value="UT">Utah</option>
              <option <?php selected('VT', $state); ?> value="VT">Vermont</option>
              <option <?php selected('VA', $state); ?> value="VA">Virginia</option>
              <option <?php selected('WA', $state); ?> value="WA">Washington</option>
              <option <?php selected('WV', $state); ?> value="WV">West Virginia</option>
              <option <?php selected('WI', $state); ?> value="WI">Wisconsin</option>
              <option <?php selected('WY', $state); ?> value="WY">Wyoming</option>
          </select>



      </fieldset>

      <!-- Added hidden field for PHP form submission detection -->
      <input type="hidden" name="did_submit" value="1">

      <input type="submit" name="submit" id="submit" value="Submit">

  </form> 
</article>
</div>
<aside role="complementary" class="cf">
    <section class="product-tour">
        <h2>Product Tour</h2>
        <ul class="tour-list">
            <li> <a href="#"><i class="icon-beer"></i> Free Forever</a> </li>
            <li> <a href="#"><i class="icon-cloud-upload"></i> Sync to the Cloud</a> </li>
            <li> <a href="#"><i class="icon-magic"></i> Magical Powers</a> </li>
            <li> <a href="#"><i class="icon-cogs"></i> Technical Hooey</a> </li>
            <li> <a href="#"><i class="icon-trophy"></i> Award Winning Stuff</a> </li>
        </ul>
    </section>
    <section class="developer-blog">
     <h2>developer Blog</h2>
     <article> <img src="http://placekitten.com/400/300" alt="a placeholder kitten"  />
         <h3>100% more kitten</h3>
     </article>
     <article> <img src="http://placepuppy.it/400/300"  alt="a placeholder puppy" />
         <h3>Still plenty of puppy</h3>
     </article>
 </section>
</aside>
</main>
<footer id="page-footer" class="cf">
    <section>
        <h2>A Footer Widget</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
        </p>
    </section>
    <section>
       <h2>A Footer Widget</h2>
       <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </p> 
   </section>
   <section>
       <h2>A Footer Widget</h2>
       <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       </p> 
   </section>
   <a href="#" class="action"><i class="icon-arrow-up"></i> Back to Top</a>
</footer>
<script src="scripts/modernizr.custom.js"></script> 
<script>
//use the modernizr load to load up external scripts. This will load the scripts asynchronously, but the order listed matters. Although it will load all scripts in parallel, it will execute them in the order listed
Modernizr.load([
{
   load: [  
   'http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js',
   'scripts/main.js', 
   'scripts/fluid-video.js'
   ]
},
{
     // test for media query support, if not load respond.js
     test : Modernizr.mq('only all'),
    // If not, load the respond.js file
    nope : 'scripts/respond.min.js' 
}
]); 
</script>
</body>
</html>
