# gulp-compass-php
---

## 目次

 - [ドメイン](#ドメイン)
 - [開発サイト](#開発サイト)
 - [基本ガイドライン](#基本ガイドライン)
 - [ブラウザレギュレーション](#ブラウザレギュレーション)
 - [制作環境](#制作環境)
 - [ディレクトリ構造](#ディレクトリ構造)
 - [Sassファイル設計](#Sassファイル設計)
 - [更新履歴](#更新履歴)


## ドメイン

[example.com](http://www.example.com/)


## 開発サイト

- 静的：[http://example-test.com/](http://example-test.com/)
- 動的：[http://example-dev.com/](http://example-dev.com/)


## 基本ガイドライン

[http://coding-manual.s-rep.net/guideline/](http://coding-manual.s-rep.net/guideline/)


## ブラウザレギュレーション

### Windows 7+

- IE 11
- Google Chrome+
- Mozilla Firefox+

### Mac OS X (10.9+)

- Safari


## 制作環境

### 言語

- php
- haml
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

- [gulp](http://gulpjs.com) （platform）
- [Koala](http://koala-app.com/) （windows）
- [Codekit](https://incident57.com/codekit/) （Mac）


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
        - application.min.css // application.css Minify
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
  - .gitignore // git監視外設定ファイル
  - config.rb // Compass設定ファイル
  - gulpfile.js // gulp設定ファイル
  - package.json // npm
  - README.md // 本ファイル


## Sassファイル設計

■ … ディレクトリ

- ■ _sass // 各sassファイル格納
  - ■ base // 共通スタイル
    - _default.scss
    - _layout.scss
    - _normalize.scss // compass reset 使用のため未使用
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
    - _mixin_position.scss
    - _mixin_text.scss
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


## 更新履歴

15/07/17 - gulp-compass-phpにリネーム
15/07/14 - gulpにautoprefixerを追加


<p style="margin-top: 3em;text-align: right;"><a href="#">↑ TOPヘ戻る</a></p>

