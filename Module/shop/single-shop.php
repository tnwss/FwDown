<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mylove
 */
get_header();
?>
<style>
  .newbg {
    background-size: cover; /* 宽度拉满，保持比例 */
    background-repeat: no-repeat; /* 不重复 */
    background-position: center center; /* 图片居中对齐 */
  }
</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge" style="background: #317f80;">
    <div class="uk-position-cover" style="background: #317f80;"></div>
    <div class="uk-container  uk-container-xlarge  uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
           <div class="home-bg">
        <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'Module/shop/content', get_post_type() );
                // If comments are open or we have at least one comment, load up the comment template.
                //if ( comments_open() || get_comments_number() ) :comments_template();
                         //endif;
            endwhile; // End of the loop.
        ?>
        </div>
    </div>
</div>
    </div>
</div>


<?php
get_footer();
