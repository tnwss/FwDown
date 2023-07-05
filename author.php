<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FwDown
 */

get_header();
$user_id = get_query_var('author');
$user_data = get_userdata($user_id);

?>
<p class="user-info-p"><?php echo get_bloginfo( 'name' ); ?> 第 <?php echo $user_data->ID; ?> 号会员</p>

<?php get_footer(); ?>