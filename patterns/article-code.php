<?php
/**
 * Title: Code-heavy article starter
 * Slug: granth/article-code
 * Categories: granth, text
 * Viewport Width: 800
 * Block Types: core/post-content
 * Post Types: page, post
 * Description: A starter layout for technical articles: intro, prerequisites callout, steps with code blocks and a closing tip.
 *
 * @package Granth
 */

?>
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Start with a short introduction that explains what this guide covers and what the reader will have working by the end.', 'granth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-callout-note","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-callout-note"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Note:', 'granth' ); ?></strong> <?php esc_html_e( 'List any prerequisites here, such as required software versions or access permissions.', 'granth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Install', 'granth' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Explain the first step, then show the exact command the reader should run.', 'granth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>npm install example-package
npx example init</code></pre>
<!-- /wp:code -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Configure', 'granth' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Walk through the configuration and call out the values the reader needs to change.', 'granth' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>{
  "target": "production",
  "verbose": false
}</code></pre>
<!-- /wp:code -->

<!-- wp:group {"className":"is-style-callout-tip","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-callout-tip"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( 'Tip:', 'granth' ); ?></strong> <?php esc_html_e( 'End with a shortcut, a common pitfall to avoid, or a link to the next guide in the series.', 'granth' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
