<?php
/**
 * Title: FAQ
 * Slug: granth/faq
 * Categories: granth, text
 * Viewport Width: 800
 * Description: A frequently asked questions section using collapsible Details blocks.
 *
 * @package Granth
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Frequently asked questions', 'granth' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Is this compatible with my existing content?', 'granth' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes. Everything is built with standard blocks, so existing posts and pages carry over without changes.', 'granth' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can I change the colors and fonts?', 'granth' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Open the Styles panel in the site editor. Colors, typography and spacing can all be adjusted there, and your changes survive theme updates.', 'granth' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Where do I go for support?', 'granth' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Check the documentation first. If you are still stuck, post in the support forum and include the steps to reproduce the problem.', 'granth' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
