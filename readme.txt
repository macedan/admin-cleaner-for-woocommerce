=== WooCommerce Admin Cleaner ===
Contributors: danmace
Tags: woocommerce, admin, performance, cleanup
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Lightweight plugin to clean up the WordPress and WooCommerce admin by removing unnecessary features and overhead.

== Description ==

WooCommerce Admin Cleaner removes common sources of admin clutter and unnecessary processing in WooCommerce and WordPress.

This plugin is designed for developers and site owners who want a cleaner, faster admin experience without unnecessary features enabled by default.

== Features ==

- Removes default WordPress dashboard widgets (e.g. WordPress news)
- Removes WooCommerce processing order count from admin menu (reduces unnecessary queries)
- Disables WooCommerce Analytics

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/woocommerce-admin-cleaner` directory, or install via the WordPress plugin screen.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. No configuration required.

== Frequently Asked Questions ==

= Does this plugin require WooCommerce? =

WooCommerce-specific features will only run if WooCommerce is active.

= Does this plugin have settings? =

No. This plugin applies opinionated defaults to clean up the admin experience.

== Changelog ==

= 1.0.0 =
* Initial release
* Remove WordPress dashboard widgets
* Remove WooCommerce processing order count
* Disable WooCommerce Analytics

== Upgrade Notice ==

= 1.0.0 =
Initial release.