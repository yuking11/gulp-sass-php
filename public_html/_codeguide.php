
<?php
  $slug = 'codeguide';// includeなどの条件分岐用
	//$slug_child = 'slug_child';// includeなどの条件分岐用
	$title = 'Code Guide';
	$description = 'html, css, jsのcodeguideです。';
	$keywords = 'html,css,javascript,codeguide';
	$image_index = 1;// 0:index 1:noimageindex
	$search_index = 1;// 0:index 1:noindex,nofolow
	include_once(dirname(__FILE__) . "/assets/include/site_config.php");
	include_once(dirname(__FILE__) . "/assets/include/_html_header.php");
?>
<body class="<?php echo $body_class; ?>">
<?php
	include_once(dirname(__FILE__) . "/assets/include/_start_of_body.php");
?>

<div id="ct_wp" class="pt20 pr20 pb20 pl20">

  <h1>Code Guide</h1>

  <section class="section mb40">
    <h1>スムーズスクロールテスト</h1>
    <p>
      <a href="#nivo" data-scroll>"Nivo Lightbox"へ</a>
      <a href="#tab_css" data-scroll="15">"タブ切り替え（css only）"へ</a>
      <a href="#acc_css" data-scroll="-15">"アコーディオン（css only）"へ</a>
    </p>
  </section><!-- /.section -->

  <section id="nivo" class="section mb40">
    <h1>Nivo Lightbox</h1>
    <ul>
      <li>
        <a class="popup" href="http://www.coobal.co.jp/common/img/_sample/1.jpg" data-lightbox-type="iframe" data-lightbox-gallery="gallery1" title="This is Image.">
          <img src="http://www.coobal.co.jp/common/img/_sample/1.jpg" width="80" alt="sample">
        </a>
      </li>
      <li>
        <a class="popup" href="http://wikipedia.com" data-lightbox-type="iframe" data-lightbox-gallery="gallery1" title="This is iframe.">iframe</a>
      </li>
      <li>
        <a class="popup" href="https://www.youtube.com/watch?v=eYVT1M_Rjp0" data-lightbox-gallery="gallery1" title="This is Youtube.">Youtube</a>
      </li>
      <li>
        <a class="popup" href="hogehoge.html" data-lightbox-type="ajax" data-lightbox-gallery="gallery1" title="This is error.">Error sample</a>
      </li>
    </ul>
  </section><!-- /.section -->

  <section id="tab_css" class="section mb40">
    <h1>タブ切り替え（css only）</h1>

    <div class="ui__tab">

      <input type="radio" name="tab-radios" id="tab__ctrl--1" class="tab__ctrl" checked="checked"><!-- fix inline-block
      --><label for="tab__ctrl--1" class="tab__label">HTML</label><!-- fix inline-block

      --><input type="radio" name="tab-radios" id="tab__ctrl--2" class="tab__ctrl"><!-- fix inline-block
      --><label for="tab__ctrl--2" class="tab__label">CSS</label><!-- fix inline-block

      --><input type="radio" name="tab-radios" id="tab__ctrl--3" class="tab__ctrl"><!-- fix inline-block
      --><label for="tab__ctrl--3" class="tab__label">Javascript</label>

      <article id="tab__content--1" class="tab__content">
        <h3>HTML</h3>
        <pre class="t_large">

