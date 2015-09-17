<?php

  /*
   * URL設定
  */
  $base_url = isset($_SERVER['HTTPS']) &&
              strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
  $base_url .= '://' . $_SERVER['HTTP_HOST'];

  $host = $_SERVER["HTTP_HOST"];
  $host_productions = array('example.com', 'www.exaplem.com');
  $host_develop = 'example.com.s-rep.net';
  $host_local  = 'localhost'.strstr($host, ':');

  if( in_array($host, $host_productions) ) {
    //define("HTTP", 'http://www.example.com');
  } else if($host === $host_develop){
    //define("HTTP", 'http://example.com.s-rep.net');
  } else if($host === $host_local){
    //define("HTTP", 'http://local.example.com');
  }
  define("HTTP", htmlspecialchars($base_url, ENT_QUOTES));

  $current_url = $base_url . $_SERVER['REQUEST_URI'];
  define("CURRENT_URL", htmlspecialchars($current_url, ENT_QUOTES));

  /*
   * 関数
  */
  function home_url( $atts ) {
    if( !empty($atts) ){
      $url = HTTP . $atts;
    } else {
      $url = HTTP;
    }
    return $url;
  }
  function get_template_directory_uri( $atts ) {
    if( !empty($atts) ){
      $url = HTTP . '/assets' . $atts;
    } else {
      $url = HTTP . '/assets';
    }
    return $url;
  }
  function esc_url( $atts ) {
    $url = htmlspecialchars($atts, ENT_QUOTES);
    return $url;
  }
  // モバイル判定
  function is_mobile() {
    $ua = array(
      'iPhone',         // Apple iPhone
      'iPod',           // Apple iPod touch
      'iPad',           // Apple iPad
      'Android',        // 1.5+ Android
      'dream',          // Pre 1.5 Android
      'CUPCAKE',        // 1.5+ Android
      'blackberry9500', // Storm
      'blackberry9530', // Storm
      'blackberry9520', // Storm v2
      'blackberry9550', // Storm v2
      'blackberry9800', // Torch
      'webOS',          // Palm Pre Experimental
      'incognito',      // Other iPhone browser
      'webmate'         // Other iPhone browser
    );
    $pattern = '/'.implode('|', $ua).'/i';
    $agent = $_SERVER['HTTP_USER_AGENT'];
    return preg_match($pattern, $agent);
  }
  // レガシーIE判定
  function is_regacy_IE() {
    $regacy_ies = array('MSIE 7.0', 'MSIE 8.0');
    $pattern = '/'.implode('|', $regacy_ies).'/i';
    $agent = $_SERVER['HTTP_USER_AGENT'];
    return preg_match($pattern, $agent);
  }

  /*
   * サイト設定
  */

  // regacy support
  $regacy_IE = false;

	// body class
  $body_class = isset($slug_child) ? $slug . '__' . $slug_child : $slug;

  // PAGE_NAME
  define('PAGE_NAME', htmlspecialchars($body_class, ENT_QUOTES));

?>
