<?php
/*
Template Name: Secondary Pages
*/
get_header("home"); 
$url = get_template_directory_uri();
?>

<div class="full-width menu-top navy">
  
  <div class="row" ng-controller="MenuCtrl">
    <div class="small-centered columns small-12">
      
      <ul class="nav">
           <li class="link"><a href="/client">Clients</a></li>
           <li class="link"><a href="/client">Therapists</a></li>
           <li class="link"><a href="/blog">Blog</a></li>
      </ul>

      <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
        
    
      <ul class="menu-right"> 
        <li><a  class="button small joinus button-transparent-white hover-blue text-white" href="http://app.mindplan.me/#/join/start">Join Now</a></li>
        <li class="link"><a href="http://app.mindplan.me/#/signin">Sign In</a></li>
      </ul>
     
    </div>
</div>
</div>

<div class="row blogcontainer">
  <div class="columns small-4 header">
    <div class="background">
      <div class="content">

    <h1 class="top-150">BLOG</h1>
    <ul>
      <li class="social"><a href="https://twitter.com/mymindplan" target="_blank"><span class="i-twitter"></span></a></li>
      <li class="social"><a href="https://facebook.com/mymindplan" target="_blank"><span class="i-facebook"></span></a></li>
    </ul>

    <div class="connect">
      <?php echo do_shortcode("[mc4wp_form id='68']"); ?>
    </div>
      </div>
    </div>
  </div>

  <div class="columns small-8 end top-100 blog-content">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
    
    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    
    <?php endif; // end have_posts() check ?>

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
get_footer("home"); 
?>