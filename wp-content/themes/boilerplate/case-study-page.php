<?php
/**
 * Template Name: Case Study
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
  
  <!-- Large Internal Header -->
  <?php include 'large_internal_header.php';?>

  
  <div id="internal-lower-wrap">
    <div id="internal-lower" class="centered">
    <div id="internal-main-content">
    <div id="fp-testimonials" class="centered">
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_1');
      $copy = get_field('copy_1');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
    </div>
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_2');
      $copy = get_field('copy_2');
      $cta = get_field('cta_2');
      $cta_link = get_field('cta_link_2');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
      <a href="<?php echo $cta_link ?>"><span class="light-grey-button"><?php echo $cta ?></span></a>
    </div>
    <div id="fp-testimonials-seemore">
      <?php
      $header = get_field('header_3');
      $copy = get_field('copy_3');
      $cta = get_field('cta_3');
      $cta_link = get_field('cta_link_3');
      ?>
      <h4><?php echo $header ?></h4>
      <p><?php echo $copy ?></p>
      <a href="<?php echo $cta_link ?>"><span class="light-grey-button"><?php echo $cta ?></span></a>
    </div>
    <!-- <div id="fp-testimonials-logos">
      <img src="<?php bloginfo('template_url'); ?>/images/testimonials-client-logos.jpg">
      <button><?php //arrow button, may indicate that this is a slideshow of images with logos ?></button>
    </div> -->
  </div>
  </div>
</div>
</div>
<?php get_footer(); ?>