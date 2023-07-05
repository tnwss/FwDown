<?php

/* functions.php 或其他主题 PHP 文件中 */

//定制首页背景图片，标题图片
function custom_title_style() {
  $home_title_img1 = fw_get_opt('title1');
  $home_title_img2 = fw_get_opt('title2');
  $home_title_img3 = fw_get_opt('title3');
  $home_title_img4 = fw_get_opt('title4');
  $home_title_img5 = fw_get_opt('title5');
  $home_title_img6 = fw_get_opt('title6');
  $home_title_img7 = fw_get_opt('title7');
  $sucai2 = fw_get_opt('sucai2');
  $sucai3 = fw_get_opt('sucai3');
  $sucai4 = fw_get_opt('sucai4');
  $sucai5 = fw_get_opt('sucai5');
  $sucai6 = fw_get_opt('sucai6');
  
  
  
  if ($home_title_img1) {
    echo '<style>.wrapper-1 .title { background-image: url("' . $home_title_img1 . '"); }</style>';
  }
  
  if ($home_title_img2) {
    echo '<style>.wrapper-2 .title { background-image: url("' . $home_title_img2 . '"); }</style>';
  }
  if ($home_title_img3) {
    echo '<style>.wrapper-3 .title { background-image: url("' . $home_title_img3 . '"); }</style>';
  }
  if ($home_title_img4) {
    echo '<style>.wrapper-4 .title { background-image: url("' . $home_title_img4 . '"); }</style>';
  }
  if ($home_title_img5) {
    echo '<style>.wrapper-5 .title { background-image: url("' . $home_title_img5 . '"); }</style>';
  }
  if ($home_title_img6) {
    echo '<style>.wrapper-6 .title { background-image: url("' . $home_title_img6 . '"); }</style>';
  }
  if ($home_title_img7) {
    echo '<style>.wrapper-7 .title { background-image: url("' . $home_title_img7 . '"); }</style>';
  }
  if ($sucai2) {
    echo '<style>.wrapper-2 .sucai { background-image: url("' . $sucai2 . '"); }</style>';
  }
   if ($sucai3) {
    echo '<style>.wrapper-3 .sucai { background-image: url("' . $sucai3 . '"); }</style>';
  }
  if ($sucai4) {
    echo '<style>.wrapper-4 .sucai { background-image: url("' . $sucai4 . '"); }</style>';
  }
  if ($sucai5) {
    echo '<style>.wrapper-5 .sucai { background-image: url("' . $sucai5 . '"); }</style>';
  }
  if ($sucai6) {
    echo '<style>.wrapper-6 .sucai { background-image: url("' . $sucai6 . '"); }</style>';
  }
}

add_action('wp_head', 'custom_title_style');

//获取电脑三篇最新文章
function get_custom_articles() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );

    $query = new WP_Query($args);

    $output = '<ul class="news-list">';
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $output .= '<li class="item">';
            $output .= '<a href="' . get_permalink() . '" target="_blank" class="link">';

            if (has_post_thumbnail()) {
                $output .= '<img src="' . get_the_post_thumbnail_url() . '" alt="" class="img">';
            }

            $output .= '<p class="item-title">' . get_the_title() . '</p>';

            $terms = get_the_terms(get_the_ID(), 'post_tag'); // 获取文章的标签
            if (!empty($terms)) {
                $output .= '<p class="classification">' . $terms[0]->name . '</p>'; // 只显示第一个标签
            }

            $output .= '<p class="date">' . get_the_time('Y年m月') . '</p>';
            $output .= '</a>';
            $output .= '</li>';
        }
        wp_reset_postdata();
    }

    $output .= '</ul>';

    return $output;
}


function get_custom_marticles() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );

    $query = new WP_Query($args);

    $output = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $output .= '<div class="news-item">';
            $output .= '<a href="' . get_permalink() . '"></a>';

            if (has_post_thumbnail()) {
                $output .= '<img src="' . get_the_post_thumbnail_url() . '" alt="">';
            }

            $output .= '<p class="p-title">' . get_the_title() . '</p>';

            $terms = get_the_terms(get_the_ID(), 'post_tag'); // 获取文章的标签
            if (!empty($terms)) {
                $output .= '<p class="p-time"><span class="type">' . $terms[0]->name . '</span>';
            }

            $output .= '<span class="p-time">' . get_the_time('Y年m月') . '</span></p>';
            $output .= '</div>';
        }
        wp_reset_postdata();
    }

    return $output;
}
