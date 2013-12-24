<?php
/**
 * Template Name: Secondary Page
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
      <div id="internal-main">
        <article id="internal-main-content" class="secondary">
          <?php the_content(get_the_ID()); ?>
        </article>
      </div>
      <?php if(get_field('has_sidebar')){ ?>
      <aside id="internal-sidebar">
        <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_1');
      $copy = get_field('copy_1');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
    </div>
      </aside>
      <?php } ?>
    </div>
  </div>
  <?php endwhile; ?>

</div>
<?php get_footer(); ?>