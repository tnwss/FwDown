
<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fwdown
 */
?>
<style>
.single-item{
    padding: 38px;
    background: rgb(0 0 0 / 46%);
    border-radius: 8px;
}
.single-content img{
    margin: 0 auto;
}
.single-content {
    margin-top: 60px;
}
</style>
<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1">
            <div class="single-item">
                <div class="single-title uk-text-center">
                         <h2><?php the_title();?><h2>
                </div>
                <div class="single-time  uk-text-center">
                    <span><?php echo get_the_date('Y-m-d'); ?></span>
                </div>
                <div class="single-content">
                     <?php the_content();?>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>


