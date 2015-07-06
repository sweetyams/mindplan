<?php
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
<?php while (have_posts()) : the_post(); ?>
<div class="full navy blog-header">

  <div class="row top-100">
    <div class="small-2 columns">
      <?php
        $previous_post = get_previous_post();
        if ( is_a( $previous_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $previous_post->ID ); ?>" class="button small button-transparent-black text-white hover-navy htext-white right">Previous</a>
        <?php } else {  } ?>
    </div>
    <div class="small-8 columns white center top-50 bottom-50 blog-title">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php reverie_entry_meta(); ?>
    </div>
    <div class="small-2 columns">
      <?php
        $next_post = get_next_post();
        if ( is_a( $next_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="button small button-transparent-black text-white hover-navy htext-white">Next</a>
        <?php } ?>
    </div>
  </div>
</div>
<div class="full gray5 bottom-20">
  <div class="row">
    <div class="small-8 small-centered columns white blog-content bottom-30">
      <?php the_content(); ?>
    </div>
  </div>
</div>
<div class="full gray5 bottom-150">
  <div class="row">
    <div class="small-8 small-centered columns white blog-content">
      <?php comments_template(); ?>
    </div>
  </div>
</div>

<?php endwhile; // End the loop ?>
<?php get_footer('home'); ?>