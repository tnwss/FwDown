<?php

/**
 * The header for our theme
 *
 * @package FwDown
 */
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="applicable-device" content="pc,mobile">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta name="renderer" content="webkit" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php
	$url = get_template_directory_uri();
	$version = '1.21';
	if ( wp_is_mobile() ) {
    // 手机端
    wp_enqueue_script('aq_common', $url . '/Static/wap/js/aq_common.js', array(), $version, true);
    wp_enqueue_script('fwjquery', $url . '/Static/js/common/jquery-1.11.3.min.js', array(), $version, true);
    wp_enqueue_script('swiper-bundle', $url . '/Static/wap/js/swiper-bundle.min.js', array(), $version, true);
	wp_enqueue_script('milo', $url . '/Static/wap/js/milo.js', array(), $version, true);
	wp_enqueue_script('mindex', $url . '/Static/wap/js/index.js', array(), $version, true);
	wp_enqueue_style( 'index-m', $url.'/Static/wap/css/index-m.css',array(),$version,false );
	wp_enqueue_style( 'swiper-bundle', $url.'/Static/wap/css/swiper-bundle.min.css',array(),$version,false );
	wp_enqueue_script('mmain', $url . '/Static/wap/js/main.js', array(), $version, true);
	
} else {
    wp_enqueue_style( 'fwcommon', $url.'/Static/css/common/common.css',array(),$version,false );
	wp_enqueue_style( 'fwindex', $url.'/Static/css/common/index.css',array(),$version,false );
    // 电脑端
    wp_enqueue_script('fwjquery', $url . '/Static/js/common/jquery-1.11.3.min.js', array(), $version, true);
    wp_enqueue_script('piderMediaData', $url . '/Static/js/common/piderMediaData.js', array(), $version, true);
    wp_enqueue_script('index', $url . '/Static/js/common/index.js', array(), $version, true);

}
?>
</head>

<body>
	<?php if (wp_is_mobile()) : ?>
	<!-- 手机端特定的内容 -->
	<div class="top-nav-box">
		<div class="top-nav">
			<a class="logo-game" href="<?php echo home_url(); ?>">	<img src="<?php echo fw_get_opt('logo');?>"></a>
			<div class="nav-more">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="nav-main">
			<div class="nav-link-list">
				<?php
      $menu_items = wp_get_nav_menu_items(2); // 替换为你的菜单ID
      if ($menu_items) {
        foreach ($menu_items as $item) {
          echo '<a href="' . $item->url . '">' . $item->title . '</a>';
        }
      }
    ?>
			</div>
		</div>
	</div>
	<!-- 导航模块 E -->
	<?php else : ?>
	<!-- 电脑端特定的内容 -->
	<div class="main-header menu-slide">
		<a href="<?php echo home_url(); ?>" class="logo-link" title="jdcw">
			<img src="<?php echo fw_get_opt('logo');?>" class="logo" id="logo">
		</a>
		<div class="nav-box">
			<div class="nav-bar">
				<?php
				$menu_items = wp_get_nav_menu_items(2); // 替换为你的菜单ID
				if ($menu_items) {
				    foreach ($menu_items as $item) {
          echo '<a href="' . $item->url . '" class="nav">' . $item->title . '</a>';
        }
      }
    ?>
			</div>
		</div>
		<div class="menu-icon">
			<i class="line line-1"></i>
			<i class="line line-2"></i>
			<i class="line line-3"></i>
			<i class="line line-4"></i>
		</div>
	</div>
	<?php endif; ?>