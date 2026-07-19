<?php
/**
 * Title: Footer credit
 * Slug: granth/hidden-footer-credit
 * Inserter: no
 *
 * @package Granth
 */

?>
<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size">
<?php
printf(
	/* translators: %s: WordPress, linked to wordpress.org. */
	esc_html__( 'Powered by %s', 'granth' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'granth' ) ) . '">WordPress</a>'
);
?>
</p>
<!-- /wp:paragraph -->
