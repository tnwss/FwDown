<?php ob_start();
	//自定义页面的全局变量
	function fwdown_init_globals() {
		global $fwdown_page_type;
		$fwdown_page_type = array('about','contact');
	}
	add_action( 'init','fwdown_init_globals' );

	//注册路由规则
	function fwdown_rewrite_rule() {
		global $fwdown_page_type;
		foreach ($fwdown_page_type as $page) {
			add_rewrite_rule('^'.$page.'/?','index.php?fwdown_page_type='.$page,'top');
		}
	 }
	 add_action('init', 'fwdown_rewrite_rule');

	//注册URL参数
	function fwdown_query_vars( $query_vars ) {
		$query_vars[] = 'fwdown_page_type';
		return $query_vars;
	}
	add_filter( 'query_vars', 'fwdown_query_vars' );

	//加载自定义模板
	function fwdown_template_redirects() {
		global $wp_query;
		if ( $wp_query->get( 'fwdown_page_type' ) ) :
			$type = $wp_query->get( 'fwdown_page_type');
			if($type){
			     get_template_part( 'Page/'.$type );
			}
			exit();
		endif;
	}
	add_filter( 'template_redirect', 'fwdown_template_redirects' );

	//自定义页面的链接
	function fwdown_get_custom_page_link($name,$arg = array()){

		if(get_option('permalink_structure')){
			$url = home_url('/'.$name);
		}else{
			$url = home_url('?fwdown_page_type='.$name);
		}

		if(empty($arg)){
			return esc_url($url);
		}else{
			return esc_url(add_query_arg( $arg[0], $arg[1] ,$url));
		}

	}

	//判断不是某个自定义页面
	function fwdown_is_custom_page($name){
		global $wp_query;
		$fwdown_page_type = $wp_query->get( 'fwdown_page_type');
		if ( $fwdown_page_type) {
			$type = $fwdown_page_type;
			if($type == $name) return true;
		}
		return false;
	}

	function fwdown_is_custom_page_top(){
		if( fwdown_is_custom_page('user')
		){
			return true;
		}else{
			return false;
		}
	}

