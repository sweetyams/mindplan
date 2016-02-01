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
           <li class="link"><a href="/journal">Journal</a></li>
      </ul>

      <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
        
    
      <ul class="menu-right"> 
        <li><a  class="button small joinus button-transparent-white hover-blue text-white" href="http://app.mindplan.me/#/join/start">Join Now</a></li>
        <li class="link"><a href="http://app.mindplan.me/#/signin">Sign In</a></li>
      </ul>
     
    </div>
</div>
</div>

<div class="full gray5 top-100 bottom-100">
  <div class="row">
    <div class="small-12 small-centered columns">
      <h2 class="blogs-title">Journal</h2>

      <div class="connect right">
      <?php echo do_shortcode("[mc4wp_form id='68']"); ?>
    </div>
    </div>
  </div>
</div>

<div class="white">
  <div class="row">
    <div class="columns small-12 small-centered end top-60 bottom-100">


<?php $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts ORDER BY post_date DESC"); ?>
<?php foreach($years as $year) : ?>
    <h2 class="blog-year"><?php echo $year; ?></h2>

    <ul>
      <?php query_posts('year='.$year); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; endif; ?>
    </ul>
<?php endforeach; ?>


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
get_footer("home"); 
?>