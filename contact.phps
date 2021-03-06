<?php 
  include 'includes/header.php';
  include 'includes/mysql_connect.php';
?>

<!-- Main Page Content and Sidebar -->
<div class="spacer"></div>
 <div class="row">
    <div class="eight columns">
      <h1>Contact</h1>
      <hr />
    </div>
</div>

<div class="row">

    <!-- Contact Details -->
    <div class="eight columns">

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
            <li><a href="mailto:kyler.berry@knights.ucf.edu"><img src="img/contactImg/kyler.jpg" alt="kyler" /><br />Kyler Berry</a><p>Product Manager</p></li>
            <li><a href="mailto:mark_gorion@knights.ucf.edu"><img src="img/contactImg/mark.jpg" alt="mark" /><br />Mark Gorion</a><p>Developer</p></li>
            <li><a href="mailto:fmurrugarra@knights.ucf.edu"><img src="img/contactImg/fernando.jpg" alt="fernando" /><br />Fernando Murrugarra</a><p>User Testing</p></li>
            <li><a href="mailto:spearzachary@gmail.com"><img src="img/contactImg/zack.jpg" alt="zack" /><br />Zack Spear</a><p>Lead Designer</p></li>
            <li><a href="mailto:gzanmiller@knights.ucf.edu"><img src="img/contactImg/greg.jpg" alt="greg" /><br />Greg Zanmiller</a><p>Lead Developer</p></li>
          </ul>
        </li>
      </ul>

    </div>

<!-- Sidebar -->
  <div class="four column">
    <div class="sidebar">
   <div class="aside">
      <h2>Support</h2>
      <p>location:<br/>123 Fake St. Orlando, FL</p>
      <p>email:<br/><a href="mailto:info@twixel.com" title="">info@twixel.com</a></p>
      <p>phone:<br/>407.555.5555</p>
    </div>
    <div class="aside">
      <h2>Affiliates</h2>
      <p>We offer a competitive affiliate program where you can earn money for each sale made by someone you refer. Instant payments on every commission via PayPal. </p>
    </div>
    <div class="aside">
          <h2>Stay up to date!</h2>
          <p>Sign-up for our email list to receive information about deals, coupons, and updates about Twixel. Max 4 emails per month.</p>
          <a href="#" class="radius button right">Sign-up</a>
      </div>
    </div>
  </div>

  <!-- End Main Content and Sidebar -->
  </div>

  <!-- Footer -->
  <?php include('footer.php') ?>