<style>
    .newbg {
        background-image: url('/wp-content/uploads/2023/07/bg-pheader.jpg');
        background-size: cover;
        /* 宽度拉满，保持比例 */
        background-repeat: no-repeat;
        /* 不重复 */
        background-position: center center;
        /* 图片居中对齐 */
    }

    .tyre-mark-bg {
        position: relative;
        z-index: 1;
    }

    .p-b90 {
        padding-bottom: 90px;
    }

    .p-t120 {
        padding-top: 120px;
    }

    .site-bg-gray {
        background-color: #f2faff;

    }

    img {
        border-style: none;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .section-head.center.wt-small-separator-outer {
        margin-bottom: 50px;
        text-align: center;
        max-width: 710px;
        margin-left: auto;
        margin-right: auto;
    }

    .wt-small-separator {
        font-family: "Oswald", sans-serif;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #ff8a00;
        font-size: 40px;
        line-height: 40px;
        font-weight: 600;
        opacity: 1;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke: 1px #ff8a00;
    }

    .section-head.center.wt-small-separator-outer h2 {
        max-width: 710px;
        margin: 0px auto;
    }

    .section-head .section-head-text {
        font-size: 14px;
    }

    .section-head.left.wt-small-separator-outer p {
        margin-bottom: 40px;
    }

    .section-head.center.wt-small-separator-outer .section-head-text {
        margin: 20px 0px 0px 0px;
    }

    .section-head.center.wt-small-separator-outer .section-head-text {
        max-width: 660px;
        margin-left: auto;
        margin-right: auto;
    }

    .tw-service-icon-box-wrap {
        position: relative;
        padding: 30px 90px 30px 40px;
        margin-top: 50px;
        z-index: 1;
        margin-bottom: 80px;
    }

    .service-icon-box-two {
        position: relative;
        margin-bottom: 5px;
        padding: 20px;
        background-color: #fff;
        transition: all 0.3s linear;
        z-index: 0;
    }

    .service-icon-box-two:hover {
        box-shadow: 0px 0px 50px rgb(30 143 208 / 50%);
        z-index: 999;
    }

    .service-icon-box-two:before {
        width: 8px;
        content: "";
        position: absolute;
        z-index: 1;
        opacity: 0.5;
        left: -8px;
        top: 30px;
        bottom: 30px;
        background-color: #ff8a00;
        transition: all 0.3s linear;
    }

    .service-icon-box-two:hover:before {
        left: 0%;
        opacity: 1;
    }

    .service-icon-box-two .service-icon-box-two-media {
        margin-right: 30px;
        margin-top: 20px;
        float: left;
        width: 70px;
    }

    .service-icon-box-two .service-icon-box-title {
        overflow: hidden;
    }

    .service-icon-box-two .service-icon-box-title .wt-title {
        margin-bottom: 15px;
    }

    .service-icon-box-two .service-icon-box-title p {
        margin-bottom: 0px;
    }

    .tw-service-icon-box-wrap:after {
        position: absolute;
        content: "";
        top: -50px;
        bottom: -50px;
        right: 0px;
        border-style: solid;
        border-color: #ff8a00;
        border-width: 60px 60px 60px 0px;
        left: 25%;
        z-index: -1;
    }

    /* media query */

    @media (max-width: 991px) {

        .section-full.p-t120,
        .section-full.p-b90,
        .section-full.p-tb120 {
            padding-top: 38px;
            padding-bottom: 10px;
        }

        .wt-small-separator {
            font-size: 27px;
            margin-bottom: 10px;
            letter-spacing: 3px;
        }

        .section-head.center.wt-small-separator-outer h2 {
            font-size: 30px;
        }

        .tw-what-wedo-media {
            text-align: center;
            margin-bottom: 30px;
        }

        .tw-service-icon-box-wrap {
            padding-left: 10px;
        }
    }

    @media (max-width: 768px) {
        .section-head.center.wt-small-separator-outer h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        .tw-service-icon-box-wrap {
            margin-bottom: 50px;
        }

        .service-icon-box-two .service-icon-box-title .wt-title {
            padding-right: 0px;
        }
    }

    @media (max-width: 480px) {
        .tw-service-icon-box-wrap {
            padding: 0px 30px 30px 10px;
            margin-bottom: 30px;
        }
    }

    @media (max-width: 400px) {
        .service-icon-box-two .service-icon-box-two-media {
            margin-right: 20px;
            width: 40px;
        }

        .tw-service-icon-box-wrap:after {
            border-width: 30px 30px 30px 0px;
            bottom: 0px;
            top: -30px;
        }
    }

    .service-box-style1 .service-media img {
        width: 100%;
    }

    .service-box-style1 {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .service-box-style1 .service-content {
        left: 0px;
        top: 0px;
        right: 0px;
        bottom: 0px;
        position: absolute;
        width: 100%;
        z-index: 1;
        transition: all 0.8s linear;
    }

    .service-box-style1 .service-content .service-content-inner {
        padding: 20px;
        margin: 20px;
        transition: all 0.8s linear;
        background-color: rgba(11, 47, 68, 0.9);
        position: relative;
        display: table;
        height: 0%;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-top {
        display: table-header-group;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom {
        display: table-cell;
        vertical-align: bottom;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom .service-title-large-number {
        font-size: 40px;
        color: #fff;
        transition: all 0.8s linear;
        font-weight: 600;
        font-family: "Oswald", sans-serif;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom p {
        color: #fff;
        transition: all 0.8s linear;
        margin-bottom: 20px;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom .site-button-2 {
        transition: all 0.8s linear;
    }

    .site-button-2 {
        display: inline-block;
        color: #fff;
        font-size: 18px;
        text-transform: uppercase;
        transition: 0.5s all ease;
        position: relative;
        overflow: hidden;
    }

    .site-button-2:after {
        content: "\f105";
        position: absolute;
        font-family: "FontAwesome";
        left: -20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0px;
        transition: 0.5s all ease;
        opacity: 0;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-top {
        display: table-header-group;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-top .service-title-large {
        text-align: right;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-top .service-title-large a {
        color: #fff;
        transition: all 0.8s linear;
        text-transform: uppercase;
        font-size: 32px;
        line-height: 0.7;
        font-weight: 600;
        font-family: "Oswald", sans-serif;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom {
        display: table-cell;
        vertical-align: bottom;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom .service-title-large-number {
        font-size: 40px;
        color: #fff;
        transition: all 0.8s linear;
        font-weight: 600;
        font-family: "Oswald", sans-serif;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom p {
        color: #fff;
        transition: all 0.8s linear;
        margin-bottom: 20px;
    }

    .site-button-2 {
        display: inline-block;
        color: #fff;
        font-size: 18px;
        text-transform: uppercase;
        transition: 0.5s all ease;
        position: relative;
        overflow: hidden;
    }

    .service-box-style1 .service-content .service-content-inner .service-content-bottom .site-button-2 {
        transition: all 0.8s linear;
    }

    .site-button-2:after {
        content: "\f105";
        position: absolute;
        font-family: "FontAwesome";
        left: -20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 0px;
        transition: 0.5s all ease;
        opacity: 0;
    }

    .service-box-style1 .service-media img {
        width: 100%;
    }

    .service-box-style1:hover .service-content {
        bottom: 40px;
        height: calc(100% - 40px);
    }

    .service-box-style1:hover .service-content .service-content-inner {
        height: 100%;
        background-color: rgba(255, 138, 0, 0.9);
    }

    .service-box-style1:hover .service-content .service-content-inner .service-content-top .service-title-large a {
        color: #0b2f44;
    }

    .service-box-style1:hover .service-content .service-content-inner .service-content-bottom .service-title-large-number {
        color: #0b2f44;
    }

    .service-box-style1:hover .service-content .service-content-inner .service-content-bottom p {
        color: #0b2f44;
    }

    .service-box-style1:hover .service-content .service-content-inner .service-content-bottom p {
        color: #0b2f44;
    }
</style>

<div class="newbg uk-light uk-cover-container uk-section uk-section-xlarge">
    <div class="uk-position-cover" style="background-color: rgba(30, 26, 65, 0.76);"></div>
    <div class="uk-container uk-position-relative">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m uk-text-center">
                <h1>Product</h1>
            </div>
        </div>
    </div>
</div>


<!--内容-->

<div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style1-area tyre-mark-bg">

    <div class="services-gallery-block-outer2">
        <div class="uk-container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>All Product</div>
                </div>
                <h2 class="wt-title">Trusted For Our Product</h2>
                <p class="section-head-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    the standard dummy text ever since the when an printer took.</p>
            </div>
            <!-- TITLE END-->

            <div class="section-content">
                <div class="services-gallery-style1">
                    <div class="uk-child-width-1-3@s" uk-grid>
                        <?php if ( have_posts() ) : ?>
                        <?php $counter = 1;?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style1">
                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <div class="service-content-top">
                                            <h3 class="service-title-large"><a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a></h3>
                                        </div>
                                        <div class="service-content-bottom">
                                            <span class="service-title-large-number">
                                                <?php echo sprintf('%02d', $counter); ?>
                                            </span>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="site-button-2">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-media">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                        <?php $counter++;?>
                        <?php endwhile; ?>

                        <?php else : ?>
                        <p>
                            <?php esc_html_e( 'No posts found.' ); ?>
                        </p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>