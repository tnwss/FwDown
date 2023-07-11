<?php

/**
 * fwdown functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FwDown
 */


if (!function_exists('FwDown_setup')) :
	function FwDown_setup(){
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'menu-header' => esc_html__('顶部菜单', 'fwdown'),
			'menu-footer' => esc_html__('页脚菜单', 'fwdown'),
		));
		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');
	}
	add_action('after_setup_theme', 'FwDown_setup');
endif;


//俺需要加载JS/CSS文件
function fwdown_scripts() {
	$url = get_template_directory_uri();
	$blog_title = get_bloginfo('name');
	$version = '1.21';
	$logged = $user_id = 0;
	$user_avatar='';
	$user_name='';
	//加载js
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'layer', $url .'/Static/js/layer.js' , array(), $version, true );
	wp_enqueue_script('login', $url . '/Static/js/login.js', array('jquery'), $version, true);
	wp_enqueue_script('base', $url . '/Static/js/base.js', array(), $version, true);

	if (is_home()) {
        wp_dequeue_script('plugin-script'); // 替换 'plugin-script' 为你想要移除的插件脚本的句柄
    }

	//加载css文件
	wp_enqueue_style( 'style', $url.'/style.css',array(),$version,false );
	wp_enqueue_style( 'moblie', $url.'/Static/css/moblie.css',array(),$version,false );
	
	  if (is_home()) {
        wp_dequeue_style('tdvb-td-viewer-style-css'); // 替换 'tdvb-td-viewer-style-css' 为你想要移除的插件样式的句柄
        wp_deregister_style('tdvb-td-viewer-style-css');
    }
	 //登陆用户信息
    if(is_user_logged_in()){
        $logged = 1;
        $user_id = get_current_user_id();
        $user_name = get_the_author_meta('display_name',$user_id);
        $avatar_url = get_user_meta( $user_id, 'avatar', true );
        if ( $avatar_url ) {
            $user_avatar =  $avatar_url;
        }else{
            $user_avatar =  $url .'/Static/img/avatar1.svg';
        }
    }
	$data = array(
	    'ajax_url'=> admin_url('admin-ajax.php'),
		'theme_url'=>$url,
		'web_title' =>$blog_title,
		'home_url'=>home_url('/'),
		'user_id'=>$user_id,
		'user_name' =>$user_name,
		'user_img' => $user_avatar,
		
		'nonce' => wp_create_nonce($user_id),
	);
	
	//脚本化文件
	wp_localize_script('jquery', 'fwdown', $data);
	
}
add_action( 'wp_enqueue_scripts', 'fwdown_scripts' );

function exclude_plugin_css_from_homepage() {
    if (is_home()) {
        wp_dequeue_style('tdvb-td-viewer-style'); // 替换 'tdvb-td-viewer-style' 为你想要移除的插件样式的句柄
        wp_deregister_style('tdvb-td-viewer-style');
    }
}
add_action('wp_enqueue_scripts', 'exclude_plugin_css_from_homepage', 9999);

//后台交互
require get_template_directory() . '/Admin/functions-admin.php';

//增加产品类型
require get_template_directory() . '/Module/shop/shop-main.php';

//创建自定义页面
require get_template_directory() . '/Inc/function-page.php';

//定义导航信息
require get_template_directory() . '/Inc/function-main.php';

//定义内页
require get_template_directory() . '/Inc/function-single.php';


//增加文章自定义字段（metabox）
require get_template_directory() . '/Module/post/post-metabox.php';

//后台设置
require get_template_directory() .'/Setting/options-framework.php';



