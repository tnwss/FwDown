<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FwDown
 */

get_header();
?>

<?php
	switch (get_post_type()) {
	    case 'post':
	        get_template_part( 'Module/post/single', 'post');
		//商铺
		case 'shop':
			get_template_part( 'Module/shop/single', 'shop');
			break;

		default:
			//get_template_part( 'template-parts/single', 'default');
		break;
	}

?>

<?php
get_footer();