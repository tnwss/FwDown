<?php

/**
 * The Footer for our theme
 *
 * @package FwDown
 */
?>
<?php if (wp_is_mobile()) : ?>
<!-- 手机端特定的内容 -->

<?php else : ?>

<div class="wrapper wrapper-8">
    <!--脚部-->
    <div class="footer-bg">
        <div class="footer-main">
            <div class="footer-box">
                <ul class="left-tlist">
                    <li>
                        <p class="li-tit"><a href="javascript:;">关注我们</a></p>
                        <p>
                            <a href="javascript:;">
                                <i class="i-wx"></i>微信
                                <span class="tc-gzh"><img src="/wp-content/themes/FwDown/Static/img/tc-gzh.png"
                                        alt=""></span>
                            </a>
                        </p>
                        <p><a href="//weibo.com/u/3604205173"><i class="i-xlwb"></i>新浪微博</a></p>
                    </li>
                    <li>
                        <p class="li-tit"><a href="javascript:;">加入我们</a></p>
                        <p><a href="//careers.tencent.com/">社会招聘</a></p>
                    </li>
                    <li>
                        <p class="li-tit"><a href="javascript:;">联系我们</a></p>
                        <p><a href="//www.tencent.com/zh-cn/customer-service.html">客户服务</a></p>
                        <p><a href="//www.tencent.com/zh-cn/partnership.html">合作洽谈</a></p>
                    </li>
                    <li>
                        <p class="li-tit"><a href="javascript:;">法律信息</a>
                        <p><a href="//www.tencent.com/legal/html/zh-cn/index.html">知识产权</a></p>
                    </li>
                </ul>
                <div class="right-tcgame">
                    <img src="/wp-content/themes/FwDown/Static/img/logo_1.png" alt="">
                </div>
                <div class="copy-box">
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dot-bar" id="dotBar">
    <i class="dot"></i>
    <i class="dot"></i>
    <i class="dot"></i>
    <i class="dot"></i>
    <i class="dot"></i>
    <i class="dot"></i>
    <i class="dot"></i>
</div>
<div class="video-pop" id="videoPop">
    <div class="inner">
        <!-- <div class="video" id="video"></div> -->
        <video id="movie"
            src="<?php echo fw_get_opt('video1');?>"
            controls poster="/img/video.jpg" loop="true" class="video"
            style="width: auto;height: auto;height: 100%;width: 100%;"></video>
        <div class="close" id="close">
            <i class="line line-1"></i>
            <i class="line line-2"></i>
        </div>
    </div>
</div>
<span class="add" id="adds"></span>
<?php endif; ?>
<?php wp_footer(); ?>
<script>

</script>
</body>
</html>
