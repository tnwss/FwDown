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


<div class="uk-section-default uk-light uk-cover-container uk-section uk-section-xlarge">
    <div class="uk-container uk-container-expand uk-position-relative">
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

<?php
get_footer();