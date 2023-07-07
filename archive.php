<?php
/**
 * Archive Template: Custom Shop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage  FwDown
 * @since Twenty  FwDown
 */
$nub = get_option('posts_per_page',10);
$ipaged = get_query_var('paged') ? get_query_var('paged') : 1;
$ipages = ceil( $wp_query->found_posts / $nub);
get_header();?>

<?php
if ( have_posts() ) {
    
    $post_type = get_post_type();
    
    if ($post_type) {
        
        // 加载自定义文章类型对应的模板文件
        get_template_part( 'Module/'.$post_type.'/archive',$post_type );
        
    } else {
        // 加载默认的归档页面模板
        get_template_part( 'template-parts/content', 'archive' );
    }
} else {
    // 加载未找到文章时的提示信息
    get_template_part( 'template-parts/content', 'none' );
}
?>
<?php
// Load WordPress footer
get_footer(); ?>