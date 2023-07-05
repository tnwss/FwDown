
jQuery(function($) {
	layer.config({
		extend: '../layer/style.css',
		//加载您的扩展样式
		skin: 'layer-ext-moon'

	});
	//登录注册切换
	jQuery('#login').click(function(e) {
		$('.signup').addClass('slide-up');
		$('#login').html('<span>登录</span>');
		$('#signup').html('未有账号？注册');
		$('.login').removeClass('slide-up');
	});
	jQuery('#signup').click(function(e) {
		$('#signup').html('注册');
		$('#login').html('<span>已有账号？登录</span>');
		$('.login').addClass('slide-up');
		$('.signup').removeClass('slide-up');
	});
	//ajax登录
	if (fwdown.user_id == 0) {
	    //键盘事件提交登录
	    $('#login-form input').on('keypress', function(e) {
	        if (e.which == 13) {
	            e.preventDefault(); 
	            $('.login-btn').trigger('click');
	        }
	    });
	    //登录post请求逻辑
		jQuery('.to-login').click(function() {
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

			jQuery('.login-btn').click(function() {
				var that = $(this);
				var username = $("#login-account").val(),
				password = $("#login-password").val(),
				security = $("#security").val()

				if (username.length == '') {
					layer.msg('请输入用户名', {
						icon: 5,
					});
					return false;
				}
				if (password.length == '') {
					layer.msg("请输入密码", {
						icon: 5,
					});
					return false;
				}
				that.attr("disabled", "disabled");
				layer.msg("登录中...", {
					time: -1,
					icon: 4
				});
				$.post(fwdown.ajax_url, {
					"action": "ajax_login",
					"username": username,
					"password": password,
					"security": security,

				},
				function(result) {
					if (result.status != 1) {
						layer.msg(result.msg, {
							icon: 0,
						});
						that.removeAttr("disabled");
					} else {
					    location.reload();
						layer.closeAll();
						layer.msg(result.msg, {
							time: 1000,
							icon: 6
						});
					}
				},
				'json');

				return false;

			});
			//键盘事件提交注册
			 $('#register-form input').on('keypress', function(e) {
			     if (e.which == 13) {
			         e.preventDefault(); 
			         $('.register-btn').trigger('click');
			     }
			
			 });
			//ajax注册逻辑
			jQuery('.register-btn').click(function() {
				var that = $(this);
				var username = $("#register-account").val(),
				email = $("#register-email").val(),
				password = $("#register-password").val(),
				password2 = $("#register-password2").val()
				
				if (username.length == '') {
					layer.msg('请输入账号', {
						icon: 5,
					});
					return false;
				}
				if (!is_username(username)) {
					layer.msg('请用4到16位（字母，数字，下划线，减号）', {
						icon: 5,
					});
					return false;
				}
				if (email.length == '') {
					layer.msg('请输入邮箱', {
						icon: 5,
					});
					return false;
				}
				if (!is_email(email)) {
					layer.msg('邮箱格式错误', {
						icon: 5,
					});
					return false;
				}
				if (password.length == '') {
					layer.msg("请输入密码", {
						icon: 5,
					});
					return false;
				}
				if (password2.length == '') {
					layer.msg("请确认密码", {
						icon: 5,
					});
					return false;
				}
				if (!is_password(password)) {
					layer.msg("请设置8个字符以上的字母及数字密码", {
						icon: 5,
					});
					return false;
				}
				if (password != password2) {
					layer.msg("输入密码不一致", {
						icon: 5,
					});
					return false;
				}
				that.attr("disabled", "disabled");
				layer.msg("注册中...", {
					time: 500,
					icon: 4
				});

				$.post(fwdown.ajax_url, {
					"action": "register_user",
					"username": username,
					"email": email,
					"password": password,
					"password2": password2,

				},
				function(result) {
					if (result.status != 1) {
						layer.msg(result.msg, {
							icon: 0,
						});
						that.removeAttr("disabled");
					} else {
						layer.closeAll();
						location.reload();
						layer.msg('注册成功', {
							time: 1000,
							icon: 6
						});
					}
				},
				'json');

				return false;
			});
		});
	} else {
	    //登录用户显示头像
	    jQuery('.to-login').html('<img src="'+fwdown.user_img+'">');
	    jQuery('.to-login').click(function() {
	          var that = $(this);
	        //用户菜单弹窗逻辑
	           if ($(this).hasClass('active')) {
	               $(this).removeClass('active');
	               $(this).next().stop().slideUp(300);
	           }else{
	               $(this).addClass('active');
	               $(this).next().stop().slideDown(300);
	               
	           }
	    });
	}

});