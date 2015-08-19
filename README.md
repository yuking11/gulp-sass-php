# gulp-sass-php
---

## 目次

- [概要](#概要)
- [制作情報](#制作情報)
- [ドメイン](#ドメイン)
- [開発サイト](#開発サイト)
- [基本ガイドライン](#基本ガイドライン)
- [ブラウザレギュレーション](#ブラウザレギュレーション)
- [制作環境](#制作環境)
- [ディレクトリ構造](#ディレクトリ構造)
- [Sassファイル設計](#Sassファイル設計)
- [更新履歴](#更新履歴)


## 概要

gulpを利用したhtml5（php）テンプレート。

ブラウザレギュレーション、制作情報はプロジェクト毎に修正してください。

## 制作情報

### ドメイン

[example.com](http://www.example.com/)


### 開発サイト

- 静的：[http://example-test.com/](http://example-test.com/)
- 動的：[http://example-dev.com/](http://example-dev.com/)


### 基本ガイドライン

[http://coding-manual.s-rep.net/guideline/](http://coding-manual.s-rep.net/guideline/)


### ブラウザレギュレーション

#### Windows 7+

- IE 11
- Google Chrome+
- Mozilla Firefox+

#### Mac OS X (10.9+)

- Safari


## 制作環境

### 言語

- php
- html5
- css3
- javascript

### フレームワーク

- [Sass](http://sass-lang.com/)
- [jQuery](http://jquery.com/)
- [node](https://nodejs.org)

### ビルドツール

- [gulp](http://gulpjs.com) （platform）

### プラグイン

- [Nivo Lightbox (jQuery)](https://github.com/gilbitron/Nivo-Lightbox)

### エディタ

- [Sublime text 3](http://www.sublimetext.com/3)

#### package.json

- "browser-sync": "^2.7.7",
- "gulp": "^3.9.0",
- "gulp-autoprefixer": "^2.3.1",
- "gulp-concat": "^2.5.2",
- "gulp-consolidate": "^0.1.2",
- "gulp-cssmin": "^0.1.7",
- "gulp-iconfont": "^1.0.0",
- "gulp-load-plugins": "^1.0.0-rc.1",
- "gulp-plumber": "^1.0.1",
- "gulp-rename": "^1.2.2",
- "gulp-sass": "^2.0.4",
- "gulp-uglify": "^1.2.0",
- "gulp.spritesmith": "^4.0.0",
- "lodash": "^2.4.1"

## ディレクトリ構造

開発・本番環境も基本的には同じだと思います。

```
example.com/
|— public_html/  // 公開ディレクトリ
|     |— assets/
|     |     |— fonts/  // gulp font で生成 iconfontファイル
|     |     |     |— icon.eot
|     |     |     |— icon.svg
|     |     |     |— icon.ttf
|     |     |     `— icon.woff
|     |     |
|     |     |— images/
|     |     |     |— nivo_lightbox/
|     |     |     |— sprites/
|     |     |     |     |— hogehoge.png     // 通常用
|     |     |     |     |— hogehoge-2x.png  // Retina用
|     |     |     |     ...
|     |     |     |
|     |     |     |— apple-touch-icon.png
|     |     |     |— favicon.ico
|     |     |     |— sprite.png    // gulp sprite で生成 Sprite画像
|     |     |     `— sprite2x.png  // gulp sprite で生成 Sprite-Retina画像
|     |     |
|     |     |— include/
|     |     |     |— _end_of_body.php
|     |     |     |— _footer.php
|     |     |     |— _header.php
|     |     |     |— _html_header.php
|     |     |     |— _nav.php
|     |     |     |— _side.php
|     |     |     |— _start_of_body.php
|     |     |     `— site_config.php
|     |     |
|     |     |— javascripts/
|     |     |     |— libs/
|     |     |     |     |- jquery.*.min.js
|     |     |     |     ...
|     |     |     |
|     |     |     |— application.js
|     |     |     `— application.min.js  // application.js Minify
|     |     |
|     |     `— stylesheets/
|     |           |— application.css     // コンパイルファイル
|     |           `— application.min.css // application.css Minify
|     |
|     |— hogehoge/
|     |     |— index.php
|     |     ...
|     |
|     |— .htaccess
|     |— icon-sample.php  // src/_icons/template.htmlのコンパイルファイル
|     `— index.php
|
|— src/  // 各srcファイル格納
|     |— _icons/  // IconFont格納
|     |     |— *.svg           // svgファイル
|     |     |— template.html   // iconfont一覧用の元html
|     |     `— template.css    // _iconfont.scssの元css
|     |
|     `— _sass/   // 各sassファイル格納（Sassファイル設計 参照）
|
|— .editorconfig  // エディター設定ファイル
|— .gitignore     // git監視外設定ファイル
|— config.rb      // Compass設定ファイル
|— gulpfile.js    // gulp設定ファイル
|— package.json   // npm
`— README.md      // 本ファイル
```


## Sassファイル設計

```
_sass/
|
|— base/
|     |— _default.scss    // デフォルトスタイル
|     |— _normalize.scss  // normalize（未使用）
|     `— _reset.scss      // HTML5 doctor Reset CSS
|
|— mixins/
|     |— _mixin_animation.scss
|     |— _mixin_border.scss
|     |— _mixin_box.scss
|     |— _mixin_button.scss
|     |— _mixin_display.scss
|     |— _mixin_font.scss
|     |— _mixin_gradient.scss
|     |— _mixin_icon.scss
|     |— _mixin_position.scss
|     |— _mixin_text.scss
|     `— _mixins.scss        // importファイル
|
|— modules/
|     |— _iconfont.scss // アイコンフォント（src/_icons/template.cssから生成されるファイル）
|     |— _sprite.scss   // css sprite
|     `— _utility.scss  // 汎用クラス
|
|— partials/
|     |— index/
|     |     |— _base.scss
|     |     ...
|     |
|     |— shared_block/
|     |     |— _footer.scss
|     |     |— _header.scss
|     |     |— _layout.scss
|     |     |— _main.scss
|     |     |— _nav.scss
|     |     `— _side.scss
|     |
|     |— shared_parts/
|     |     |— _button.scss
|     |     |— _form.scss
|     |     |— _setcion.scss
|     |     |— _table.scss
|     |     `— _title.scss
|     |
|     `— _partials.scss  // import用
|
|— settings/
|     |— _colors.scss     // カラー設定
|     `— _variables.scss  // 各種変数設定
|
|— vendor/
|     |— nivo_lightbox/
|     |     |— _default.scss
|     |     `— _nivo-lightbox.scss
|     |
|     |— _over_write.scss  // 各プラグイン上書き用css
|     `— _vendor.scss      // import用
|
|— _init.scss       // import用
|
`— application.css  // 本体
```


## 更新履歴

- 15/08/18 - gulp-sass-phpにリネーム
- 15/08/18 - compassを削除、spriteとiconfontのgulp.taskを追加
- 15/08/07 - ディレクトリ構造、Sassファイル設計を修正
- 15/07/17 - gulp-compass-phpにリネーム
- 15/07/14 - gulpにautoprefixerを追加


<p style="margin-top: 3em;text-align: right;"><a href="#">↑ TOPヘ戻る</a></p>

