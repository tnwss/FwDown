<?php
//定义文章内容函数

//查询收藏
function  get_collect(){
    global $wpdb;
    $post_id = get_the_ID();
    $user_id = get_current_user_id();
    // 获取请求中的文章ID、用户ID和动作类型
    $collect = $wpdb->prefix . 'collect';
    $results = $wpdb->get_results( "SELECT * FROM $collect WHERE $post_id  and $user_id" );
    
    if($results){
        echo'已收藏';
    }else{
        echo'收藏';
    }
    
}