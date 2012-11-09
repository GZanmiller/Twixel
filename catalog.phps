  <?php



  ?>
<!DOCTYPE html>

<!-- USED FOUNDATION HTML5 FRONT-END FRAMEWORK -->

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Twixel Catalog - Zachary Spear</title>

  <!-- IMPORT CSS -->
  
  <style type="text/css">
  	@import url("css/foundation.min.css");
	@import url("css/styles.css");
  </style>

  <link rel="icon" type="image/ico" href="favicon.ico" />

  <script src="js/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>
  
  <!-- Header and Nav -->
  
  <nav class="top-bar contain-to-grid">
    
    <ul>
      <!-- Title Area -->
      <li>
      	<a href="home.php"><img src="img/logo.svg" alt="logo" height="40" width="40" /></a>
      </li>
      <li class="name">
      	
        <h1>
          <a href="home.php">
            Twixel
          </a>
        </h1>
      </li>
    </ul>

    <section>
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li><a href="home.php">Home</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="catalog.php">Products</a>
          <ul class="dropdown">
            <li><a href="catalog.php#adobePlugins">Adobe Plugins</a></li>
            <li><a href="catalog.php#adobeSoftware">Adobe Software</a></li>
            <li><a href="catalog.php#mayaPlugins">Maya Plugins</a></li>
            <li><a href="catalog.php#wordPressThemes">WordPress Themes</a></li>
            <li><a href="catalog.php#webAssets">Web Assets</a></li>
            <li><a href="catalog.php#sonySoftware">Sony Software</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="client.php">Account</a>
          <ul class="dropdown">
            <li><a href="client.php">Account Information</a></li>
            <li><a href="client.php#openOrders">Open Orders</a></li>
            <li><a href="client.php#pastOrders">Past Orders</a></li>
          </ul>
        <li class="divider"></li>
        <li><a href="cart.php">Cart (0)</a></li>
      </ul>
    </section>
  </nav>
  
  <!-- End Header and Nav -->
  <?php



  ?>
  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->
  
  <div class="row">
    <div class="nine columns">
      <h1>Products</h1>
      <h2>Our Best Sellers</h2>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="img/homeSliderImages/sliderFlares.png" width="1180" height="300" alt="sliderFlares" />
        <img src="img/homeSliderImages/sliderColorGrade.png" width="1180" height="300" alt="sliderColor" />
        <img src="img/homeSliderImages/sliderParticles.png" width="1180" height="300" alt="sliderParticles" />
        <img src="img/homeSliderImages/sliderTextEffects.png" width="1180" height="300" alt="sliderText" />
      </div>
    </div>
  </div>
  
  <!-- Three-up Content Blocks -->
  
  <div class="row">
    <div class="twelve columns">
      <h3>Product Categories</h3>
      <dl class="tabs">
        <dd class="active"><a href="#adobePlugins">Adobe Plugins</a></dd>
        <dd><a href="#adobeSoftware">Adobe Software</a></dd>
        <dd><a href="#mayaPlugins">Maya Plugins</a></dd>
        <dd><a href="#wordPressThemes">WordPress Themes</a></dd>
        <dd><a href="#webAssets">Web Assets</a></dd>
        <dd><a href="#sonySoftware">Sony Software</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="adobePluginsTab">
          <div class="row">

            <div class="four columns">
              <img src="img/productImages/flares03.png" width="400" height="300" alt="flares" />
              <h4>Lens Flares</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$199.99</h5>
              <p>Create lens flares right in After Effects, Photoshop, Premiere with our simple yet powerful plugin.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
            
            <div class="four columns">
              <img src="img/productImages/3dModel03.png" width="400" height="300" alt="3d" />
              <h4>3D Elements</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$399.99</h5>
              <p>Incorporate your 3D .obj models into your After Effects compositions right inside After Effects. No need to composite in an outside program. 
                With this great plugin you will be able to create awesome cinematic effects all in one program.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>

            </div>
            
            <div class="four columns">
              <img src="img/productImages/particles03.png" width="400" height="300" alt="particles" />
              <h4>Particles</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$199.99</h5>
              <p>Easily create particles right in After Effects. Need snow in your footage but live in Florida? Then this plugin is for you.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>

            </div>
            
          </div>
          <div class="row">

            <div class="four columns">
              <img src="img/productImages/soundSync03.png" width="400" height="300" alt="soundSync" />
              <h4>Sound Sync</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$299.99</h5>
              <p>Create keyframes from audio right in After Effects with our easy to use plugin.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
            
            <div class="four columns">
              <img src="img/productImages/slowMotion03.png" width="400" height="300"  alt="slowMo" />
              <h4>Slow Motion</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$399.99</h5>
              <p>Slow down 60FPS (frames per second) footage up to 1000FPS with ease.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
            
            <div class="four columns">
              <img src="img/productImages/color03.png" width="400" height="300"  alt="colorGrade" />
              <h4>Color Grading</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$199.99</h5>
              <p>Make your projects pop with that extra color.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
          
          </div>
          <div class="row">

            <div class="four columns">
              <img src="img/productImages/text03.png" width="400" height="300"  alt="textEffects" />
              <h4>Automated Text Effects</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$199.99</h5>
              <p>Stylize your text with some automated effects or build your own with our easy to use tool.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
            
            <div class="four columns">
              <img src="img/productImages/composite03.png" width="400" height="300"  alt="easyComposite" />
              <h4>Easy Composite</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$399.99</h5>
              <p>Fix jagged edges and incorporate foreign 3d objects into your footage. You can even add shadows.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
            
            <div class="four columns">
              <img src="img/productImages/sdToHD03.png" width="400" height="300"  alt="sdToHD" />
              <h4>SD to HD</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$299.99</h5>
              <p>Convert your ugly standar definition footage into beautfil high definition.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
          
          </div>
          <div class="row">

            <div class="four columns">
              <img src="img/productImages/denoise03.png" width="400" height="300"  alt="denoise" />
              <h4>Denoiser</h4>
              <a href="#" class="radius button right">Add to Cart</a>
              <h5>$299.99</h5>
              <p>Did you shoot footage at night and didn't have enough lighting so you bumped up your camera's ISO? Well fix the noise the it created with this built-in plugin.</p>
              <div class="rating">
                0<i class="foundicon-thumb-up"></i>
                0<i class="foundicon-thumb-down"></i>
              </div>
            </div>
          
          </div>
        </li>
        <li id="adobeSoftwareTab">
          <h3>Coming Soon</h3>
        </li>
        <li id="mayaPluginsTab">
          <h3>Coming Soon</h3>
        </li>
        <li id="wordPressThemesTab">
          <h3>Coming Soon</h3>
        </li>
        <li id="webAssetsTab">
          <h3>Coming Soon</h3>
        </li>
        <li id="sonySoftwareTab">
          <h3>Coming Soon</h3>
        </li>
      </ul>
    </div>
  </div>
    
  <!-- Footer -->
  
  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="six columns">
          <p>This site is not official and is an assignment for a UCF Digital Media course
            <br />Designed By: Zachary Spear</p>
        </div>
        <div class="six columns">
          <ul class="link-list right">
            <li><a href="home.php">Home</a></li>
            <li><a href="catalog.php">Products</a></li>
            <li><a href="client.php">Account</a></li>
            <li><a href="cart.php">Cart (0)</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="js/jquery.js"></script>
  
  <script src="js/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="js/jquery.foundation.forms.js"></script>
  
  <script src="js/jquery.foundation.reveal.js"></script>
  
  <script src="js/jquery.foundation.orbit.js"></script>
  
  <script src="js/jquery.foundation.navigation.js"></script>
  
  <script src="js/jquery.foundation.buttons.js"></script>
  
  <script src="js/jquery.foundation.tabs.js"></script>
  
  <script src="js/jquery.foundation.tooltips.js"></script>
  
  <script src="js/jquery.foundation.accordion.js"></script>
  
  <script src="js/jquery.placeholder.js"></script>
  
  <script src="js/jquery.foundation.alerts.js"></script>
  
  <script src="js/jquery.foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="js/app.js"></script>

  <script type="text/javascript">
     $(window).load(function() {
         $('#slider').orbit();
     });
  </script>
  
</body>
</html>
