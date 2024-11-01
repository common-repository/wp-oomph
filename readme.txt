=== Plugin Name ===
Contributors: meitar
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=meitarm%40gmail%2ecom&lc=US&item_name=Meitar%20Moscovitz&item_number=wp%2doomph&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: microformats, jquery, ajax
Requires at least: 2.8
Tested up to: 2.8.5
Stable tag: trunk

Adds the Oomph Microformats toolkit's microformat overlay to any WordPress-generated pages (as long as the page has a microformat in it, of course).

== Description ==

Adds the [Oomph Microformats toolkit](http://visitmix.com/Lab/oomph)'s microformat overlay to any WordPress-generated pages (as long as the page has a [microformat](http://microformats.org/) in it, of course).

This plugin is pretty idiotic (by which I mean brain-dead simple), but it does enable anyone to fully microformat-enable their blog with purely point-and-click operations. It's recommended that you start with [a WordPress theme that already has built-in support for microformats](http://wordpress.org/extend/themes/tags/microformats "Check out the various WordPress themes that support microformats out of the box!"), and then add this plugin to the mix.

Alternatively, if you are comfortable with template code, you can write your own microformats into your custom template. Learn more [about authoring and customizing WordPress templates at the Codex](http://codex.wordpress.org/Blog_Design_and_Layout).

Please note that all this plugin does is adds the Oomph toolkit's functionality to a page. What that means is that the plugin has all the features and benefits, as well as all the limitations, of the Oomph toolkit. Most notably, the plugin only recognizes the [hCard](http://microformats.org/wiki/hcard) and [hCalendar](http://microformats.org/wiki/hcalendar) microformats for now.

If you want to send patches to improve this plugin, [please do](http://maymay.net/blog/2008/11/11/wp-oomph-add-the-oomph-microformat-overlay-to-your-wordpress-blog/ "I welcome your input and code submissions!").

== Installation ==

1. Upload `wp-oomph.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add or double-check that you've already added microformats (either [hCard](http://microformats.org/wiki/hcard) or [hCalendar](http://microformats.org/wiki/hcalendar)) somewhere else in your template markup.

== Frequently Asked Questions ==

= I installed and activated the plugin, but nothing is different. How come? =

First, view the source of your WordPress-generated page and make sure you see a line similar to the following near the top:

<pre><code class="html">&lt;script type='text/javascript' src='http://visitmix.com/labs/oomph/1.0/Client/oomph.min.js?ver=1.0'&gt;&lt;/script&gt;</code></pre>

If you see that but there&#8217;s still nothing different about your page, then you probably don&#8217;t have any (valid) microformats. You might consider [switching to a WordPress theme with built-in microformat support](http://wordpress.org/extend/themes/tags/microformats "Check out the various WordPress themes that support microformats out of the box!"), or modifying your theme&#8217;s code to add some of your own. You can [learn more about the support WordPress offers for microformats in the Microformat wiki](http://microformats.org/wiki/wordpress).

= The plugin doesn't let me do X thing that I want to do! Why not? =

Most likely because I haven&#8217;t taken *X thing* into account. Sorry, I&#8217;m not a psychic (as much as I wish I were). However, you&#8217;re encouraged to leave a comment on plugin homepage or to contact me elsewhere to request that I add capabilities to the plugin. Better yet, if you&#8217;re comfortable doing so, send me or the [fine guys who wrote Oomph](http://visitmix.com/Lab/Oomph) a patch.

== Screenshots ==

1. Screenshot of WordPress-generated page with an embedded microformat in the sidebar section called "The bio" at top-right corner. To activate Oomph, click the microformat gleam that appears in the top left corner of the screen.
2. Clicking the microformat gleam opens the Oomph panel, allowing users to instantly export the encoded [hCard microformat](http://microformats.org/wiki/hcard) data into their address book of choice, page through the available contact or event details on the page, and view a map of any address data present.

== Change log ==

= Version 0.2 =

* Updated to use Oomph 2.0 client library.
* Loads in page footer as opposed to document <code class="html">&lt;head&gt;</code>.

= Version 0.1.1 =

* Do not load the Oomph client JavaScript on admin pages.

= Version 0.1 =

* Initial release.
