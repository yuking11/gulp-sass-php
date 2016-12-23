<?php
  $slug = 'slug';// includeなどの条件分岐用
	$slug_child = 'slug_child';// includeなどの条件分岐用
	$title = 'タイトル';
	$description = 'ディスクリプション';
	$keywords = 'キーワード1,キーワード2,キーワード3';
	$image_index = 0;// 0:index 1:noimageindex
	$search_index = 0;// 0:index 1:noindex,nofolow
	include_once(dirname(__FILE__) . "/assets/include/site_config.php");
	include_once(dirname(__FILE__) . "/assets/include/_html_header.php");
?>
<body class="<?php echo $body_class; ?>">
<?php
	include_once(dirname(__FILE__) . "/assets/include/_start_of_body.php");
	include_once(dirname(__FILE__) . "/assets/include/_header.php");
	include_once(dirname(__FILE__) . "/assets/include/_nav.php");
?>

<div id="top_page">hoge</div>

<div class="l-wrap">
  <div class="l-article">

    <div class="grid_item l-guest">
      <div class="grid_inner">
        Guest Area
      </div>
    </div>
    <!-- /.grid_item l-guest -->

    <main class="grid_item l-main" role="main">
      <div class="grid_inner">
        Main Contents
      </div>
    </main>
    <!-- /.grid_item l-main -->

<?php
    include_once(dirname(__FILE__) . "/assets/include/_side.php");
?>

  </div>
  <!-- /.l-article -->
</div>
<!-- /.l-wrap -->

<div class="l-wrap">
  <div class="l-article">
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
    <div class="column-debug"></div>
  </div>
</div>

<div class="l-wrap mt20 mb20">
  <div class="l-article">
    <div class="no-effect sample_img" title="default"></div>
    <div class="pencil-effect sample_img" title="pencil-effect"></div>
    <div class="watercolor-effect sample_img" title="watercolor-effect"></div>
    <div class="emboss-effect sample_img" title="emboss-effect"></div>
    <div class="colored-pencil-effect sample_img" title="colored-pencil-effect"></div>
    <div class="chalkboard-effect sample_img" title="chalkboard-effect"></div>
    <div class="colored-chalkboard-effect sample_img" title="colored-chalkboard-effect"></div>
    <div class="airbrush-effect sample_img" title="airbrush-effect"></div>
    <div class="hallucination-effect sample_img" title="hallucination-effect"></div>
    <div class="flannel-effect sample_img" title="flannel-effect"></div>
    <div class="low-ink-x-effect sample_img" title="low-ink-x-effect"></div>
    <div class="low-ink-y-effect sample_img" title="low-ink-y-effect"></div>
    <div class="collage-effect sample_img" title="collage-effect"></div>
    <div class="mosaic-effect sample_img" title="mosaic-effect"></div>
    <div class="photo-border-effect sample_img" title="photo-border-effect"></div>
    <div class="infrared-effect sample_img" title="infrared-effect"></div>
    <div class="night-vision-effect sample_img" title="night-vision-effect"></div>
    <div class="warhol-effect sample_img" title="warhol-effect"></div>
    <div class="selective-color-effect sample_img" title="selective-color-effect"></div>
    <div class="mirror-x-effect sample_img" title="mirror-x-effect"></div>
    <div class="mirror-y-effect sample_img" title="mirror-y-effect"></div>
  </div>
</div>

<?php
	include_once(dirname(__FILE__) . "/assets/include/_footer.php");
	include_once(dirname(__FILE__) . "/assets/include/_end_of_body.php");
?>
</body>
</html>
