<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soleusair
 */
?>


<!-- COLUMNS 1 -->
<div class="col-lg-4 col-md-6 mb-4">
    <div class="service-box-style1">
        <div class="service-content">
            <div class="service-content-inner">
                <div class="service-content-top">
                    <h3 class="service-title-large"><a href="<?php echo get_the_permalink();?>"><?php the_title();?></a></h3>
                </div>
                <div class="service-content-bottom">
                    <span class="service-title-large-number"><?php echo sprintf('%02d', $counter); ?></span>
                    <p>Our aim is to optimize and improve your supply chain so that we can give you the best service.
                    </p>
                    <a href="services-detail.html" class="site-button-2">View Detail</a>
                </div>
            </div>
        </div>
        <div class="service-media">
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        </div>
    </div>
</div>