&lt;div class=&quot;tab&quot;&gt;

  &lt;input type=&quot;radio&quot; name=&quot;tab-radios&quot; id=&quot;tab__ctrl--1&quot; class=&quot;tab__ctrl&quot; checked=&quot;checked&quot;&gt;&lt;!-- fix inline-block
  --&gt;&lt;label for=&quot;tab__ctrl--1&quot; class=&quot;tab__label&quot;&gt;Tab 1&lt;/label&gt;&lt;!-- fix inline-block

  --&gt;&lt;input type=&quot;radio&quot; name=&quot;tab-radios&quot; id=&quot;tab__ctrl--2&quot; class=&quot;tab__ctrl&quot;&gt;&lt;!-- fix inline-block
  --&gt;&lt;label for=&quot;tab__ctrl--2&quot; class=&quot;tab__label&quot;&gt;Tab 2&lt;/label&gt;&lt;!-- fix inline-block

  --&gt;&lt;input type=&quot;radio&quot; name=&quot;tab-radios&quot; id=&quot;tab__ctrl--3&quot; class=&quot;tab__ctrl&quot;&gt;&lt;!-- fix inline-block
  --&gt;&lt;label for=&quot;tab__ctrl--3&quot; class=&quot;tab__label&quot;&gt;Tab 3&lt;/label&gt;

  &lt;article id=&quot;tab__content--1&quot; class=&quot;tab__content&quot;&gt;
    &lt;h3&gt;Tab 1&lt;/h3&gt;
    &lt;p&gt;this is tab 1.&lt;/p&gt;
  &lt;/article&gt;

  &lt;article id=&quot;tab__content--2&quot; class=&quot;tab__content&quot;&gt;
    &lt;h3&gt;Tab 2&lt;/h3&gt;
    &lt;p&gt;this is tab 2.&lt;/p&gt;
  &lt;/article&gt;

  &lt;article id=&quot;tab__content--3&quot; class=&quot;tab__content&quot;&gt;
    &lt;h3&gt;Tab 3&lt;/h3&gt;
    &lt;p&gt;this is tab 2.&lt;/p&gt;
  &lt;/article&gt;

&lt;/div&gt;&lt;!-- /.tab --&gt;
        </pre>
      </article>

      <article id="tab__content--2" class="tab__content">
        <h3>CSS（Sass）</h3>
        <pre class="t_large">

