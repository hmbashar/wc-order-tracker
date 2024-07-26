# Order Tracker for WooCommerce

**Contributors:** hmbashar  
**Tags:** woocommerce order tracker, order tracker, shipping, delivery tracker  
**Requires at least:** 4.7  
**Tested up to:** 6.6  
**Stable tag:** 1.2.3  
**Requires PHP:** 8.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

An easy-to-use WooCommerce order tracker with Ajax. Use as a page template or via `[cbwct-order-tracker]` shortcode for instant updates anywhere.

## Description

Hi, are you using WooCommerce? You can use this plugin for your customers to track their order status on your website. It's a WooCommerce order tracking system with Ajax. You can use it in a very easy way, like making a page template or using the `[cbwct-order-tracker]` shortcode, anytime, anywhere, and it's also working with Ajax.

Plugin on [WordPress Directory](https://wordpress.org/plugins/wc-order-tracker)

[Watch demo video 1](https://www.youtube.com/watch?v=FfE7GuqwlbA)  
[Watch demo video 2](https://www.youtube.com/watch?v=PojzV-wmLpw)

### Filter Hooks

- `cbwct_pending_prograss_percent`
- `cbwct_on_hold_prograss_percent`
- `cbwct_processing_prograss_percent`
- `cbwct_shipped_prograss_percent`
- `cbwct_completed_prograss_percent`

## Frequently Asked Questions

### How can I use the plugin?

You can use the plugin by template or shortcode. You need to make a page and then select the "Order Tracker for WooCommerce" template from your page attribute option.

### Do you have a shortcode for using the plugin anywhere?

Yes, you have a shortcode for the plugin. You can use the shortcode `[cbwct-order-tracker]` to show the search form with search results anywhere.

### Do you support hooks?

Yes, you have some hooks for developers:

- `cbwct_pending_prograss_percent`
- `cbwct_on_hold_prograss_percent`
- `cbwct_processing_prograss_percent`
- `cbwct_shipped_prograss_percent`
- `cbwct_completed_prograss_percent`

### Order and mobile number are correct but still showing "doesn't found"?

Make sure your customer has used the exact same number for tracking that they input when placing the order. For example, if your customer inputs their phone number with a country code when placing an order, then they need to use the exact same number with the country code for tracking.

If your customer inputs this format `+88` (country code) `123456789` (mobile number) like `+88123456789`, then they need to input the exact same number like `+88123456789` for tracking.

Or if they input without the country code and only the mobile number like `123456789`, then they need to input without the country code like `123456789` for tracking.

## Screenshots

1. Cancelled order
2. Order Shipped
3. Order Processing
4. Order On-Hold

## Changelog

### 1.2.3

- Order number searching issue fix

### 1.2.2

- Text domain added and security updated

### 1.1

- Fixed search form broken issue
- Added "Shipped" status
- Shortcode error fix
- Few changes

### 1.0

- Release new version

## Upgrade Notice

### 1.0

Upgrade notices describe the reason a user should upgrade.
