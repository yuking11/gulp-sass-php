# html5-PHP Template
---

## 目次

 - [ドメイン](#domain)
 - [開発サイト](#develop)
 - [基本ガイドライン](#guideline)
 - [ブラウザレギュレーション](#browser)
 - [制作環境](#production)
 - [ディレクトリ構造](#directory)
 - [Sassファイル設計](#sass)
 - [コード](#code)


<span id="domain"></span>
## ドメイン

[example.com](http://www.example.com/)


<span id="develop"></span>
## 開発サイト

- 静的：[http://example-test.com/](http://example-test.com/)
- 動的：[http://example-dev.com/](http://example-dev.com/)


<span id="guidline"></span>
## 基本ガイドライン

[http://coding-manual.s-rep.net/guideline/](http://coding-manual.s-rep.net/guideline/)


<span id="browser"></span>
## ブラウザレギュレーション

### Windows 7+

- IE 11
- Google Chrome+
- Mozilla Firefox+

### Mac OS X (10.9+)

- Safari


<span id="production"></span>
## 制作環境

### 言語

- php
- html5
- css3
- javascript

### フレームワーク

- [Compass](http://compass-style.org/)
- [Sass](http://sass-lang.com/)
- [jQuery](http://jquery.com/)

### Plug-in

- [Nivo Lightbox (jQuery)](https://github.com/gilbitron/Nivo-Lightbox)

### エディタ

- [Sublime text 3](http://www.sublimetext.com/3)

### ツール

- [Koala](http://koala-app.com/) （windows）
- [Codekit](https://incident57.com/codekit/) （Mac）


<span id="directory"></span>
## ディレクトリ構造（静的サイト）

開発・本番環境も基本的には同じだと思います。

■ … ディレクトリ

- ■ example.com
	- ■ _sass // 各sassファイル格納（Sassファイル設計 参照）
		- ■ base
		- ■ block
		- ■ libs
		- ■ mixins
		- ■ parts
		- ■ pages
		- ■ settings
		- ■ system
		- _init.scss // includeファイル
		- application.scss // 本体
	- ■ _sass-cache
	- ■ public_html // 公開ディレクトリ
		- ■ assets
			- ■ stylesheets
				- application.css // コンパイルファイル
			- ■ images
				- ■ spr // 各スプライト用画像を格納
				- ■ and more ...
				- apple-touch-icon.png
				- favicon.ico
				- spr-***.png // Compass生成 Sprite画像
			- ■ include
				- _end_of_body.php
				- _footer.php
				- _header.php
				- _html_header.php // <!DOCTYPE html> ~ </head>
				- _nav.php
				- _side.php
				- _start_of_body.php
				- site_config.php // サイト設定
			- ■ javascripts
				- ■ libs // 各種ライブラリ格納
					- jquery.*.min.js
					- and more ...
				- application.js
				- application.min.js // application.js Minify
		- ■ hogehoge // 下層ディレクトリ（任意）
		- .htaccess
		- index.php
		- and more ...
	- .editorconfig // エディター設定ファイル
	- config.rb // Compass設定ファイル


<span id="sass"></span>
## Sassファイル設計

■ … ディレクトリ

- ■ _sass // 各sassファイル格納
	- ■ base // 共通スタイル
		- _default.scss
		- _layout.scss
		- _normalize.scss
	- ■ block // 各ブロック
		- _footer.scss
		- _header.scss
		- _main.scss
		- _nav.scss
		- _side.scss
	- ■ libs // ライブラリ
		- ■ nivo_lightbox
			- _default.scss
			- _nivo-lightbox.scss
		- _libraries.scss // 各ファイルをinclude
		- _over_write.scss // ライブラリのCSS上書き用
	- ■ mixins // 各mixinファイル
		- _mixin.scss // includeファイル
		- _mixin_animation.scss
		- _mixin_border.scss
		- _mixin_box.scss
		- _mixin_button.scss
		- _mixin_display.scss
		- _mixin_font.scss
		- _mixin_gradient.scss
		- _mixin_icon.scss
		- _mixin_list.scss
		- _mixin_position.scss
	- ■ parts // 共通パーツ
		- _button.scss // ボタン
		- _form.scss // フォーム
		- _section.scss // セクション
		- _table.scss // テーブル
		- _title.scss // タイトル
	- ■ pages // 各ページ用
		- _top.scss
		- and more ...
	- ■ settings // サイト制作設定
		- _colors.scss // サイトカラー設定
		- _iconfont.scss // アイコンフォント
		- _sprite.scss // スプライト
		- _utility.scss // 汎用CSS
		- _variables.scss // 変数設定
	- ■ system // System-Unit編集用
		- system.scss
	- _init.scss // includeファイル
	- application.scss // 本体


<span id="code"></span>
## コード

- /public/assets/include/site_config.php

``` php
<?php

	define("DOMAIN", $_SERVER["SERVER_NAME"]);
	define("PRODUCTON", 'www.example.com');
	define("DEVELOP", 'example-test.com');

	if(DOMAIN === PRODUCTON){
		define("HTTPPATH", "http://www.example.com");
	} else if(DOMAIN === DEVELOP){
		define("HTTPPATH", "http://example-test.com");
	}

	define("HTTP", htmlspecialchars(HTTPPATH, ENT_QUOTES));

?>
```

- /public_html/index.php

``` php
<?php
	$slug = 'slug';// includeなどの条件分岐用
	$title = 'タイトル';
	$description = 'ディスクリプション';
	$keywords = 'キーワード1,キーワード2,キーワード3';
	$image_index = 0;// 0:index 1:noimageindex
	$search_index = 0;// 0:index 1:noindex,nofolow
	include_once(dirname(__FILE__) . "/assets/include/site_config.php");
	include_once(dirname(__FILE__) . "/assets/include/_html_header.php");
?>
<body>
<?php
	include_once(dirname(__FILE__) . "/assets/include/_start_of_body.php");
	include_once(dirname(__FILE__) . "/assets/include/_header.php");
	include_once(dirname(__FILE__) . "/assets/include/_gnav.php");
?>


<div id="ct_wp">

	<div id="main">
		<main role="main">

			…

		</main>
	</div><!-- /#main -->

<?php
	include_once(dirname(__FILE__) . "/assets/include/_side.php");
?>

</div><!-- /#ct_wp -->

<?php
	include_once(dirname(__FILE__) . "/assets/include/_footer.php");
	include_once(dirname(__FILE__) . "/assets/include/_end_of_body.php");
?>
</body>
</html>
```

- /public/assets/include/_html_header.php

``` html
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width">
<?php if ($image_index!==0): ?><meta name="googlebot" content="noimageindex"><?php endif; ?>
<?php if ($search_index!==0): ?><meta name="robots" content="noindex,nofollow"><?php endif; ?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<link rel="shortcut icon" href="<?php echo HTTP; ?>/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo HTTP; ?>/assets/images/apple-touch-icon.png" type="image/png">
<link rel="stylesheet" href="<?php echo HTTP; ?>/assets/stylesheets/application.css" media="all">
<?php if($regacy_IE): ?>
<!--[if lt IE 9]>
<script src="<?php echo HTTP; ?>/assets/javascripts/libs/html5shiv.js"></script>
<script src="<?php echo HTTP; ?>/assets/javascripts/libs/css3-mediaqueries.min.js"></script>
<![endif]-->
<?php endif; ?>
</head>
```

- /public/assets/include/_end_of_body.php

``` html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo HTTP; ?>/assets/javascripts/libs/jquery-1.11.1.min.js"><\/script>')</script>
<?php if($regacy_IE): ?>
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo HTTP; ?>/assets/javascripts/libs/selectivizr-min.js"></script><![endif]-->
<?php endif; ?>
<script src="<?php echo HTTP; ?>/assets/javascripts/libs/css_browser_selector.min.js"></script>
<script src="<?php echo HTTP; ?>/assets/javascripts/libs/nivo-lightbox.min.js"></script>
<script src="<?php echo HTTP; ?>/assets/javascripts/application.min.js"></script>
```


<p style="margin-top: 3em;text-align: right;"><a href="#">↑ TOPヘ戻る</a></p>

