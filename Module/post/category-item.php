<?php
/**
 * Template part for displaying category content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package islonely
 */
?>
 <div>
    <a href="<?php the_permalink(); ?>">
            <div class="meta">
                <span><?php echo get_the_date('m/d'); ?></span>
            </div>
            <div class="cover">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                }
                ?>
            </div>
            <div class="intro">
                <h3><?php the_title(); ?></h3>
                <span>
                    <i class="w104-iconfont icon-arrow-right-down-line"></i>
                </span>
            </div>
        </a>
    </div>