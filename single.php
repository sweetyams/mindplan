<?php
get_header("home"); 
$url = get_template_directory_uri();
$category = get_the_category();
$cat_id = $category[0]->cat_ID;
$slug = 'category_' . $cat_id;
$cat_img = get_field('cat_full',$slug);

$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];

if($thumb_url){
  $bg = $thumb_url;
} else {
  $bg = $cat_img;
}


?>
<?php while (have_posts()) : the_post(); ?>

<div class="full navy single-header" style="background:url(<?=$bg?>);background-size:cover;">

  <div class="row">
    <div class="small-12 columns">
      <div class="home-menu">
        <div class="left">
          <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
        </div>
        <ul class="social right">
          <li><a target="blank" href="http://facebook.com/myndplan" class="link"><span class="i-facebook"></span></a></li>
          <li><a target="blank" href="http://twitter.com/myndplan" class="link"><span class="i-twitter"></span></a></li>
          <li><a target="blank" href="http://instagram.com/myndplan" class="link"><span class="i-instagram"></span></a></li>
<!--           <li><a class="button small button-white text-navy hover-teal htext-white">Subscribe</a></li>
 -->        </ul>

      </div>
    </div>
  </div>

    <?php
    $previous_post = get_previous_post();
        if ( is_a( $previous_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $previous_post->ID ); ?>" class="prevnext prev button small button-transparent-black text-white "><span class="i-mp_l-left"></span></a>
    <?php 
    }
    $next_post = get_next_post();
        if ( is_a( $next_post , 'WP_Post' ) ) { ?>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="prevnext next button small button-transparent-black text-white right"><span class="i-mp_l-right"></span></a>
        <?php } ?>

  <div class="row">
    <div class="small-12 columns center header-contents">
      <div class="vert-out"><div class="vert-in">
        <h6 class="cat top-60"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a>
            </h6>
        <h1 class="entry-title top-20"><?php the_title(); ?></h1>
        <div class="post-info top-10">
          <h6 class="date"><?php the_time('M j, Y'); ?></h6>
          <h6 class="read"><?php post_read_time(); ?></h6>
        </div>
      </div></div>
    </div>
  </div>
</div>

<div class="full white bottom-20 single-main">
  <div class="row">
    <div class="small-12 medium-8 large-7 small-centered columns white blog-content bottom-30">
  
      <div class="top-40 bottom-40">
      </div>
      <div class="single-content">
      <?php the_content(); ?>
      </div>
      
      
      <div class="comments top-40">
        <?php comments_template(); ?>
      </div>

    </div>
  </div>
</div>
<div class="white full">
  <div class="row">
    <div class="small-12 medium-8 large-7 small-centered columns white blog-content bottom-30">
      <div class="author bottom-100">
        <?php $user_id = get_the_author_meta( 'id' ); 
          $user = 'user_' . $user_id;
         $author_image = get_field('profile_photo', $user); 
        ?>
        <img class="author-image" src="<?=$author_image?>"/>
        <div class="author-info">
          <h6>Written By</h6>
          <h3 class="author"><?php echo get_the_author_meta( 'display_name' ); ?></h3>
          <p><?php echo get_the_author_meta( 'description' ); ?></p>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="navy full">
  <div class="row">
    <div class="small-12 medium-10 large-9 small-centered columns blog-content bottom-30">
      <div class="single-form">
          <h3 class="bottom-30 top-40">Mental health tips and tricks.<br>Delivered weekly.</h3>
          <?php echo do_shortcode("[mc4wp_form id='5']"); ?>
          <h6 class="top-40 bottom-30">AMAZING CONTENT, AND ONLY ONE CLICK TO UNSUBSCRIBE</h6>
        </div>

    </div>
  </div>
</div>


<div class="full single-bar">
  <div class="row">
    <div class="small-12 columns">
      <div class="left logo">
        <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
      </div>

      <div class="center socialshares">
          <?php echo do_shortcode('[et_social_follow icon_style="simple" icon_shape="rounded" icons_location="left" col_number="2" outer_color="dark" network_names="true"]'); ?>
      </div>

      <div class="right subscribe">
        <?php echo do_shortcode("[mc4wp_form id='5']"); ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; // End the loop ?>
<?php get_footer('home'); ?>