=== Multi Currency, Currency Switcher, Exchange Rates for WooCommerce - Mudra ===
Contributors: im_niloy, pkolomeitsev
Tags: multi currency, woocommerce currency switcher, currency switcher, Exchange Rates
Plugin URL: https://wordpress.org/plugins/woo-exchange-rate/
Requires at least: 6.0
Tested up to: 6.8
Stable tag: 17.5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows to add exchange rates for WooCommerce store

== Description ==

Exchange Rates for WooCommerce - Mudra - is a simple plugin, which allows you to change product price according currency exchange rate.
Default currency must have exchange rate equals 1. All other currencies rates should be set according exchange rate to default one.
End-user can buy products from your WooCommerce store using different currencies.

All currencies info are based on WooCommerce plugin data.

Features:
 
- Setup currency exchange rates from control panel
- Display currency switcher to end user
- Store order with selected currency


== Installation ==

WooCommerce Exchange Rate requires initial WooCommerce plugin installation.
Please check if WooCommerce plugin already installed before to start.

1. Upload the plugin files to the `/wp-content/plugins/woo-exchange-rate` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the `WooCommerce->Settings->Products->Exchange` Rate screen to configure currencies exchange rates
4. Use the `Appearence->Widgets` add Woo Exchange Rage plugin widget to sidebar


== Screenshots ==

1. Woo Exchange Rate plugin settings screen
2. Exchange Rate Add/Edit page
3. Dropdown with search
4. Woo Exchange Rate plugin widget screen (StoreFront theme)
5. Frontend plugin work in action
6. Admin panel currency switcher

== Changelog ==

= 17.5.0 =
* Fixed issue with loading the text domain
* Fixed plugin compatibility check error
* Fixed PHP session initialization error
* Added support for High-Performance Order Storage (HPOS)
* Added `howdy-qb` for managing CRUD operations
* Added support for Cart and Checkout blocks
* Added SemVar for version control



= 17.4 =
- Added currency switcher on admin panel
- Fixed order currency on admin page
- Fixed PayPal order currency
- Bug fixes, code refactoring etc.

= 17.3 =
- Added price position feature
- Increased number of decimals for exchange rates to 4
- Plugin version format changed to MRC (Monthly Release Cycles)
- Made performance improvements
- Bug fixes, code refactoring etc.

= 0.2.0 =
22.09.2016 - released stable version

= 0.2.0-beta =
16.09.2016 - first released with beta versions