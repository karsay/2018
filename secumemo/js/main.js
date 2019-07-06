jQuery(function($){

(function($, window) {
	"use strict";

	var RANGE = 5,
		events = ["click", "touchstart", "touchmove", "touchend"],
		handlers = {
			click: function(e) {
				if(e.target === e.currentTarget)
					e.preventDefault();
			},
			touchstart: function(e) {
				this.jQueryTap.touched = true;
				this.jQueryTap.startX = e.touches[0].pageX;
				this.jQueryTap.startY = e.touches[0].pageY;
			},
			touchmove: function(e) {
				if(!this.jQueryTap.touched) {
					return;
				}

				if(Math.abs(e.touches[0].pageX - this.jQueryTap.startX) > RANGE ||
				   Math.abs(e.touches[0].pageY - this.jQueryTap.startY) > RANGE) {
					this.jQueryTap.touched = false;
				}
			},
			touchend: function(e) {
				if(!this.jQueryTap.touched) {
					return;
				}

				this.jQueryTap.touched = false;
				$.event.dispatch.call(this, $.Event("tap", {
					originalEvent: e,
					target: e.target,
					pageX: e.changedTouches[0].pageX,
					pageY: e.changedTouches[0].pageY
				}));
			}
		};

	$.event.special.tap = "ontouchend" in window? {
		setup: function() {
			var thisObj = this;
			
			if(!this.jQueryTap) {
				Object.defineProperty(this, "jQueryTap", {value: {}});
			}
			$.each(events, function(i, ev) {
				thisObj.addEventListener(ev, handlers[ev], false);
			});
		},
		teardown: function() {
			var thisObj = this;
			
			$.each(events, function(i, ev) {
				thisObj.removeEventListener(ev, handlers[ev], false);
			});
		}
	}: {
		bindType: "click",
		delegateType: "click"
	};

	$.fn.tap = function(data, fn) {
		return arguments.length > 0? this.on("tap", null, data, fn): this.trigger("tap");
	};
})(jQuery, this);

});

//
var $win = $(window);

jQuery($win).on("load resize", function () 
{
    var windowWidth = window.innerWidth;
    if (windowWidth < 768)
    {
        jQuery(function($) 
        {
			$("#window-img").hide();
            $('li').tap(function() 
            {
				$('.mobile-toggle', this).slideToggle();
            });
		});
    }
});



jQuery($win).on("load resize", function () 
{
    var windowWidth = window.innerWidth;
    if (windowWidth > 768)
    {
		var figcaptions = new Array("このサイトは主にKali Linuxのツールについての忘備録サイトです<br>サイドメニューのKali Toolsのカテゴリ分けについては<a href='https://tools.kali.org/tools-listing'>公式のツール一覧表</a>を参考にしています",
						"Information(<span class='red'>情報</span>) Gathering(<span class='red'>収集</span>)<br>NmapやWiresharkといった対象の状態や状況を解析するツールが揃っています",
						"Vulnerability(<span class='red'>脆弱性</span>) Analysis(<span class='red'>分析</span>)<br>splmapに代表される対象の脆弱性を分析するツールが揃っています",
						"Wireless(<span class='red'>無線</span>) Attacks(<span class='red'>攻撃</span>)<br>aircrack-ng,airmon-ng,airodump-ngといった無線に対して有効なツールが揃っています",
						"Web Applications(<span class='red'>ウェブアプリケーション</span>)<br>ウェブアプリケーションの脆弱性を分析をするツールが揃っています。",
						"Exploitation Tools(<span class='red'>エクスプロイトツール</span>)<br>ArmitageやMetasploitといったペネトレーションテストに有用なツールが揃っています",
						"Stress(<span class='red'>負荷</span>) Testing(<span class='red'>テスト</span>)<br>floodの文字がつくツールが多く対象に対し負荷をかけテストするツールが揃っています",
						"Forensics(<span class='red'>法科学</span>) Tools(<span class='red'>ツール</span>)<br>コンピュータ・フォレンジクス用のツールが揃っています",
						"Sniffing(<span class='red'>盗み見</span>)& Spoofing(<span class='red'>なりすまし</span>)<br>Burp Suiteを代表にプロキシツールが多く揃っています",
						"Password(<span class='red'>パスワード</span>) Attacks(<span class='red'>攻撃</span>)<br>HydraやJohn the Ripperといったパスワードテスト用のツールが揃っています",
						"Maintaining(<span class='red'>維持</span>) Access(<span class='red'>アクセス</span>)<br>対象のアクセスを維持するためのツールが揃っています",
						"Reverse Engineering(<span class='red'>リバースエンジニアリング</span>)<br>OllyDbgやdex2jarといったリバースエンジニアリング用のツールが揃っています",
						"Hardware Hacking(<span class='red'>ハードウェアハッキング</span>)<br>Andoroid系のツールが多い気がします",
						"Reporting Tools(<span class='red'>レポーティングツール</span>)");

		jQuery(function ($) 
		{
			$(".bg-change").hover(function()
			{
				var num = $(this).attr("data-url"),
					src = $("#window-img").attr("src").replace(/\d+.jpg/, num + ".jpg"),
					str = figcaptions[num];
				$("#window-img").attr("src",src);
				$("figcaption").html(str);
				$("#window-img").hide().fadeIn();
				$("figcaption").hide().fadeIn("slow");
			});
		});
    }
});




