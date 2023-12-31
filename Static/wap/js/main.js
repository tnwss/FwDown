~ function () {
			var is_pc = function () {
				var os = ["iPad", "Android", "iPhone", "Windows Phone", "iPod", "BlackBerry", "MeeGo",
				"SymbianOS"]; // 其他类型的移动操作系统类型，自行添加
				var info = navigator.userAgent;
				var len = os.length;
				for (var i = 0; i < len; i++) {
					if (info.indexOf(os[i]) > 0) {
						return false;
					}
				}
				return true;
			};
			// 如果是移动设备就直接跳转到手机网站页面
			if (!is_pc()) {

			} else {
				window.location.href = '../index.html' + location.search; //pc页面链接
			}

		}();


		//mode  移动端的适配方式 按需 传参  目前只有两种 px和rem
		(function (win, doc, mode) {
			var std = 750;
			if (/(iPhone|iPad|iPod|iOS|Android|Windows Phone|BlackBerry|SymbianOS)/i.test(navigator.userAgent)) {
				var h = document.getElementsByTagName("head")[0];
				h.insertAdjacentHTML('beforeEnd', '<meta name="apple-mobile-web-app-capable" content="yes">');
				h.insertAdjacentHTML('beforeEnd', '<meta name="apple-mobile-web-app-status-bar-style" content="black">');
				h.insertAdjacentHTML('beforeEnd', '<meta name="format-detection" content="telephone=no">');
				h.insertAdjacentHTML('beforeEnd',
					'<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,minimal-ui" />'
					);
				if (mode === 'px') {
					//	Px移动端速配
					if (!win.addEventListener) return;
					var html = document.documentElement;

					function setFont() {
						function adaptVP(a) {
							function c() {
								var c, d;
								return b.uWidth = a.uWidth ? a.uWidth : 750, b.dWidth = a.dWidth ? a.dWidth : window.screen.width ||
									window.screen.availWidth, b.ratio = window.devicePixelRatio ? window.devicePixelRatio : 1, b
									.userAgent = navigator.userAgent, b.bConsole = a.bConsole ? a.bConsole : !1, a.mode ? (b.mode = a
										.mode, void 0) : (c = b.userAgent.match(/Android/i), c && (b.mode = "android-2.2", d = b.userAgent
										.match(/Android\s(\d+.\d+)/i), d && (d = parseFloat(d[1])), 2.2 == d || 2.3 == d ? b.mode =
										"android-2.2" : 4.4 > d ? b.mode = "android-dpi" : d >= 4.4 && (b.mode = b.dWidth > b.uWidth ?
											"android-dpi" : "android-scale")), void 0)
							}

							function d() {
								var e, f, g, h, c = "",
									d = !1;
								switch (b.mode) {
									case "apple":
										f = (window.screen.availWidth * b.ratio / b.uWidth) / b.ratio;
										c = "width=" + b.uWidth + ",initial-scale=" + f + ",minimum-scale=" + f + ",maximum-scale=" + f +
											",user-scalable=no";
										break;
									case "android-2.2":
										a.dWidth || (b.dWidth = 2 == b.ratio ? 720 : 1.5 == b.ratio ? 480 : 1 == b.ratio ? 375 : .75 == b
												.ratio ? 240 : 480), e = window.screen.width || window.screen.availWidth, 375 == e ? b.dWidth =
											b.ratio * e : 750 > e && (b.dWidth = e), b.mode = "android-dpi", d = !0;
									case "android-dpi":
										f = 160 * b.uWidth / b.dWidth * b.ratio, c = "target-densitydpi=" + f + ", width=" + b.uWidth +
											", user-scalable=no", d && (b.mode = "android-2.2");
										break;
									case "android-scale":
										c = "width=" + b.uWidth + ", user-scalable=no"
								}
								g = document.querySelector("meta[name='viewport']") || document.createElement("meta"), g.name =
									"viewport", g.content = c, h = document.getElementsByTagName("head"), h.length > 0 && h[0]
									.appendChild(g)
							}

							function e() {
								var a = "";
								for (key in b) a += key + ": " + b[key] + "; ";
								alert(a)
							}
							if (a) {
								var b = {
									uWidth: 0,
									dWidth: 0,
									ratio: 1,
									mode: "apple",
									userAgent: null,
									bConsole: !1
								};
								c(), d(), b.bConsole && e()
							}
						};
						adaptVP({
							uWidth: 750
						});
					}
					win.addEventListener('resize', setFont, false)
					setFont();
				} else if (mode == 'rem') {
					var docEl = doc.documentElement,
						resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
						recalc = function () {
							var clientWidth = docEl.clientWidth;
							if (!clientWidth) return;
							docEl.style.fontSize = 100 * (clientWidth / std) + 'px';
						};
					if (!doc.addEventListener) return;
					recalc();
					win.addEventListener(resizeEvt, recalc, false);
					doc.addEventListener('DOMContentLoaded', recalc, false);
				}
			}
		})(window, document, 'rem');