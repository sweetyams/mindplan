<?php
/*
Template Name: Contact Us
*/
get_header("home"); 
while (have_posts()) : the_post(); 
$url = get_template_directory_uri();
?>

<div class="full-width menu-top gray5">
	
	<div class="row" ng-controller="MenuCtrl">
    <div class="small-centered columns small-12">
      
      <ul class="nav">
        <li><a href="/">Clients</a></li>
        <li><a href="/therapists">Therapists</a></li>
        <li><a href="/contact">Contact us</a></li>
      </ul>

      <a class="logo center" ui-sref='scans'><span class="i-mp_icon"></span></a> 
        
        <ul class="menu-right"> 
          <li class="social"><a href="https://twitter.com/mymindplan" target="_blank"><span class="i-twitter"></span></a></li>
          <li class="social"><a href="https://facebook.com/mymindplan" target="_blank"><span class="i-facebook"></span></a></li>
          <li class="link"><a ui-sref="signin" href="http://app.mindplan.me/#/signin">Sign In</a></li>
        </ul>
     
    </div>
</div>
</div>


  <div class="row bottom-150">
    <div class="columns small-3 top-100">

      <?php dynamic_sidebar("Sidebar"); ?>

    </div>
    <div class="columns small-6 end top-100">
      <h1 class="bottom-40 page-title"><?php the_title(); ?></h1>
      
      <div class="page-content">
        <?php the_content(); ?>
        <h2>PARTNERS</h2>
Interested in partnering up with MindPlan? We would love to meet you!

<a href="mailto:partners@mindplan.me" target="_blank" class="emailbox"><h6>Email Address</h6>partners@mindplan.me</a>
<a href="tel:514 557 4811" target="_blank" class="phonebox"><h6>Phone Number</h6>514 557 4811</a>

<h2>NEED HELP?</h2>
Have you run into an issue with our app? do you have questions for us?

<a href="mailto:help@mindplan.me" target="_blank" class="emailbox"><h6>Email Address</h6>help@mindplan.me</a>
<a href="tel:514 557 4811" target="_blank" class="phonebox"><h6>Phone Number</h6>514 557 4811</a>
      </div>

    </div>
  </div>



<footer class="full navy">
  <div class="row top-150 bottom-100">
    <div class="columns small-6 center">
      
      <p class="mail"><a class="logo" href="/"><span class="i-mp_icon"></span></a><a href="mailto:hello@mindplan.me" target="_blank">hello@mindplan.me</a></p>
      <p class="copy top-30">Copyright © 2014 MindPlan Inc. <br>
All rights reserved.  Canada patents pending MindScan <br>
is a Canada registered trademark of MindPlan Inc.</p>
    </div>
    <div class="columns small-3">
      <?php dynamic_sidebar("Footer Left"); ?>
    </div>
    <div class="columns small-3">
      <?php dynamic_sidebar("Footer Right"); ?>
    </div>
    
  </div>
</footer>

<?php 
endwhile; 
get_footer("home"); 
?>
 