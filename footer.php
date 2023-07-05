<?php

/**
 * The footer for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @pnk https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mp_paints
 */
?>
<style>
.footer-bg {
    position: relative;
    background: url(../img/footer-bg.png) no-repeat;
    background-position: center top;
    background: #272b81;
    z-index: 88;
}
.footer-menu ul>li{
    list-style: none;
}
.footer-padding{
    margin: 0 auto;
    padding-top: 56px;
    padding-bottom: 56px;
}
.footer-menu ul>li>a {
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 22px;
    cursor: default;
}
.uk-accordion-content p>a {
    display: inline-block;
    font-size: 14px;
    color: rgba(255,255,255,0.35);
    line-height: 0px;
    margin-bottom: 12px;
    position: relative;
}
.uk-accordion-content p {
    margin: 0;
}
</style>
<div class="footer-bg footer-padding">
    <div class="footer-boder">
    <div class="uk-container">
        <div class="uk-child-width-1-5@m uk-grid-small" uk-grid>
            <div class="footer-menu">
                <ul class="uk-padding-remove-left" <?php if(wp_is_mobile()){ ?>uk-accordion<?php } ?>>
                    <li>
                    <a class="<?php if(wp_is_mobile()){ ?>uk-accordion-title<?php } ?>" href="#">关注我们</a>
                    <div class="uk-accordion-content">
                    <p><a href="/leixing/jinghuaqi">空气净化器系列</a></p>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul class="uk-padding-remove-left" <?php if(wp_is_mobile()){ ?>uk-accordion<?php } ?>>
                    <li>
                    <a class="<?php if(wp_is_mobile()){ ?>uk-accordion-title<?php } ?>" href="#">加入我们</a>
                    <div class="uk-accordion-content">
                    <p><a class="footer_nav_menu_item" href="https://wp.tmall.com/?spm=a1z10.3-b-s.w20166435-23624452710.5.75765d30W0S7jn&amp;scene=taobao_shop">天猫旗舰店</a></p>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul class="uk-padding-remove-left" <?php if(wp_is_mobile()){ ?>uk-accordion<?php } ?>>
                    <li>
                    <a class="<?php if(wp_is_mobile()){ ?>uk-accordion-title<?php } ?>" href="#">联系我们</a>
                    <div class="uk-accordion-content">
                    <p><a href="/about.html#Brand">企业介绍</a></p>
                    <p><a href="/about.html#Milestone">发展历程</a></p>
                    <p><a href="/about.html#Award">获得荣耀</a></p>
                    <p><a href="/about.html#Map">全球布局</a></p>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                 <ul class="uk-padding-remove-left" <?php if(wp_is_mobile()){ ?>uk-accordion<?php } ?>>
                    <li>
                    <a class="<?php if(wp_is_mobile()){ ?>uk-accordion-title<?php } ?>" href="#">法律信息</a>
                    <div class="uk-accordion-content">
                    <p>客服与售后：</br>400-8083-081</p>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <ul class="uk-padding-remove-left" <?php if(wp_is_mobile()){ ?>uk-accordion<?php } ?>>
                    <li>
                    <a class="<?php if(wp_is_mobile()){ ?>uk-accordion-title<?php } ?>" href="#">扫码关注</a>
                    <div class="uk-accordion-content">
                        <p class="wx-gzh"><img data-src=""  alt="微信公众号" uk-img></p>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-logo">
        <div class="uk-text-center">

        </div>
    </div>
</div>

<!--这个是移动端导航-->
<div id="offcanvas-reveal" uk-offcanvas="mode: slide; overlay: true">
		<div class="uk-offcanvas-bar">
			<button class="uk-offcanvas-close" type="button" uk-close></button>
			<div class="uk-wiph-1-2@s uk-wiph-2-5@m uk-margin">
			<ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
		               	<?php wp_nav_menu( array(   
									'theme_location' => 'menu-header',
									'container' => false,
									'container_class' => '', //最外层容器class名  
									'container_id'    => '',//最外层容器id值   
									'items_wrap' => '%3$s',
									'depth' => 0
						));?> 
			</ul>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>