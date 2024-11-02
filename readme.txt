=== Order Tracker for WooCommerce ===
Contributors: hmbashar
Tags: woocommerce order tracker, order tracker, shipping, delivery tracker
Requires at least: 4.7
Tested up to: 6.6
Stable tag: 1.2.3
Requires PHP: 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Requires Plugins: woocommerce

An easy-to-use WooCommerce order tracker with Ajax. Use as a page template or via [cbwct-order-tracker] shortcode for instant updates anywhere.

== Description ==

Hi, are you using WooCommerce? You can use this plugin to allow your customers to track their order status on your website. It's a WooCommerce order tracking system with Ajax. You can use it very easily, either by creating a page template or by using the [cbwct-order-tracker] shortcode, anytime and anywhere. It also works seamlessly with Ajax.

Contributions are welcome on [GitHub](https://github.com/hmbashar/wc-order-tracker).

https://www.youtube.com/watch?v=FfE7GuqwlbA 

https://www.youtube.com/watch?v=PojzV-wmLpw

= Filter Hooks =

* cbwct_pending_progress_percent
* cbwct_on_hold_progress_percent
* cbwct_processing_progress_percent
* cbwct_shipped_progress_percent
* cbwct_completed_progress_percent

== Frequently Asked Questions ==

= How can I use the plugin? =

You can use the plugin either by creating a template or using a shortcode. To use the template, create a page and then select the "Order Tracker for WooCommerce" template from your page attribute options.

= Do you have a shortcode for using the plugin anywhere? =

Yes, you can use the shortcode [cbwct-order-tracker] to display the search form and search results anywhere on your site.

= Do you support hooks? =

Yes, there are several hooks available for developers:

* cbwct_pending_progress_percent
* cbwct_on_hold_progress_percent
* cbwct_processing_progress_percent
* cbwct_shipped_progress_percent
* cbwct_completed_progress_percent

= The order and mobile number are correct, but the status still shows "not found." What should I do? =

Ensure that your customer has used the exact same phone number for tracking that they used when placing the order. For example, if your customer inputs their phone number with a country code when placing an order, they need to use the exact same number with the country code for tracking.

If your customer inputs their phone number in the format +88 (country code) 123456789 (mobile number) like +88123456789, they need to use the exact same format for tracking.

Alternatively, if they input the number without a country code like 123456789, they need to use the same format without the country code for tracking.

== Screenshots ==

1. Cancelled order
2. Order shipped
3. Order processing
4. Order on hold

== Changelog ==

= 1.2.3 =
* Fixed order number searching issue

= 1.2.2 =
* Added text domain and updated security

= 1.1 =
* Fixed broken search form issue
* Added "Shipped" status
* Fixed shortcode error
* Made a few changes

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reasons why a user should upgrade.