<?php
get_header("home"); 
$url = get_template_directory_uri();
?>

<div class="full-width">
  <div class="small-6 columns">
    <div class="full-height">
      <div class="menu">
        <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
        <ul class="social">
          <li><a><span class="i-facebook"></span></a></li>
          <li><a><span class="i-facebook"></span></a></li>
          <li><a><span class="i-facebook"></span></a></li>
        </ul>
      </div>

      <?php echo do_shortcode("[mc4wp_form id='5']"); ?>

    </div>
  </div>
<div class="small-6 columns">

Categories
Search

<ul>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; endif; ?>
    </ul>

</div>
</div>



<?php 
get_footer("home"); 
?>