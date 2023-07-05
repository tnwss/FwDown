jQuery(function($) {
   //下载支付逻辑 
   //文章下载权限检查
    $('.download-new').click(function(){
        if (fwdown.user_id == 0) {
	    //登录post请求逻辑
			layer.open({
				type: 1,
				shadeClose: false,
				closeBtn: 1,
				title: false,
				area: 'auto',
				maxWidth: '480px',
				skin: 'login-content',
				content: $('.form-structor')
			});
		}else{
		    if(fwsingle.role=='longin'){
		        layer.msg('你已经成功下载');
		        return false;
		    }
		    if(fwsingle.role=='vip'){
		        layer.msg('你权限不够，请开通会员');
		        return false;
		    }
		}
    });
    
    //收藏逻辑
    $('.collect-btn').click(function(){
         var userId = fwdown.user_id,
             postId = $(this).data("id")
             
             if(fwdown.user_id==0){
                 layer.open({
                     type: 1,
                     shadeClose: false,
                     closeBtn: 1,
                     title: false,
                     area: 'auto',
                     maxWidth: '480px',
                     skin: 'login-content',
                     content: $('.form-structor')
                     
                 });
                return false;
            }
             
             $.post(fwdown.ajax_url, {
					"action": "collect_post",
					"post_id": postId,
					"user_id": userId,

			},
			function(result) {
			    if (result.status != 1) {
			        layer.msg('取消收藏');
			        location.reload();
			    }else{
			       layer.msg('已收藏');
			       location.reload();
				}
			},'json');
    });

});