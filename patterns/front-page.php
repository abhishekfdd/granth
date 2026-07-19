<?php
/**
 * Title: Front page
 * Slug: granth/front-page
 * Categories: granth
 * Viewport Width: 1400
 * Template Types: front-page
 * Inserter: no
 * Description: A complete front page: header, search hero, topic card grid and footer.
 *
 * @package Granth
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:pattern {"slug":"granth/hero-search"} /-->

<!-- wp:pattern {"slug":"granth/topic-cards"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
