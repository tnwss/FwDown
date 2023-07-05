<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FwDown
 */

get_header('home');
?>

<?php
// 判断设备类型
if ( wp_is_mobile() ) {
    // 手机端代码
    get_template_part( 'Partials/mobile' );
} else {
    // 电脑端代码
    get_template_part( 'Partials/desktop' );
}
?>

<?php
get_footer('home');
