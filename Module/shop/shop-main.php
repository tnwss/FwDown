<?php

//建立商城文章商品分类
function Create_shop() {
  $labels = array(
    'name'               => __( '商铺' ),
    'singular_name'      => __( '商铺'),
    'add_new'            => __( '新建商品' ),
    'add_new_item'       => __( '新建一个产品商' ),
    'parent_item_colon'  => '',
    'edit_item'          => __( '编辑商品' ),
    'new_item'           => __( '新商城' ),
    'all_items'          => __( '所有商品' ),
    'view_item'          => __( '查看商品' ),
    'add_new_item'       => __( '添加新商品' ),
    'search_items'       => __( '搜索商品' ),
    'menu_name'          => '商铺'
    
    
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 5,
    'has_archive'   => true,
    'show_in_rest'  => true,
    'menu_icon'     => 'dashicons-products',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'rewrite' => array( 'slug' => 'shop' ),
    'rest_base'     =>'shop',
    'rest_controller_class' =>'WP_REST_Posts_Controller',
  );

  register_post_type( 'shop', $args );
}

add_action( 'init', 'Create_shop' );


//新增商城商品分类
function Create_shop_category() {
    $labels = array(
        'name' => '商品分类',
        'singular_name' => '商品分类',
        'search_items' => '搜索商品' ,
        'all_items' => '所有商品' ,
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => '编辑商品' ,
        'update_item' => '更新商品' ,
        'add_new_item' => '添加商品' ,
        'new_item_name' => '新商品',
        'separate_items_with_commas' => '' ,
        'add_or_remove_items' => '添加或删除',
        'choose_from_most_used' => '从经常使用的类型中选择',
        'menu_name' => '商品分类',
        );
        register_taxonomy('shop_category', array('shop'),array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'query_var' => true,
                )
        );
}
add_action( 'init', 'Create_shop_category',0 );



//增加商城自定义字段（metabox）
require get_template_directory() . '/Module/shop/shop-metabox.php';

require get_template_directory(). '/Module/shop/uploader.php';