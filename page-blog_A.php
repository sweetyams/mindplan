<?php
/*
Template Name: Blog
*/

get_header("homeA"); 
$url = get_template_directory_uri();
?>

<div class="full-width">
  <div class="small-12 medium-12 large-6 columns nomargin">
    <div class="full-height home-image" style="background-image:url('<?php the_field('background'); ?>');background-size:cover;">
      <div class="home-menu">
        <div class="left">
          <a class="logo center" href="/"><span class="i-mp_icon"></span></a> 
          <h6>Blog</h6>
        </div>
        <ul class="social right">
          <li><a target="blank" href="http://facebook.com/myndplan" class="link"><span class="i-facebook"></span></a></li>
          <li><a target="blank" href="http://twitter.com/myndplan" class="link"><span class="i-twitter"></span></a></li>
          <li><a target="blank" href="http://instagram.com/myndplan" class="link"><span class="i-instagram"></span></a></li>
        </ul>
      </div>
      
      <div class="home-form">
        <div class="panel navy">
        <h2 class="bottom-10">Consumer Heal Thyself</h2>
        <h3 class="bottom-20">Helpful news, views, and reviews on <br>the psychology of everything.</h3>
        <?php echo do_shortcode("[mc4wp_form id='5']"); ?>
        <h6 class="top-20">AMAZING CONTENT, AND ONLY ONE CLICK TO UNSUBSCRIBE</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="small-12 medium-12 large-6 columns nomargin">

  <div class="posts-all">
    <div class="posts-header">
      <div class="get-categories">
        <div class="main"><h6>Categories</h6><span class="i-mp_l-down"></span></div>
      <?php
      hierarchical_category_tree( 0 ); // the function call; 0 for all categories; or cat ID  
      function hierarchical_category_tree( $cat ) {
          // wpse-41548 // alchymyth // a hierarchical list of all categories //
        $next = get_categories('hide_empty=false&orderby=name&order=ASC&parent=' . $cat);

        if( $next ) :   
        echo '<ul class="dropdown">'; 
          foreach( $next as $cat ) :
          echo '<li><a href="' . get_category_link( $cat->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $cat->name ) . '" ' . '><h6>' . $cat->name . '</h6></a></li>'; 
          hierarchical_category_tree( $cat->term_id );
          endforeach;    
          echo '</ul>'; 
        endif;
      }  
      ?>
      </div>
    </div>

    <ul class="posts-list">
    <?php
    $args = array( 'posts_per_page' => 10, );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); 
    $excerpt = get_the_excerpt();
    ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
        </a>
        <div class="post-info">
          <h6 class="time"><?php the_time('M j, Y'); ?></h6>
          <h6 class="cat"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a>
    </h6>
    </div>
          <p> <?php echo $excerpt ?> </p>
          
      </li>
    <?php endforeach; 
    wp_reset_postdata();?>

    </ul>

    </div>
  </div>
</div>



<?php 
get_footer("home"); 
?>
 