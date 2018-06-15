<?php
/**
 * The default template for displaying header
 *
 * @package salient themes
 * @subpackage Flare
 * @since Flare 1.0.0
 */

/**
 * flare_action_before_head hook
 * @since Flare 1.0.0
 *
 * @hooked flare_set_global -  0
 * @hooked flare_doctype -  10
 */
do_action( 'flare_action_before_head' );?>

<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Higher Purpose Fellowship" />
	<meta property="og:description" content="Leading people into a God-fulfilled life." />
	<meta property="og:url" content="http://higherpurposefellowship.com/" />
	<meta property="og:site_name" content="Higher Purpose Fellowship" />
	<meta property="og:image" content="http://higherpurposefellowship.com/wp-content/uploads/2018/05/hpf-og-image.png" />

<head>

	<?php
	/**
	 * flare_action_before_wp_head hook
	 * @since Flare 1.0.0
	 *
	 * @hooked flare_before_wp_head -  10
	 */
	do_action( 'flare_action_before_wp_head' );

	wp_head();

	/**
	 * flare_action_after_wp_head hook
	 * @since Flare 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'flare_action_after_wp_head' );
	?>

</head>

<body <?php body_class(); ?>>

<?php
/**
 * flare_action_before hook
 * @since Flare 1.0.0
 *
 * @hooked flare_page_start - 15
 */
do_action( 'flare_action_before' );

/**
 * flare_action_before_header hook
 * @since Flare 1.0.0
 *
 * @hooked flare_skip_to_content - 10
 */
do_action( 'flare_action_before_header' );

/**
 * flare_action_header hook
 * @since Flare 1.0.0
 *
 * @hooked flare_after_header - 10
 */
do_action( 'flare_action_header' );

/**
 * flare_action_before_content hook
 * @since Flare 1.0.0
 *
 * @hooked null
 */
do_action( 'flare_action_before_content' );
?>
