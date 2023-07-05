
//头部轮播效果
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 'auto',
	autoplay: {
		delay: 5000,//5秒切换一次
	},
	spaceBetween: 30,
	effect: 'fade',
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	on: {
		autoplayStop: function () {
			console.log('end')
			if (!firstLoad) {
				return
			}
			$('#swiper').addClass('no-progress')
		},
		autoplayStart: function (swiper) {
			console.log('start')
			if (firstLoad) {
				$('#swiper').removeClass('no-progress').addClass('first-load-done')
			}
		}
	}
});

var firstLoad = false

//简和en切换颜色
$('.language-change a').on('click', function () {
	$(this).addClass('on').siblings().removeClass('on');
});

function topNavScroll () {
	var _top2 = $(document).scrollTop();
	if (_top2 >= 100) {
		$('.top-nav-box').addClass('on');
	} else {
		$('.top-nav-box').removeClass('on');
	}

	var bg2Top = $('.bg2').offset().top;
	if (_top2 >= bg2Top) {
		$('.top-nav-box').addClass('noone');
	} else {
		$('.top-nav-box').removeClass('noone');
	}
}

topNavScroll();

//头部导航出现
$(document).scroll(function () {
	topNavScroll();
});


//品牌演绎视频
// var player = new Txplayer({
// 	containerId: 'tbvideo-box',
// 	vid: '',
// 	width: '100%',
// 	height: '100%',
// 	autoplay: false
// });

$('.btn-play').on('click', function () {
	$(this).css('display', 'none');
	$('.tbimg').css('display', 'none');
	player.play();
});

var t1 = 0, t2 = 0, t3 = 0;
//spark入场动效
function sparkAct () {
	$('.spark-ico,.spark-box1,.spark-box2,.spark-box3').removeClass('act').addClass('on');
	t1 = setTimeout(function () {
		$('.spark-ico,.spark-box1,.spark-box2,.spark-box3').removeClass('on');
	}, 1500);
}

//more入场动效
function moreAct () {
	$('.more-ico,.spark-box4,.spark-box5,.spark-box6,.spark-box7').addClass('on');
	setTimeout(function () {
		$('.more-ico,.spark-box4,.spark-box5,.spark-box6,.spark-box7').removeClass('on');
	}, 3000);
}


//pc
window.onload = function () {
	swiper.autoplay.stop();
	firstLoad = true
	$('.spark-ico,.spark-box1,.spark-box2,.spark-box3').removeClass('act').addClass('on');
	t3 = setTimeout(function () {
		$('.spark-ico').removeClass('on').addClass('act');
		$('.spark-box1,.spark-box2,.spark-box3').removeClass('on');
	}, 1500);
	//spark more 页面进入动效
	t2 = setTimeout(function () {
		sparkAct();
		setTimeout(function () {
			moreAct();
			swiper.autoplay.start();
			setTimeout(function () {
				$('#swiper').addClass('first-load-done')
			}, 5000)

		}, 3000);
	}, 4000);
};

//spark more 动效
$('.spark-ico').mouseover('on', function () {
	$(this).addClass('on');
	$('.spark-box1,.spark-box2,.spark-box3').addClass('on');
	$('.more-ico,.spark-box4,.spark-box5,.spark-box6,.spark-box7').removeClass('on');
	swiper.autoplay.stop();
});

$('.more-ico').mouseover('on', function () {
	$(this).addClass('on');
	$('.spark-box4,.spark-box5,.spark-box6,.spark-box7').addClass('on');
	$('.spark-box1,.spark-box2,.spark-box3').removeClass('on');
	$('.spark-ico').removeClass('on');
	swiper.autoplay.stop();
});

$('.spark-more-main').mousemove('on', function () {
	window.clearTimeout(t1);
	window.clearTimeout(t2);
	window.clearTimeout(t3);
	$('.spark-box1,.spark-box2,.spark-box3,.spark-box4,.spark-box5,.spark-box6,.spark-box7').removeClass('on');
	swiper.autoplay.start();
	if (!$('.more-ico').hasClass('on')) {
		$('.spark-ico').removeClass('on');
	} else {
		$('.more-ico').removeClass('on');
	}
});

//品牌大事件点击展示全部
$('.btn-showall').on('click', function () {
	if ($('.btn-showall').hasClass('on')) {
		$(this).removeClass('on');
		$(this).find('span').text('显示全部');
		$('.event-list').css('height', '920px');
		$('.ul-last').addClass('ul-no');
		var zktop = $('.bg3').offset().top - 600;
		$('body,html').animate({ "scrollTop": zktop }, 0);
	} else {
		$(this).addClass('on');
		$(this).find('span').text('点击收起');
		$('.event-list').css('height', 'auto');
		$('.ul-last').removeClass('ul-no');
	}
});


