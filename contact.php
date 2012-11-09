<?php 
  include 'includes/header.php';
?>

<!-- Main Page Content and Sidebar -->
<div class="spacer"></div>
 <div class="row">
    <div class="nine columns">
      <h1>Contact</h1>
      <hr />
    </div>
    <div class="three columns">
      <input class="search" type="search" placeholder="Search..." />
    </div>
  </div>

<div class="row">

    <!-- Contact Details -->
    <div class="nine columns">

      <h3>Get in Touch!</h3>
      <p>Shoot us an email, whether you've got a question, a concern, or just want to say hello. We'll get back to you as soon as we can. Keep in mind we're always busy working on great new products and upkeeping our current ones. So if we don't reply right away, don't worry.</p>

      <dl class="contained tabs">
        <dd class="active"><a href="#contactForm">Contact Our Company</a></dd>
        <dd><a href="#contactPeople">Specific Person</a></dd>
      </dl>

      <ul class="tabs-content contained">
        <li id="contactFormTab" class="active">
        <!--<form name="contactform" method="post" action="sendFormEmail.php">-->
          <div class="row collapse">
            <div class="two columns"><label class="inline">Your Name</label></div>
            <div class="ten columns"><input type="text" id="yourName" placeholder="Enoch Johnson" /></div>
          </div>
          <div class="row collapse">
            <div class="two columns"><label class="inline">Your Email</label></div>
            <div class="ten columns"><input type="text" id="yourEmail" placeholder="nucky@bootleg.org" /></div>
          </div>

          <label>What's up?</label>
          <textarea id="comments" rows="4"></textarea>

          <button type="submit" value="Submit" class="radius button">Submit</button>
        <!--</form>-->
        </li>

        <li id="contactPeopleTab">
          <ul class="block-grid five-up">
            <li><a href="mailto:yler.berry@knights.ucf.edu"><img src="img/contactImg/kyler.jpg" alt="kyler" /><br />Kyler Berry</a><p>Product Manager</p></li>
            <li><a href="mailto:mark_gorion@knights.ucf.edu"><img src="img/contactImg/mark.jpg" alt="mark" /><br />Mark Gorion</a><p>Developer</p></li>
            <li><a href="mailto:fmurrugarra@knights.ucf.edu"><img src="img/contactImg/fernando.jpg" alt="fernando" /><br />Fernando Murrugarra</a><p>User Testing</p></li>
            <li><a href="mailto:spearzachary@gmail.com"><img src="img/contactImg/zack.jpg" alt="zack" /><br />Zack Spear</a><p>Lead Designer</p></li>
            <li><a href="mailto:gzanmiller@knights.ucf.edu"><img src="img/contactImg/greg.jpg" alt="greg" /><br />Greg Zanmiller</a><p>Lead Developer</p></li>
          </ul>
        </li>
      </ul>

    </div>



    <!-- Sidebar -->

    <div class="three columns">

      <h5>Map</h5>
      <p>
      	<a href="http://goo.gl/maps/51p6m" target="_blank"><img src="img/map.png" alt="map" /></a>
        <a href="http://goo.gl/maps/51p6m" target="_blank">View Larger Map</a>
      </p>

      <p>
        Twixel Inc.<br />
        99 S. Eola Drive<br />
        Orlando, FL 32801
      </p>

    </div>

    <!-- End Sidebar -->


  <!-- End Main Content and Sidebar -->
  </div>

  <!-- Footer -->
  <?php include('footer.php') ?>
  
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