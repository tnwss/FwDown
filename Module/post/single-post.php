
<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fwdown
 */
?>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="tm-header-placeholder uk-margin-remove-adjacent" style="height: 140px;"></div>
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>


