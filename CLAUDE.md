# Granth — project notes

Granth is a free WordPress block theme (FSE) for documentation and knowledge base sites, built for submission to the WordPress.org theme directory. v1.0.0 is tagged and pushed to git@github.com:abhishekfdd/granth.git. The theme is feature-complete: all templates, patterns, callout styles, and two style variations are done, and it passes the Theme Check plugin cleanly.

## Hard constraints — never violate

- Must pass WordPress.org theme review: GPL-compatible everything, all strings translatable with text domain `granth`, escape all PHP output, no plugin-territory functionality, no custom post types, no analytics, no remote requests.
- PHP functions prefixed `granth_`. Keep functions.php minimal — it only registers block styles, the pattern category, and the callout stylesheet. theme.json is the source of truth for all design tokens.
- Fonts bundled locally (Figtree for text, JetBrains Mono for code, both OFL with license files in assets/fonts/). Never load fonts from a CDN.
- Navigation/structure uses core blocks only. The docs sidebar is a Navigation block with a Page List fallback, driven by page hierarchy. No custom JS unless purely presentational and tiny.
- Skip link (core provides it — templates must keep a `<main>` element), keyboard navigation, and sensible heading order are required. All palette combinations must hold WCAG AA (4.5:1); this is verified for the default, Midnight, and Parchment schemes.
- Minimum versions: WP 7.0, PHP 8.3 (style.css and readme.txt must agree). theme.json and both style variations are version 3 (`$schema` wp/7.0). v3 semantics: `defaultFontSizes: false` and `defaultSpacingSizes: false` are set so the theme's presets replace core defaults — keep them when editing presets.

## Architecture decisions

- Site title renders at `level: 0` (a `p`) in header/footer so each page has exactly one h1.
- Docs pages: `templates/page.html` = wide Columns block, 260px sidebar column (`<aside>` via template-part tagName) + content column wrapping post title/content in `<main>`. `page-no-sidebar.html` is the registered alternative.
- Front page topic grid = Query Loop of top-level pages (`"postType":"page","parents":[0]`), grid post-template, 3 columns. Sidebar and grid both derive from the page tree — that's the theme's core premise.
- All user-visible strings live in PHP pattern files (patterns/), because strings in .html templates are not translatable. `hidden-*.php` patterns (Inserter: no) exist solely to carry template strings; templates reference them via `<!-- wp:pattern -->`. Keep it this way when adding template text.
- Callouts (note/tip/warning) are Group block styles registered in functions.php; CSS in assets/css/callouts.css loads via `wp_enqueue_block_style` (auto-inlined). Accent colors come from `settings.custom.callout` in theme.json so style variations can retheme them.
- Style variations (styles/midnight.json, styles/parchment.json) override the same five palette slugs (base/contrast/primary/secondary/tertiary) plus custom.callout, and change typography with color. Keep slugs stable.

## Known gotchas

- WP caches the theme's pattern file list keyed to the theme version. After adding/removing pattern files without a version bump, patterns silently don't register — fix with `wp_get_theme()->delete_pattern_cache()` (wp eval) or bump Version in style.css.
- Resaving a template part in the site editor creates a DB override that shadows the file, and rewrites inline Page List navigations into site-local `{"ref":N}` menus. Never commit a `ref` into theme files. During file iteration, delete the override post (`wp_template_part` post for the part) so files stay canonical.
- Keep block markup in the editor's canonical serialization (verify with a `parse_blocks`/`serialize_blocks` round-trip — must be byte-identical). Editor drops default attrs like `"level":2` and orders navigation attrs `overlayMenu, fontSize, layout`.
- Every published page appears in the sidebar/topic grid (Page List fallback behavior). Plugin-created pages (e.g. WooCommerce) will show up; curating requires assigning a real menu.
- `front-page.html` claims the homepage regardless of Reading settings, so the blog is only reachable via a posts page or direct links — intentional for a docs theme.

## Working style

- One commit per major step, only when the step works. Messages: plain, short, human, mid-flow ("add docs sidebar template part"). No emoji, no conventional-commit prefixes, no co-author lines, no mention of AI anywhere in commits.
- After generating/changing templates or patterns, ask the user to open them in the site editor, resave, and report whether the editor rewrote the markup; reconcile files to the editor's serialization.
- Verify changes by fetching pages with curl and checking rendered markup (headings order, aria-current, skip-link target, font-face URLs). Ask before adding anything beyond documented scope; theme review rules win over feature requests.
- Test content recipe: page tree of Getting Started (Installation → Requirements, Configuration, First Steps), Guides (Theming Basics, Working with Patterns), FAQ — realistic docs content with code blocks, created via WP-CLI.
- WP-CLI on Local WP sites: `wp` may not be on PATH. Use Local's bundled phar (`/Applications/Local.app/Contents/Resources/extraResources/bin/wp-cli/wp-cli.phar`) with Local's PHP and the per-site MySQL socket from `~/Library/Application Support/Local/run/<siteID>/mysql/mysqld.sock` (site ID from Local's sites.json), passing `--path` to the WP root.

## Remaining before wp.org submission

- Replace screenshot.png (currently a generated placeholder) with a real 1200×900 front-page capture.
- Package the zip excluding .git, .claude, .gitignore, CLAUDE.md, README.md.
- Consider creating a GitHub Release from the v1.0.0 tag with that zip attached (README links to the releases page).
