<?php
/*
Template Name: Therapist Home
*/
get_header("home"); 
while (have_posts()) : the_post(); 
$url = get_template_directory_uri();
?>

<div class="full hero-therapist">
  <div class="row">
    <div class="small-12 columns">
      <nav class="menu-top">
        <a class="logo" href="/"><span class="i-mp_logo"></span></a>

        <ul class="menu-right"> 
           <li class="link"><a href="/client">Clients</a></li>
           <li class="link"><a href="/blog">Blog</a></li>
          <li class="link"><a href="http://app.mindplan.me/#/signin">Sign In</a></li>
          <li><a  class="button joinus text-white button-transparent-white hover-blue" href="http://app.mindplan.me/#/join/start">Join Now</a></li>
        </ul>
      </nav>  
    </div>
  </div>


  <div class="row">
    <div class="columns small-12 center">
      <div class="vert-out"><div class="vert-in">
      <h1 class="top-40">IT’S TIME FOR A REAL CHANGES NEW</h1>
      <h5 class="subtitle bottom-50">Have a look at what we can help you do for your clients</h5>
      <a href="#join" class="button button-hero">Request an Invitation</a>
      </div></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="columns small-12 center top-100 bottom-100">
    <h6 class="bottom-30">HOW IT WORKS</h6>
    <h1>IF YOU ARE GOING TO WORK WITH THE HUMAN MIND<br>YOU BETTER HAVE A POWERFUL SUITE OF TOOLS </h1>

    <ul class="features top-30">
      <li>
        <h6>THE MINDSCAN</h6>
        <img src="<?= $url ?>/svg/mindscan.svg">
      </li>
      <li>
        <h6>Results</h6>
        <img src="<?= $url ?>/svg/results.svg">
      </li>
      <li>
        <h6>Your Guide</h6>
        <img src="<?= $url ?>/svg/guide.svg">
      </li>
      <li>
        <h6>Treatment Map</h6>
        <img src="<?= $url ?>/svg/treatment.svg">
      </li>
    </ul>

    <h5 class="subtitle top-40">We can all do a lot better with the right help</h5>

  </div>
</div>

<div class="full navy hideover">
  <div class="row">
    <div class="columns small-8 top-100 bottom-100">
      <h1>Enhanced Intake</h1>
      <h5 class="subtitle">Evaluate your clients mental health</h5>
      <p>We provide a convenient, comprehensive assessment battery built to expedite your intake process. Our MindScan provides immediate feedback to both you and your clients, helping you to focus more quickly on critical issues while giving you time to establish a therapeutic relationship.</p>
      <ul class="devices">
        <li><span class="i-mp_i-imac"></span></li>
        <li class="inactive"><span class="i-mp_i-iphone"></span><span class="hover">Coming Soon</span></li>
        <li class="inactive"><span class="i-mp_i-ipad"></span><span class="hover">Coming Soon</span></li>
      </ul>
    </div>
    <div class="columns small-4">
      <ul class="scans">
        <li>
          <span class="icon i-mp_i-intake"></span>
          <h6>Intake</h6>
          <p class="hover">Treatment history and general health</p>
        </li>
        <li>
          <span class="icon i-mp_i-health"></span>
          <h6>Health</h6>
          <p class="hover">Health attitudes and behaviors</p>
        </li>
        <li>
          <span class="icon i-mp_i-personality"></span>
          <h6>Personality</h6>
          <p class="hover">Personality and mental health</p>
        </li>
        <li>
          <span class="icon i-mp_i-work"></span>
          <h6>Work</h6>
          <p class="hover">Workplace support and satisfaction</p>
        </li>
      </ul>
    </div>

  </div>
</div>

<div class="full hideover">
  <div class="row">
    <div class="columns small-8 top-100 bottom-30">
      <h1>Detailed Statistics & Diagnostics</h1>
      <h5 class="subtitle">Get a clear picture of the facts</h5>
      <p>Results for the Scan are broken down by individual scales and presented alongside relevant patient norms. Want to compare results to non-patients instead of patients? Just click and its done. Diagnostics are provided to help you spot critical issues, predict relapse risk, and estimate a wide range of outcomes. </p>

    </div>
  </div>
  <div class="resultsplace">
  <ul class="results wp therapist bottom-50">
    <li> 
      <h6 class="title">Anxiety</h6>
      <img class="chart" src="<?= $url ?>/svg/bar1.svg">
      <div class="score">
        <h2>70</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Sleep</h6>
      <img class="chart" src="<?= $url ?>/svg/bar3.svg">
      <div class="score">
        <h2>43</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Depression</h6>
      <img class="chart" src="<?= $url ?>/svg/bar2.svg">
      <div class="score">
        <h2>75</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li> 
      <h6 class="title">Preoccupation</h6>
      <img class="chart" src="<?= $url ?>/svg/bar1.svg">
      <div class="score">
        <h2>72</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Phobia</h6>
      <img class="chart" src="<?= $url ?>/svg/bar3.svg">
      <div class="score">
        <h2>46</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Motivation</h6>
      <img class="chart" src="<?= $url ?>/svg/bar2.svg">
      <div class="score">
        <h2>71</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
  </ul>
  </div>

</div>

<div class="full blue" id="join">
  <div class="row">
    <div class="columns small-12 top-150 bottom-150 center">
      <h6 class="bottom-30">Launching Soon</h6>
      <h1 class="bottom-10">SIGN UP FOR EARLY ACCESS</h1>
      <p class="bottom-50">Want more information and early access?</p>

	  <a href="http://app.mindplan.me/#/join/start" class="button button-white text-blue hover-darkblue htext-white"> </a>

<!--
<form action="//mindplan.us10.list-manage.com/subscribe/post?u=9df2fe12d14107bdc9a913b7d&amp;id=4231cae256" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	
	<div class="input">
		
		<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>
	    
	    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9df2fe12d14107bdc9a913b7d_4231cae256" tabindex="-1" value=""></div>
	    
	    <input style="font-size:16px;" type="submit" value="Request Invite" name="subscribe" id="mc-embedded-subscribe" class="button button-blue text-white hover-white htext-blue">
    </div>
</form>
-->

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
 