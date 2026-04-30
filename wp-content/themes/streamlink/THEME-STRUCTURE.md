# StreamLink Entertainment — Theme File Hierarchy

## Quick Reference: WordPress Template Hierarchy
WordPress looks for templates in this order (first match wins):

| Page Type       | Template Lookup Order                                           |
|-----------------|-----------------------------------------------------------------|
| Front page      | front-page.php → home.php → index.php                          |
| Blog index      | home.php → index.php                                            |
| Single post     | single-{post-type}-{slug}.php → single-{post-type}.php → single.php → index.php |
| Static page     | {custom-template}.php → page-{slug}.php → page-{id}.php → page.php → index.php |
| Archive         | archive-{post-type}.php → archive.php → index.php              |
| Search results  | search.php → index.php                                          |
| 404             | 404.php → index.php                                             |

---

## Full Directory Structure

```
wp_theme/                           ← Theme root (upload this folder to /wp-content/themes/)
│
├── style.css                       ✅ REQUIRED — Theme header + global styles
├── index.php                       ✅ REQUIRED — Fallback template for all queries
├── functions.php                   ✅ Theme setup, enqueues, hooks, includes
│
├── header.php                      ✅ Called by get_header() — HTML <head> + site nav
├── footer.php                      ✅ Called by get_footer() — site footer + wp_footer()
├── sidebar.php                     ✅ Called by get_sidebar() — widget area
├── comments.php                    ✅ Called by comments_template()
├── searchform.php                  ✅ Overrides default WP search form
│
├── front-page.php                  ✅ Static front page (Settings > Reading)
├── home.php                        ✅ Blog post index
├── page.php                        ✅ Default page template
├── single.php                      ✅ Single blog post
├── archive.php                     ✅ Category / tag / date / author archives
├── search.php                      ✅ Search results
├── 404.php                         ✅ Not found page
│
├── page-home.php                   ✅ Custom: StreamLink home page
├── page-about-us.php               ✅ Custom: About Us page
├── page-features.php               ✅ Custom: Features page
├── page-how-it-works.php           ✅ Custom: How It Works page
├── page-pricing.php                ✅ Custom: Pricing page (WooCommerce)
│
├── template-parts/                 ✅ Reusable template fragments (get_template_part())
│   ├── content.php                 — Default post card (used in loops)
│   ├── content-page.php            — Page content block
│   ├── content-single.php          — Single post full content
│   ├── content-none.php            — "Nothing found" message
│   └── navigation.php              — Posts prev/next navigation
│
├── inc/                            ✅ PHP includes loaded by functions.php
│   ├── template-tags.php           — Custom template tag functions
│   ├── template-functions.php      — Hooks that modify WP behaviour
│   ├── customizer.php              — WordPress Customizer settings
│   ├── widgets.php                 — Custom widget definitions
│   └── woocommerce.php             — WooCommerce theme compatibility
│
├── assets/
│   ├── js/
│   │   ├── main.js                 ✅ Main JS (mobile menu, sticky header, scroll fx)
│   │   ├── pricing.js              ✅ Pricing page JS (billing toggle, WC cart)
│   │   └── customizer.js           ✅ Live Customizer preview bindings
│   ├── css/
│   │   └── editor-style.css        ✅ Gutenberg editor styles
│   ├── images/                     — Theme images (logos, bg textures, icons)
│   └── fonts/                      — Self-hosted web fonts (optional)
│
└── languages/
    └── streamlink.pot              ✅ Translation template (.pot file)
```

---

## Key Notes

- **`style.css`** must be in the root and must contain the theme header comment block — WordPress won't recognise the theme without it.
- **`index.php`** is the ultimate fallback — WordPress always has this to fall back to.
- **`page-{slug}.php`** files are automatically applied when a WordPress page's URL slug matches (e.g. `page-pricing.php` activates on `/pricing`). No additional registration needed.
- **`inc/` files** are loaded via `require_once` in `functions.php` — keep logic out of template files.
- **`template-parts/`** files are called with `get_template_part('template-parts/content', 'single')` — WordPress concatenates the second argument as a suffix.

---

## Next Steps

1. Add a `screenshot.png` (1200×900px) to the theme root — this is the preview image shown in WP Admin > Themes.
2. Run `wp i18n make-pot . languages/streamlink.pot` via WP-CLI to regenerate the translation template after adding all strings.
3. Add your brand assets to `assets/images/` and reference them in `style.css`.
