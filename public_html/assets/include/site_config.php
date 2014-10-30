<?php

	define("DOMAIN", $_SERVER["SERVER_NAME"]);
	define("PRODUCTION", 'www.example.com');
	define("DEVELOP", 'example-test.com');

	if(DOMAIN === PRODUCTION){
		define("HTTPPATH", "http://www.example.com");
	} else if(DOMAIN === DEVELOP){
		define("HTTPPATH", "http://example-test.com");
	}

	define("HTTP", htmlspecialchars(HTTPPATH, ENT_QUOTES));

	// regacy support
	$regacy_IE = false;

?>
