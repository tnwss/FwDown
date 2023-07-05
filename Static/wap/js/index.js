/**
 * 页面主体 Swiper
 */
var mainSwiper = new Swiper('.main', {
	direction: 'vertical',
	resistanceRatio: 0,
	resistance: '100%',
	on: {
		slideChangeTransitionEnd: function () {
			if (this.activeIndex == 7) {
				$('.guide').hide();
				// $('.wrap').css('background', '#282452');
			} else {
				$('.guide').show();
				// $('.wrap').css('background', '#000000');
			}
		},
	}
});

/**
 * News Swiper
 */
var swiperScrollbar = new Swiper('.swiper-container-scrollbar', {
	direction: 'vertical',
	slidesPerView: 'auto',
	resistance: '100%',
	resistanceRatio: 0,
	mousewheelControl: true,
	freeMode: true,
	nested: true,
	on: {
		setTranslate: function (translate) {
			if (translate < -75) {
				$('.top-nav-box').addClass('scroll');
				$('.swiper-slide.news').css('paddingTop', '1rem');
				$('.news-box').css('marginTop', '1.15rem')
			} else {
				$('.top-nav-box').removeClass('scroll');
				$('.swiper-slide.news').css('paddingTop', '1.75rem');
				$('.news-box').css('marginTop', '0rem')
			}
		}
	}
});


/**
 * nav
 */
$('.nav-more').on('click', function () {
	if ($(this).hasClass('active')) {
		$(this).removeClass('active');
		$('.top-nav-box').removeClass('active');
		$('.nav-main').hide();
	} else {
		$(this).addClass('active');
		$('.top-nav-box').addClass('active');
		$('.nav-main').show();
	}
});

/**
 * footer
 */
$('.footer ul li .first').on('click', function () {
	if ($(this).parent().hasClass('active')) {
		$(this).parent().removeClass('active');
	} else {
		$(this).parent().addClass('active');
		$(this).parent().siblings('li').removeClass('active');
	}
	$('.tc-gzh').removeClass('on').css('display', 'none');

	swiperScrollbar.update();
});

//脚部微信二维码
$('.btn-wx').on('click', function () {
	if ($('.tc-gzh').hasClass('on')) {
		$('.tc-gzh').removeClass('on').css('display', 'none');
	} else {
		$('.tc-gzh').addClass('on').css('display', 'block');
	}
});


/**
 * 视频弹窗初始化及播放
 * **/
// var diaPlayer = new Txplayer({
//   containerId: 'videoCon',
//   vid: 'a0044tp3gpi',
//   width: '100%',
//   height: '100%',
//   autoplay: false
// });
var video = document.getElementById('movie');
function showVideoDia() {
	TGDialogS('diaVideo');
	video.play();
}

/**
 * 关闭视频弹窗
 * **/
function closeVideoDia() {
	video.pause();
	showDialog.hide();
}



// 显示弹窗
function TGDialogS(e) {
	// 利用milo库引入dialog组件
	need("biz.dialog", function (Dialog) {
		Dialog.show({
			id: e,
			bgcolor: '#000', //弹出“遮罩”的颜色，格式为"#FF6600"，可修改，默认为"#fff"
			opacity: 90 //弹出“遮罩”的透明度，格式为｛10-100｝，可选
		});
	});
}

// 关闭弹窗
function closeDialog() {
	// 利用milo库引入dialog组件
	need("biz.dialog", function (Dialog) {
		Dialog.hide();
	});
};



// 安卓视频适配
var u = navigator.userAgent;
if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {
	$('#videoBg')[0].pause();
	$('#videoBg').hide();
} else {
	document.addEventListener("WeixinJSBridgeReady", function () {
		$('#videoBg')[0].play();
	}, false);
}