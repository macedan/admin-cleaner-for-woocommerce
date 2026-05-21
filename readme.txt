=== DanMace Admin Cleanup Tools ===
Contributors: danmace
Tags: woocommerce, admin, performance, cleanup, ai
Requires at least: 6.0
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 1.0.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Remove admin bloat, unnecessary dashboard widgets, WooCommerce clutter, and AI features from WordPress and popular plugins.

== Description ==

DanMace Admin Cleanup Tools removes common sources of admin clutter and unnecessary processing in WooCommerce and WordPress.

This plugin is designed for developers and site owners who want a cleaner, faster admin experience without unnecessary features enabled by default.

== Features ==

- Removes default WordPress dashboard widgets (e.g. WordPress news)
- Removes WooCommerce processing order count from admin menu (reduces unnecessary queries)
- Disables WooCommerce Analytics
- Disables AI features in WordPress Core (7.0+), Jetpack, and Yoast SEO

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/danmace-admin-cleanup-tools` directory, or install via the WordPress plugin screen.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. No configuration required.

== Frequently Asked Questions ==

= Does this plugin require WooCommerce? =

WooCommerce-specific features will only run if WooCommerce is active.

= Does this plugin have settings? =

No. This plugin applies opinionated defaults to clean up the admin experience.

= Can I disable individual features? =
Not yet — all features are enabled by default. A settings page is planned for a future release.

== Changelog ==

= 1.0.1 =
* Disables AI features in WordPress Core (7.0+)
* Disables Jetpack AI Assistant
* Disables Yoast SEO AI generator

= 1.0.0 =
* Initial release
* Removes WordPress dashboard widgets
* Removes WooCommerce processing order count
* Disables WooCommerce Analytics

== Upgrade Notice ==

= 1.0.1 =
Adds AI removal for WordPress Core, Jetpack, and Yoast SEO. No configuration required.

= 1.0.0 =
Initial release.