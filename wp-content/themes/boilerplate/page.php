<?php
/**
 * Template Name: Main Page Template
 *
 * A custom page template with an optional sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div id="internal-wrap">
  
  <!-- Internal Header -->
  <?php include 'internal_header.php';?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
      <div id="internal-main"<?php if(!get_field('has_sidebar')){ ?> class="internal-main-fullwidth"<?php } ?>>
        <nav id="internal-main-nav">
          <ul>
            <?php $sidebar = get_field('left_sidebar'); if($sidebar == 'nav') include('template-child-sib-menu.php'); ?>
            <?php if($sidebar == 'jump'){ ?>
              <script>
              $(document).ready(function(){
                $('#internal-main-content h2').each(function(i,v){
                  $(v).attr('id', 'jump-heading-'+i);
                  $('#internal-main-nav > ul').append('<li><a href="#jump-heading-'+i+'">'+$(v).html()+'</a></li>');
                });
              });
              </script>
            <?php } ?>
          </ul>
        </nav>
        <article id="internal-main-content"
        <?php if(!get_field('has_sidebar')){ ?> class="internal-main-content-fullwidth"<?php } ?>>
          <?php the_content(get_the_ID()); ?>
        </article>
      </div>
      <?php if(get_field('has_sidebar')){ ?>
      <aside id="internal-sidebar">
        <?php
        $rspt = get_field('right_sidebar_promo_tile');
        if($rspt){ ?>
          <div id="internal-sidebar-promo-tile">
          <a href="<?php the_field('link_url', $rspt->ID); ?>"><img src="
            <?php
              the_field('image', $rspt->ID);
            ?>
            "></a>
          </div>
        <?php } ?>
        <?php if(get_field('custom_html')){ ?>
          <div id="internal-sidebar-custom">
            <?php the_field('custom_html'); ?>
          </div>
        <?php } ?>
      </aside>
      <?php } ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>