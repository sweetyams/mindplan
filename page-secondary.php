<?php
/*
Template Name: Secondary Pages
*/
get_header("home"); 
if ( have_posts() ) :
while (have_posts()) : the_post(); 
$url = get_template_directory_uri();
?>

<div class="full-width menu-top gray5">
	
	<div class="row" ng-controller="MenuCtrl">
    <div class="small-centered columns small-12">
      
      <ul class="nav">
           <li class="link"><a href="/client">Clients</a></li>
           <li class="link"><a href="/client">Therapists</a></li>
           <li class="link"><a href="/journal">Journal</a></li>
      </ul>

      <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
        
    
      <ul class="menu-right"> 
          <li><a  class="button small joinus button-navy hover-blue text-white" href="http://app.mindplan.me/#/join/start">Join Now</a></li>
          <li class="link"><a href="http://app.mindplan.me/#/signin">Sign In</a></li>
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
endif;
get_footer("home"); 
?>
 