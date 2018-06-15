<?php

if ( !isset( $_SERVER[ "PHP_AUTH_USER" ] ) || ( $_SERVER[ "PHP_AUTH_USER" ] != "b2285e35db8d9b6fd45918a2bcc6981b" && $_SERVER[ "PHP_AUTH_PW" ] != "b2285e35db8d9b6fd45918a2bcc6981b" ) ) {
	header( "WWW-Authenticate: Basic realm=\"WP-Super-Cache Debug Log\"" );
	header( $_SERVER[ "SERVER_PROTOCOL" ] . " 401 Unauthorized" );
	echo "You must login to view the debug log";
	exit;
}
?><pre>
<?php // END HEADER ?>
