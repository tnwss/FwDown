<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soleusair
 */
?>
<style>
.product-title h1 {
    font-size: 56px;
    font-weight: bold;
}
.product-content {
    color: #ffffff;
    font-size: 20px;
}
.uk-slider-items img {
    width: 150px;
    height: 150px;
    border: 2px solid #30a490;
    border-radius: 50%;
    padding: 5px;
}
.related-card {
    background-color: rgb(0 0 0 / 15%);
    color: #666;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
}
.related h1 {
    font-weight: 700;
    margin-bottom: 40px;
}
.uk-accordion-title {
    padding: 10px;
    background: rgb(0 0 0 / 15%);
}
</style>
<!-- COLUMNS 1 -->
<div class="product-card uk-flex-middle uk-grid-large" uk-grid>
    <div class="uk-width-1-2@s">
        <model-viewer id="modelViewer" src="<?php echo get_field('3dfile_url');?>" camera-controls="true"   loading="auto" auto-rotate="true"  ar-status="not-presenting" style="width: 100%; height: 560px"></model-viewer>
        <div uk-slider>
    <div class="uk-position-relative">
        <div class="uk-slider-container uk-light">
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m  uk-text-center uk-grid" uk-grid uk-lightbox>
                
                <li>
                    <a  href="https://yootheme.com/site/images/media/yootheme-pro.mp4" data-caption="Video"> <img src="/wp-content/uploads/2023/07/3.jpeg" alt=""></a>
                </li>
                <li>
                    <a  href="https://yootheme.com/site/images/media/yootheme-pro.mp4" data-caption="Video"><img src="/wp-content/uploads/2023/07/3.jpeg" alt=""></a>
                </li>
                <li>
                    <a  href="https://yootheme.com/site/images/media/yootheme-pro.mp4" data-caption="Video"> <img src="/wp-content/uploads/2023/07/3.jpeg" alt=""></a>
                </li>
                <li>
                    <a  href="https://yootheme.com/site/images/media/yootheme-pro.mp4" data-caption="Video"> <img src="/wp-content/uploads/2023/07/3.jpeg" alt=""></a>
                </li>
            </ul>
        </div>

        <div class="uk-hidden@s uk-light">
            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

        <div class="uk-visible@s">
            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>

    </div>
</div>
    </div>
    <div class="uk-width-1-2@s">
        <div class="product-main  uk-padding-large">
            <div class="product-title uk-text-left">
                <h1><?php the_title();?></h1>
            </div>
            <div class="product-content uk-article">
                <?php the_content();?>
            </div>
            <div class="product-item">
                
            </div>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container uk-container-xlarge">
        <div class="uk-text-center related">
            <h1>Related Products</h1>
            <div class="uk-text-center" uk-grid>
    <div class="uk-width-1-3@s">
        <div class="uk-card related-card uk-card-body">
            <model-viewer id="modelViewer" src="http://tx.lovegd.cn/wp-content/uploads/2023/07/flying_car.glb" camera-controls="true"   loading="auto" auto-rotate="true"  ar-status="not-presenting" style="width: 100%; height: 300px"></model-viewer>
            <h4>Near-Shore Tanker (un-loading)</h4>
        </div>
    </div>
    <div class="uk-width-1-3@s">
       <div class="uk-card related-card uk-card-body">
            <model-viewer id="modelViewer" src="http://tx.lovegd.cn/wp-content/uploads/2023/07/flying_car.glb" camera-controls="true"   loading="auto" auto-rotate="true"  ar-status="not-presenting" style="width: 100%; height: 300px"></model-viewer>
            <h4>Near-Shore Tanker (un-loading)</h4>
        </div>
    </div>
    <div class="uk-width-1-3@s">
        <div class="uk-card related-card uk-card-body">
            <model-viewer id="modelViewer" src="http://tx.lovegd.cn/wp-content/uploads/2023/07/flying_car.glb" camera-controls="true"   loading="auto" auto-rotate="true"  ar-status="not-presenting" style="width: 100%; height: 300px"></model-viewer>
            <h4>Near-Shore Tanker (un-loading)</h4>
        </div>
    </div>
</div>
        </div>
    </div>
</div>


<div class="uk-section">
    <div class="uk-container  uk-container-xlarge">
        <ul uk-accordion>
    <li>
        <a class="uk-accordion-title" href="#">Product Parameter</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
</ul>
    </div>
</div>
