<?php
/**
 * Title: Callout boxes
 * Slug: granth/callouts
 * Categories: granth, text
 * Viewport Width: 800
 * Description: Note, tip and warning callouts built as Group block styles.
 *
 * @package Granth
 */

?>
<!-- wp:group {"className":"is-style-callout-note","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-callout-note"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Note:', 'granth' ); ?></strong> <?php esc_html_e( 'This works out of the box, but the details are worth knowing before you customize further.', 'granth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-callout-tip","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-callout-tip"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Tip:', 'granth' ); ?></strong> <?php esc_html_e( 'You can accomplish this faster from the command line.', 'granth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-callout-warning","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-callout-warning"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Warning:', 'granth' ); ?></strong> <?php esc_html_e( 'This action cannot be undone. Back up your data before you continue.', 'granth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
