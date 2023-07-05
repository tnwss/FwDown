<?php
/**
 * Template Name: 联系我们
 * This is the template 
 * You can customize this file as needed for your plugin's frontend page.
 *
 * @package page
 */

// Load WordPress header
get_header(); ?>

<style>
  .newbg {
    background-image: url('/wp-content/uploads/2023/07/product.webp');
    background-size: cover; /* 宽度拉满，保持比例 */
    background-repeat: no-repeat; /* 不重复 */
    background-position: center center; /* 图片居中对齐 */
  }
</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m">
                     <?php while ( have_posts() ) : the_post(); ?>
        
          <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>
            </div>
        </div>
    </div>
</div>

<?php
// Load WordPress footer
get_footer(); ?>