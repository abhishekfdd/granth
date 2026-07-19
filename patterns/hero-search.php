<?php
/**
 * Title: Hero with search
 * Slug: granth/hero-search
 * Categories: granth, banner
 * Viewport Width: 1400
 * Description: Full-width hero with a heading, supporting text and a centered search form.
 *
 * @package Granth
 */

?>
<!-- wp:group {"align":"full","backgroundColor":"tertiary","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'How can we help?', 'granth' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Search the documentation, or browse the topics below.', 'granth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'search field label', 'granth' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the documentation', 'search field placeholder', 'granth' ); ?>","buttonText":"<?php echo esc_html_x( 'Search', 'search button text', 'granth' ); ?>","buttonPosition":"button-inside"} /--></div>
<!-- /wp:group -->
