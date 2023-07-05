<?php

//注销顶部工具栏
add_filter('show_admin_bar', '__return_false');

//关闭进入后台权限
function restrict_admin_access() {
  if ( ! current_user_can( 'manage_options' ) && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF'] ) {
    wp_redirect( home_url() );
    exit;
  }
}

add_action( 'admin_init', 'restrict_admin_access', 1 );

