<?php
/**
 * THIS IS CONPANY PAGE
 */

get_header();
?>

<style>
.about-intro p {
    font-size: 18px;
    line-height: 2;
    color: #666;
}
.w101-strategy-desc {
    font-size: 16px;
    line-height: 1.576;
    color: rgba(255, 255, 255, 0.85);
}
.time-axis {
    background-color: #f2f6f9;
}
.w101-time-axis-item {
    position: relative;
    width: 100%;
    height: 208px;
    text-align: center;
}

.w101-time-axis-title {
    display: block;
    position: absolute;
    z-index: 2;
    bottom: 50%;
    width: 100%;
    max-height: 50%;
    font-size: 24px;
    line-height: 24px;
    padding: 16px 16px 64px;
    color: #024886;
}

.w101-time-axis-desc {
    display: block;
    position: absolute;
    z-index: 1;
    top: 50%;
    width: 100%;
    max-height: 50%;
    font-size: 16px;
    line-height: 24px;
    padding: 16px;
    color: #333333;
    border-top: 1px solid #d9d9d9;
}
 .w101-time-axis-title:before {
    display: block;
    content: '';
    position: absolute;
    bottom: -3px;
    left: 50%;
    margin-left: -3px;
    width: 6px;
    height: 6px;
    border-radius: 3px;
    background-color: #EE922B;
}
.w101-time-axis-title:after {
    display: block;
    content: '';
    position: absolute;
    width: 2px;
    height: 24px;
    background-color: #EE922B;
    bottom: 24px;
    left: 50%;
    margin-left: -1px;
    border-radius: 1px;
}
.w101-time-axis-desc > span {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    word-break: break-word;
    white-space: normal;
    -webkit-line-clamp: 3;
}
@media screen and (max-width:760px){
.w101-strategy-desc {
    font-size: 12px;
    line-height: 1.576;
    color: rgba(255, 255, 255, 0.85);
}
}
</style>
<!--背景图片-->
<div class="relative uk-inline page-bg uk-light uk-text-center uk-width-1-1">
    <img src="<?php echo fw_get_opt('company_bg_img');?>" style="width:100%">
</div>

<div class="pd15 single-bg">
    <div class="uk-container uk-container-xlarge">
        <ul class="uk-breadcrumb"><li class="crumb-item"><a href="<?php echo home_url();?>">Home</a></li><li class="current"><span>About us</span></li></ul>
 </div>
</div>


<!--四个服务-->

<div class="home-bg uk-section">
    <div class="uk-container uk-container-large">
        <div class="w104-meta">
            <div class="meta-wrap w104-wrapper">
                <ul>
                   <?php echo fw_get_opt('home_four_youshi');?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--公司简介-->
<div class="home-bg ">
    <div class="uk-container uk-container-large">
        <div class="about-intro">
            <p>
                <?php echo fw_get_opt('about_us_text');?>
            </p>
        </div>
    </div>
</div>

<!--公司图片-->
<div class="home-bg  uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
        <li>
            <div class="uk-panel">
                <img src="<?php echo fw_get_opt('about_us_img1');?>" alt="">
            </div>
        </li>
         <li>
            <div class="uk-panel">
                <img src="<?php echo fw_get_opt('about_us_img2');?>" alt="">
            </div>
        </li>
         <li>
            <div class="uk-panel">
                <img src="<?php echo fw_get_opt('about_us_img3');?>" alt="">
            </div>
        </li>
         <li>
            <div class="uk-panel">
                <img src="<?php echo fw_get_opt('about_us_img4');?>" alt="">
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
    </div>
</div>


<!--背景简介-->
<div class="uk-section-default uk-light">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php echo fw_get_opt('about_us_bg');?>);">
        <div class="uk-container uk-container-large uk-text-center">
            <p class="uk-h3"><?php echo fw_get_opt('about_us_bg_title');?></p>
            <div class="w101-strategy-desc">
               <?php echo fw_get_opt('about_us_bg_des');?>
            </div>
        </div>
    </div>
</div>

<!--专利图片-->
<div class="uk-section">
	<div class="uk-container uk-container-large">
		<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

			<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
				<li>
					<div class="uk-panel uk-background-muted">
						<img src="<?php echo fw_get_opt('zhuanli_img1');?>" alt="">
					</div>
				</li>
				<li>
					<div class="uk-panel uk-background-muted">
						<img src="<?php echo fw_get_opt('zhuanli_img2');?>" alt="">
					</div>
				</li>
				<li>
					<div class="uk-panel uk-background-muted">
						<img src="<?php echo fw_get_opt('zhuanli_img3');?>" alt="">
					</div>
				</li>
				<li>
					<div class="uk-panel uk-background-muted">
						<img src="<?php echo fw_get_opt('zhuanli_img4');?>" alt="">
					</div>
				</li>
				<li>
					<div class="uk-panel uk-background-muted">
						<img src="<?php echo fw_get_opt('zhuanli_img5');?>" alt="">
					</div>
				</li>
			</ul>

			<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
				uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
				uk-slider-item="next"></a>

		</div>
	</div>
</div>

<!--发展历程-->
<div class="uk-section time-axis">
	<div class="uk-container uk-container-large uk-text-center">
		<div class="home-title uk-padding">
			<h3>HISTORICAL PROCESS</h3>
		</div>
		<div class="uk-position-relative uk-visible-toggle uk-margin-top" tabindex="-1" uk-slider>
			<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-4@m">
				<li>
					<div class="w101-time-axis-item">
						<div class="w101-time-axis-title">
							<span>2019</span>
						</div>
						<div class="w101-time-axis-desc">
							<span>The group company is listed in Hong Kong with a market value of 100 billion</span>
						</div>
					</div>
				</li>
				<li>
					<div class="w101-time-axis-item">
						<div class="w101-time-axis-title">
							<span>2020</span>
						</div>
						<div class="w101-time-axis-desc">
							<span>Pet Life Pavilion was founded</span>
						</div>
					</div>
				</li>
				<li>
					<div class="w101-time-axis-item">
						<div class="w101-time-axis-title">
							<span>2020</span>
						</div>
						<div class="w101-time-axis-desc">
							<span>Pet Life Pavilion was founded</span>
						</div>
					</div>
				</li>
				<li>
					<div class="w101-time-axis-item">
						<div class="w101-time-axis-title">
							<span>2020</span>
						</div>
						<div class="w101-time-axis-desc">
							<span>Pet Life Pavilion was founded</span>
						</div>
					</div>
				</li>
				<li>
					<div class="w101-time-axis-item">
						<div class="w101-time-axis-title">
							<span>2020</span>
						</div>
						<div class="w101-time-axis-desc">
							<span>Pet Life Pavilion was founded</span>
						</div>
					</div>
				</li>
			</ul>

			<a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous
				uk-slider-item="previous"></a>
			<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
				uk-slider-item="next"></a>

		</div>
	</div>
</div>
<?php
get_footer();