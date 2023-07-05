<?php
//接收js的post请求，主要是wp_ajax数据处理逻辑
//post请求尽量少点
//写这些都是迫不得已啊

//登录逻辑
add_action( 'wp_ajax_ajax_login', 'ajax_login_callback');
add_action( 'wp_ajax_nopriv_ajax_login', 'ajax_login_callback');
function ajax_login_callback(){
	global $wpdb;
	$username = esc_sql($_POST['username']);
	$password = esc_sql($_POST['password']);
	$security = esc_sql($_POST['security']);
	
	$info = array();
    $info['user_login'] = $username;
    $info['user_password'] = $password;
    $info['remember'] = true;
	
	if( !wp_verify_nonce( $security, 'ajax-login-nonce' ) ) {
	    $status= 0;
	    $msg='验证失败,请重新登录';
	}else{
	    if(username_exists($username)) {
	        $user_signon = wp_signon( $info, false );
	        if (is_wp_error($user_signon) ){
	            $status=0;
	            $msg='密码错误，请重新登录';
	        } else {
	            $status=1;
	            $msg='登录成功';
	            
	        }
	    }else {
	        $status=0;
	        $msg='用户名不存在';
	       
	    }
	    
	}
	
	$result = array(
		'status' => $status,
		'msg' => $msg,
	);

	header('Content-type: application/json');
	echo json_encode($result);
	exit;
}


//注册逻辑

add_action( 'wp_ajax_nopriv_register_user', 'register_user_callback' );
add_action( 'wp_ajax_register_user', 'register_user_callback' );

function register_user_callback() {
    global $wpdb;
    // 获取表单数据
    $username = esc_sql($_POST['username']);
    $email = esc_sql($_POST['email']);
    $password = esc_sql($_POST['password']);
    
    if(username_exists($username)) {
        $status = 0;
        $msg='用户名已存在';
    }elseif(email_exists($email)){
        $status = 0;
        $msg='邮箱已存在';
    }else{// 创建用户
        $user_id = wp_create_user( $username, $password, $email );
        if ( is_wp_error( $user_id ) ) {
            $status = 0;
            $msg = $user_id->get_error_message();
            die();
        }
        wp_update_user( array(
            'ID' => $user_id,
            'display_name' => $username,
        ));
        wp_set_current_user( $user_id );
        wp_set_auth_cookie( $user_id );
        $status = 1;
    }
	$result = array(
		'status' => $status,
		'msg' => $msg,
	);

	header('Content-type: application/json');
	echo json_encode($result);
	exit;
}

//收藏逻辑
add_action('wp_ajax_collect_post', 'collect_post_callback');
add_action('wp_ajax_nopriv_collect_post', 'collect_post_callback');

function collect_post_callback() {
    global $wpdb;
    // 获取请求中的文章ID、用户ID和动作类型
    $postId = $_POST['post_id'];
    $userId = $_POST['user_id'];
    
    $collect = $wpdb->prefix . 'collect';
    $results = $wpdb->get_results( "SELECT * FROM $collect WHERE  $postId  and $userId" );
    
    if(!$results){
        
        $data = array(
            'user_id' =>$userId,
            'post_id' =>$postId,
            'time' => current_time( 'mysql' ),
        );
        $wpdb->insert( $collect, $data );
        
        $status=1;
        $msg='已收藏';
    }else{
        $where = array(
            'user_id' => $userId,
            'post_id' => $postId
        );
        $wpdb->delete( $collect, $where );
        $wpdb->query( "ALTER TABLE $collect AUTO_INCREMENT = 1" );
        $status = 0;
        $msg='收藏';
    }
    
    // 在数据库中添加或删除收藏
     

    // 返回JSON响应
   	$result = array(
		'status' => $status,
		'msg' => $msg,
	);

	header('Content-type: application/json');
	echo json_encode($result);
	exit;
}