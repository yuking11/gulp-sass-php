jQuery(document).ready(function ($) {
	////////////////////////////////////////////////////////////
	//
	// 共通
	//
	////////////////////////////////////////////////////////////

	// 画像ロールオーバー
	/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	var preLoadImg = new Object();
	function initRollOvers(){
		$("img.over, input.over").each(function(){
			var imgSrc = this.src;
			var sep = imgSrc.lastIndexOf('.');
			var onSrc = imgSrc.substr(0, sep) + '_on' + imgSrc.substr(sep, 4);
			preLoadImg[imgSrc] = new Image();
			preLoadImg[imgSrc].src = onSrc;
			$(this).hover(
				function() { this.src = onSrc; },
				function() { this.src = imgSrc; }
			);
		});
	}
	$(function(){
		initRollOvers();
	});

	// スムーズスクロール
	/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	$(function(){
		$('a[href*=#]').on('click', function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var $target = $(this.hash),
				self = $(this);
				$target = $target.length && $target || $('[name="' + this.hash.slice(1) +'"]');
				if( self.attr('data-href') === 'page_top') {
					var targetOffset = 0;
				} else {
					var targetOffset = $target.offset().top;
				}
				$('html,body').animate({scrollTop: targetOffset}, 500);
				$(this).blur();
				return false;
			}
		});
	});

	////////////////////////////////////////////////////////////
	//
	// ライブラリ
	//
	////////////////////////////////////////////////////////////

	// Nivo-Lightbox
	/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
	$(function(){
		$('.popup').nivoLightbox({
			effect: 'fade',                             // The effect to use when showing the lightbox
			theme: 'default',                           // The lightbox theme to use
			keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
			clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
			//onInit: function(){},                    // Callback when lightbox has loaded
			//beforeShowLightbox: function(){},        // Callback before the lightbox is shown
			// afterShowLightbox: function(lightbox){}, // Callback after the lightbox is shown
			// beforeHideLightbox: function(){},        // Callback before the lightbox is hidden
			// afterHideLightbox: function(){},         // Callback after the lightbox is hidden
			// onPrev: function(element){},             // Callback when the lightbox gallery goes to previous item
			// onNext: function(element){},             // Callback when the lightbox gallery goes to next item
			errorMessage: 'ファイルを取得できませんでした。' // Error message when content can't be loaded
		});
	});

});
