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
  $host_local = 'local.example.com';

  if( in_array($host, $host_productions) ) {
    //define("HTTP", 'http://www.example.com');
  } else if($host === $host_develop){
    //define("HTTP", 'http://example.com.s-rep.net');
  } else if($host === $host_local){
    //define("HTTP", 'http://local.example.com');
  }
  define("HTTP", $base_url);

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

  /*
   * サイト設定
  */

  // regacy support
  $regacy_IE = false;

	// body class
  if( isset($slug_child) ){
    $body_class = $slug . '__' . $slug_child;
  } else {
    $body_class = $slug;
  }
  define('PAGE_NAME', htmlspecialchars($body_class, ENT_QUOTES));

?>
