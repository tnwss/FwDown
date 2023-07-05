<?php

//API前后端交互
require get_template_directory() . '/Admin/Api/api.php';

//定义菜单
require get_template_directory() . '/Admin/Admin/admin.php';

//数据库创建
require get_template_directory() . '/Admin/Admin/sql.php';

//请求处理函数
require get_template_directory() . '/Admin/Admin/ajax.php';

// 后台引入JS/CSS
function admin_scripts_custom() {
    //js
    wp_enqueue_script( 'admin_scripts', get_stylesheet_directory_uri() . '/Admin/Libs/js/admin.js', array( 'jquery' ), '1.18', true );
    //css
    wp_enqueue_style('admin_style', get_stylesheet_directory_uri() . '/Admin/Libs/css/admin.css', array(), '1.3', false);
}
add_action( 'admin_enqueue_scripts', 'admin_scripts_custom' );
