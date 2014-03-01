=== Bitcoin Meta Tags ===
Contributors: Koberstein
Donate link: http://www.joshkoberstein.com/
Tags: bitcoin, meta, tags, browser, extension, detection, bitprops, microformats, tips
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add Bitcoin meta tags to your site.

== Description ==

This plugin adds an option under 'General Settings' for you to put your donation Bitcoin address.  It places this address in hidden meta tags in the head section of your site.  This allows your site's Bitcoin address to be detected by browser extensions that allow visitors to make donations or microtips to your website.

== Installation ==

1.  Activate Plugin
2.  Go to Settings -> General and input your Bitcoin address

Once your Bitcoin address has been input, your Bitcoin address will be detectable by browser extensions such as BitProps and Bitcoin Microformats.

== Frequently Asked Questions ==

= What meta tags does this plugin add? =

This plugin adds the following meta tags:
`<meta name="bitcoin" content="1N6WuXttwKCLH971uZKjMYMtxz1Ta6UQjE" />`
`<link rel="bitcoin" href="bitcoin:1N6WuXttwKCLH971uZKjMYMtxz1Ta6UQjE" />`

= What are these meta tags used for? =

Certain Bitcoin browser extensions are capable of detecting these meta tags for the purpose of the visitor being able to make a tip to the website.

* [BitProps](https://bitprops.com/ "BitProps")
* [Bitcoin Microformats](https://chrome.google.com/webstore/detail/bitcoin-microformats/bkanicejfbhlidgjkpenmddnacjengld?hl=en "Bitcoin Microformats")

== Changelog ==

= 0.1 =
* Initial Release

