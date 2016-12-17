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

    <div class="grid-item l-guest">
      <div class="grid-inner">
        Guest Area
      </div>
    </div>
    <!-- /.grid-item l-guest -->

    <main class="grid-item l-main" role="main">
      <div class="grid-inner">
        Main Contents
      </div>
    </main>
    <!-- /.grid-item l-main -->

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

<?php
	include_once(dirname(__FILE__) . "/assets/include/_footer.php");
	include_once(dirname(__FILE__) . "/assets/include/_end_of_body.php");
?>
</body>
</html>
