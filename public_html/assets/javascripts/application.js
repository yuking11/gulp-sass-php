jQuery(document).ready(function ($) {
	////////////////////////////////////////////////////////////
	//
	// 共通
	//
	////////////////////////////////////////////////////////////

	// 画像ロールオーバー
	/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
  var preLoadImg = {};
  function initRollOvers(){
    $('.over').each(function(){
      var imgSrc = this.src;
      var sep = imgSrc.lastIndexOf('.');
      var onSrc = imgSrc.substr(0, sep) + '_on' + imgSrc.substr(sep, 4);
      preLoadImg[imgSrc] = new Image();
      preLoadImg[imgSrc].src = onSrc;
      $(this).on({
        'mouseenter touchstart':function(){
          this.src = onSrc;
        },
        'mouseleave touchend':function(){
          this.src = imgSrc;
        }
      });
    });
  }
  $(function(){
    initRollOvers();
  });

	// スムーズスクロール
	/* ++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */
  $(function(){
    $('[data-anchor]').on('click', function() {
      var $self        = $(this),
          $menuHeight  = $('#c_nav').outerHeight(),
          $target      = $self.attr('data-anchor'),
          targetOffset = 0;
      if( $target[0] && $target !== 'page_top') {
        targetOffset = $('[data-anchor-target="'+ $target +'"]').offset().top - $menuHeight;
      }
      $('html,body').animate({scrollTop: targetOffset}, 500);
      $self.blur();
      return false;
    });// end function.onClick
  });// end function

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
