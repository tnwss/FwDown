<?php
/**
 * Template Name: 电脑首页
 * Description: Custom template for desktop content.
 */

// 在这里可以添加额外的PHP代码，根据需要进行修改

// 获取WordPress头部
// 在这里可以添加自定义的头部内容

?>



<!-- 首屏 -->
<div class="wrapper wrapper-1">
    <div class="bg">
        <img src="<?php echo fw_get_opt('bg1');?>" alt="" class="bg-img">
        <div class="figure"></div>
    </div>
    <div class="bg-video" id="bgVideo">
        <video src="<?php echo fw_get_opt('video1');?>" muted="true" loop="true" autoplay="true" class="video" style="width: auto;height: auto;min-height: 100%;min-width: 100%;"></video>
    </div>
    <div class="text-bar">
        <h1 class="title">
            标题1
        </h1>
        <i class="icon-play" id="iconPlay"></i>
        <p class="desc"><?php echo fw_get_opt('desc1');?></p>
        <div class="dash-bar">
            <i class="dash" data-to="video"></i>
            <i class="dash"></i>
        </div>
    </div>
</div>

<div class="wrapper wrapper-2">
    <div class="sucai"></div>
    <img src="<?php echo fw_get_opt('bg2');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题2
        </h1>
        <div class="desc">
        <?php echo fw_get_opt('desc2');?>
        </div>
        <div class="btn-bar">
        <?php echo fw_get_opt('btn2_code');?>
        </div>
    </div>
</div>

<div class="wrapper wrapper-3">
    <div class="sucai"></div>
    <img src="<?php echo fw_get_opt('bg3');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题3
        </h1>
        <div class="desc">
        <?php echo fw_get_opt('desc3');?>
        </div>
        <div class="btn-bar">
        <?php echo fw_get_opt('btn3_code');?>
        </div>
    </div>
</div>

<div class="wrapper wrapper-4">
    <div class="sucai"></div>
    <img src="<?php echo fw_get_opt('bg4');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题4
        </h1>
        <div class="desc">
        <?php echo fw_get_opt('desc4');?>
        </div>
        <div class="btn-bar">
        <?php echo fw_get_opt('btn4_code');?>
        </div>
    </div>
</div>

<div class="wrapper wrapper-5">
    <div class="sucai"></div>
    <img src="<?php echo fw_get_opt('bg5');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题5
        </h1>
        <div class="desc">
        <?php echo fw_get_opt('desc5');?>
        </div>
        <div class="btn-bar">
        <?php echo fw_get_opt('btn5_code');?>
        </div>
    </div>
</div>

<div class="wrapper wrapper-6">
    <div class="sucai"></div>
    <img src="<?php echo fw_get_opt('bg6');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题6
        </h1>
        <div class="desc">
        <?php echo fw_get_opt('desc6');?>
        </div>
        <div class="btn-bar">
        <?php echo fw_get_opt('btn6_code');?>
        </div>
    </div>
</div>


<div class="wrapper wrapper-7">
    <img src="<?php echo fw_get_opt('bg7');?>" alt="" class="bg-img">
    <div class="figure"></div>
    <div class="text-bar">
        <h1 class="title">
            标题7
        </h1>
        <ul class="news-list">
            <?php echo get_custom_articles(); ?>
        </ul>
        <div class="btn-bar">
             <?php echo fw_get_opt('btn7_code');?>
        </div>

    </div>
</div>
