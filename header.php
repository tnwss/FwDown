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
		$version = '1.19';
			if ($url) {
		wp_enqueue_script('uikit-js', $url . '/Static/js/uikit.min.js', array(), $version, true);
		wp_enqueue_script('uikit-icons', $url . '/Static/js/uikit-icons.min.js', array(), $version, true);
		wp_enqueue_style( 'uikitss', $url.'/Static/css/uikit.min.css',array(),$version,false );
	}
	?>
</head>
<body>

	<div id="page" class="site">
			<div class="head-top">
				<div
					uk-sticky="animation: uk-animation-fade; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
					<nav class="uk-container uk-container-expand" uk-navbar="align: center">
						<div class="nav-overlay uk-navbar-left">
							<a class="uk-navbar-item uk-logo header-logo"
								href="<?php echo get_home_url();?>"><img
									src="<?php echo fw_get_opt('logo');?>" alt="LOGO"></a>
						</div>
						<div class="uk-navbar-right">
							<div>
								<ul class="uk-navbar-nav uk-visible@m">
									<?php wp_nav_menu( array(
									'theme_location' => 'menu-header',
									'container' => false,
									'container_class' => '', //最外层容器class名
									'container_id' => '',//最外层容器id值
									'items_wrap' => '%3$s',
									'fallback_cb' => 'wp_page_menu',
									));?>

								</ul>
							</div>
						</div>
						<div class="nav-overlay uk-margin-left">
							<a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-reveal" uk-navbar-toggle-icon href="#"></a>
						</div>
					</nav>
				</div>
			</div>