@if $type == all {// set All Devices and SmartPhone
  @keyframes tab_show {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
}// @if

.tab {
  @if $type == all {// set All Devices and SmartPhone
    .tab__ctrl {
      display: none;
    }// .tab__ctrl
    .tab__label {
      display: inline-block;
      background: #999;
      padding: 5px 10px;
      color: #fff;
      text-align: center;
      cursor: pointer;
      @include trs( $time: .5 );
    }// .tab__label
    .tab__label:hover,
    .tab__ctrl:checked + .tab__label {
      background: #ba2020;
    }// .tab__label:hover
    .tab__content {
      display: none;
      background: #ba2020;
      padding: 5px 25px;
      color: #fff;
      @include fs(16);
      box-sizing: border-box;
    }// .tab__content
    #tab__ctrl--1:checked ~ #tab__content--1,
    #tab__ctrl--2:checked ~ #tab__content--2,
    #tab__ctrl--3:checked ~ #tab__content--3 {
      display: block;
      animation: tab_show .5s linear 0s;
    }// #tab__ctrl--1:checked ~ #tab__content--1
  } @else if $type == tab {// set Tablet
  } @else if $type == pc {// set PC
  }// @if
}// .tab
        </pre>
      </article>

      <article id="tab__content--3" class="tab__content">
        <h3>Javascript</h3>
        <p>Not Use.</p>
      </article>

    </div><!-- /.ui__tab -->

  </section><!-- /.section -->

  <section id="acc_css" class="section mb40">
    <h1>アコーディオン（css only）</h1>
    <div class="ui__acc">
      <label for="acc__ctrl--1" class="acc__label">ラベル1</label>
      <input type="radio" id="acc__ctrl--1" name="acc-radios" class="acc__ctrl">
      <div id="acc__content--1" class="acc__content">
        アコーディオン コンテンツ 1
      </div><!-- /.acc__content -->
      <label for="acc__ctrl--2" class="acc__label">ラベル2</label>
      <input type="radio" id="acc__ctrl--2" name="acc-radios" class="acc__ctrl">
      <div id="acc__content--2" class="acc__content">
        アコーディオン コンテンツ 2
      </div><!-- /.acc__content -->
    </div><!-- /.ui__acc -->
  </section><!-- /.section -->

  <section class="section mb40">
    <h1>タブ切り替え（JS）：エフェクト無し</h1>
    <div class="wrap tabs" data-tab>
      <ul class="labels">
        <li><a href="#tab01" data-tab-label="true">タブ01</a></li>
        <li><a href="#tab02" data-tab-label>タブ02</a></li>
        <li><a href="#tab03" data-tab-label>タブ03</a></li>
      </ul>
      <div id="tab01" class="contents contents1" data-tab-content="true">コンテンツ01</div>
      <div id="tab02" class="contents contents2" data-tab-content>コンテンツ02</div>
      <div id="tab03" class="contents contents3" data-tab-content>コンテンツ03</div>
    </div>
  </section><!-- /.section -->

  <section class="section mb40">
    <h1>タブ切り替え（JS）：フェードイン - 1.000sec</h1>
    <div class="wrap tabs" data-tab data-tab-effect="fade" data-tab-speed="1000">
      <ul class="labels">
        <li><a href="#tab_fade_01" data-tab-label="true">タブ01</a></li>
        <li><a href="#tab_fade_02" data-tab-label>タブ02</a></li>
        <li><a href="#tab_fade_03" data-tab-label>タブ03</a></li>
      </ul>
      <div id="tab_fade_01" class="contents contents1" data-tab-content="true">コンテンツ01</div>
      <div id="tab_fade_02" class="contents contents2" data-tab-content>コンテンツ02</div>
      <div id="tab_fade_03" class="contents contents3" data-tab-content>コンテンツ03</div>
    </div>
  </section><!-- /.section -->

  <section class="section mb40">
    <h1>タブ切り替え（JS）：タブ画像ver</h1>
    <div class="wrap tabs" data-tab="image" data-tab-effect="fade" data-tab-speed="250">
      <ul class="labels_img">
        <li><a href="#tab_fade_01" data-tab-label="true"><img src="<?php echo HTTP; ?>/assets/images/_sample/tab_01.jpg" alt="タブ01"></a></li>
        <li><a href="#tab_fade_02" data-tab-label><img src="<?php echo HTTP; ?>/assets/images/_sample/tab_02.jpg" alt="タブ02"></a></li>
        <li><a href="#tab_fade_03" data-tab-label><img src="<?php echo HTTP; ?>/assets/images/_sample/tab_03.jpg" alt="タブ03"></a></li>
      </ul>
      <div id="tab_fade_01" class="contents contents1" data-tab-content="true">コンテンツ01</div>
      <div id="tab_fade_02" class="contents contents2" data-tab-content>コンテンツ02</div>
      <div id="tab_fade_03" class="contents contents3" data-tab-content>コンテンツ03</div>
    </div>
  </section><!-- /.section -->

  <section class="section mb40">
    <h1>アコーディオン（JS）：スライド - .300sec</h1>
    <div class="wrap accordion" data-tab data-tab-effect="slide" data-tab-speed="300">
      <div class="label"><a href="#acc01" data-tab-label="">アコーディオン01</a></div>
      <div id="acc01" class="contents contents1" data-tab-content="">コンテンツ01</div>
      <div class="label"><a href="#acc02" data-tab-label>アコーディオン02</a></div>
      <div id="acc02" class="contents contents2" data-tab-content>コンテンツ02</div>
      <div class="label"><a href="#acc03" data-tab-label>アコーディオン03</a></div>
      <div id="acc03" class="contents contents3" data-tab-content>コンテンツ03</div>
    </div>
  </section><!-- /.section -->


  <p style="margin-top: 750px;"><a href="#page_top" data-scroll>Page Top</a></p>

</div><!-- /#ct_wp -->

<?php
	include_once(dirname(__FILE__) . "/assets/include/_end_of_body.php");
?>
</body>
</html>
