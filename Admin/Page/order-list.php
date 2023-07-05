<?php
if ( !defined('ABSPATH') ) {exit;}
global $wpdb;
if(isset($_GET['uid']) && $_GET['uid']){
   $total   = $wpdb->get_var("SELECT COUNT(id) FROM ".$wpdb->prefix."erphpdown_kapi_order where order_user='".$_GET['uid']."' and order_status>=1"); 
}else{
    $total   = $wpdb->get_var("SELECT COUNT(id) FROM ".$wpdb->prefix."erphpdown_kapi_order where order_status>=1");
}
$perpage = 20;
$pages = ceil($total / $perpage);
$page=isset($_GET['paged']) ?intval($_GET['paged']) :1;
$offset = $perpage*($page-1);
if(isset($_GET['uid']) && $_GET['uid']){
    $list = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."erphpdown_kapi_order where order_user='".$_GET['uid']."' and order_status>=1 ORDER BY order_time DESC limit $offset,$perpage");
}else{
    $list = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."erphpdown_kapi_order where order_status>=1 ORDER BY order_time DESC limit $offset,$perpage");
}
?>
<style>
@media screen and (max-width:640px){
    .dingdan-list table.fixed{
         padding: 3px 0;
         overflow-x: scroll;
         display: -webkit-box;
         scrollbar-width: none;
    }
   }
</style>
<div class="wrap dingdan-list">
	<h2>所有订单</h2>
	<table class="wp-list-table widefat fixed striped posts">
		<thead>
			<tr>
				<th style="width:120px">订单号</th>
				<th style="width:150px">API订单号</th>
				<th>产品名称</th>
				<th style="width:60px">数量</th>
				<th style="width:60px">总价</th>
				<th>UID</th>
				<th>用户信息</th>
				<th>卡密信息</th>
				<th>创建时间</th>
				<th style="width:60px">支付方式</th>
				<th style="width:60px">状态</th>		
				<th style="width:100px">操作</th>	
			</tr>
		</thead>
		<tbody>
</div>
