<?php

//创建数据库

function create_fwdown_sql() {
    global $wpdb;
    $collect = $wpdb->prefix . 'collect';
    $points  = $wpdb->prefix.'points_transactions';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $collect (
        ID bigint(20) NOT NULL,
        user_id bigint(20) NOT NULL,
        post_id bigint(20) NOT NULL,
        time datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY  (ID)
    )$charset_collate;";
    
    $sql ="CREATE TABLE  $points (
         id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
         user_id BIGINT(20) UNSIGNED NOT NULL,
         points INT(11) NOT NULL,
         transaction_type VARCHAR(20) NOT NULL,
         transaction_date DATETIME NOT NULL,
         PRIMARY KEY  (id),
         KEY user_id (user_id),
         KEY transaction_type (transaction_type),
         KEY transaction_date (transaction_date)
         ) $charset_collate;";
    

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

add_action( 'after_switch_theme', 'create_fwdown_sql' );
