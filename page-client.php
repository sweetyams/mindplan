<?php
/*
Template Name: Client Home
*/
get_header("home"); 
if ( have_posts() ) :
while (have_posts()) : the_post(); 
$url = get_template_directory_uri();
?>

<div class="full hero-client">
  <div class="row">
    <div class="small-12 columns">
      <nav class="menu-home">
        <a class="logo" href="/"><span class="i-mp_logo"></span></a>

        <ul class="menu-right"> 
          <li class="link"><a href="/therapist">Therapists</a></li>
          <li class="link"><a href="/journal">Journal</a></li>
          <li class="link"><a ui-sref="signin" href="http://app.mindplan.me/#/signin">Sign In</a></li>
          <li><a  class="button small joinus text-white button-transparent-white hover-blue" href="http://app.mindplan.me/#/join/start">Join Now</a></li>
        </ul>
      </nav>  
    </div>
  </div>


  <div class="row">
    <div class="columns small-12 textleft">
      <div class="vert-out"><div class="vert-in">
      <h1 class="top-40">LOOKING FOR POSITIVE CHANGE?</h1>
      <h5 class="subtitle bottom-50">Start by Nourishing Your Mind</h5>
      <a href="http://app.mindplan.me/#/join/start" class="button button-hero">Join our Beta</a>
      </div></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="columns small-12 center top-100 bottom-100">
    <h6 class="bottom-30">HOW IT WORKS</h6>
    <h1>REAL CHANGE REQUIRES<br>UNDERSTANDING AND ACTION</h1>

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

    <h5 class="subtitle top-40">Explore your strengths and weaknesses</h5>

  </div>
</div>

<div class="full navy hideover">
  <div class="row">
    <div class="columns small-8 top-100 bottom-100">
      <h1>THE MINDSCAN</h1>
      <h5 class="subtitle">Evaluate your mental health</h5>
      <p>Our scans gather information about your health behaviors, psychological symptoms, coping skills, and relationships. They provide scores on a wide variety of characteristics, indicating strengths and weaknesses that are relevant to your happiness and well being.</p>
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
      <h1>RESULTS</h1>
      <h5 class="subtitle">Get a clear picture of the facts</h5>
      <p>You get more than just numbers. We base our comparisons on data from a large sample of people gathered over 15 years - real people with a wide variety of mental health problems who were all working in therapy to improve themselves. You'll get useful charts along with a detailed, personalized narrative report describing your results. </p>

    </div>
  </div>
  <div class="resultsplace">
  <ul class="results wp bottom-50">
    <li> 
      <h6 class="title">Anxiety</h6>
      <img class="chart" src="<?= $url ?>/svg/chart1.svg">
      <div class="score">
        <h2>70</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Sleep</h6>
      <img class="chart" src="<?= $url ?>/svg/chart3.svg">
      <div class="score">
        <h2>43</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Depression</h6>
      <img class="chart" src="<?= $url ?>/svg/chart2.svg">
      <div class="score">
        <h2>75</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li> 
      <h6 class="title">Preoccupation</h6>
      <img class="chart" src="<?= $url ?>/svg/chart1.svg">
      <div class="score">
        <h2>72</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Phobia</h6>
      <img class="chart" src="<?= $url ?>/svg/chart3.svg">
      <div class="score">
        <h2>46</h2>
        <h6>Your Score</h6>
      </div>
      <img class="text" src="<?= $url ?>/svg/text.svg">
    </li>
    <li>
      <h6 class="title">Motivation</h6>
      <img class="chart" src="<?= $url ?>/svg/chart2.svg">
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
      <h1 class="bottom-10">JOIN OUR BETA</h1>
      <p class="bottom-50">Want to see more? Interested in participating?</p>

	  <a href="http://app.mindplan.me/#/join/start" class="button button-white text-blue hover-darkblue htext-white">Join Our Beta</a>

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
    <div class="columns small-2">
      <?php dynamic_sidebar("Footer Left"); ?>
    </div>
    <div class="columns small-2">
      <?php dynamic_sidebar("Footer Right"); ?>
    </div>
    <div class="columns small-2">
      <ul>
        <li class="social"><a href="https://twitter.com/mymindplan" target="_blank"><span class="i-twitter"></span></a></li>
        <li class="social"><a href="https://facebook.com/mymindplan" target="_blank"><span class="i-facebook"></span></a></li>
      </ul>
    </div>
    
  </div>
</footer>

<?php 
endwhile; 
endif;
get_footer("home"); 
?>
 