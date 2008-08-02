----
/**
 * jQuery Lightbox Plugin (balupton edition) - Lightboxes for jQuery
 * Copyright (C) 2008 Benjamin Arthur Lupton
 * http://jquery.com/plugins/project/jquerylightbox_bal
 *
 * Permission is granted to copy, distribute and/or modify this document
 * under the terms of the GNU Free Documentation License, Version 1.2
 * or any later version published by the Free Software Foundation;
 * with no Invariant Sections, no Front-Cover Texts, and no Back-Cover
 * Texts.  A copy of the license is included in the section entitled "GNU
 * Free Documentation License".
 *
 * @name jquery_lightbox: jquery.lightbox.js
 * @package jQuery Lightbox Plugin (balupton edition)
 * @version 1.2.1-final
 * @date August 1, 2008
 * @category jQuery plugin
 * @author Benjamin "balupton" Lupton {@link http://www.balupton.com}
 * @copyright (c) 2008 Benjamin Arthur Lupton {@link http://www.balupton.com}
 * @license GNU Free Documentation License - {@link http://www.gnu.org/licenses/fdl.html}
 * @example Visit {@link http://jquery.com/plugins/project/jquerylightbox_bal} for more information.
 */
----

Installation:
Upload the jquery_lightbox directory to somewhere on your webserver, then include the following into your webpages html head:
	<!-- Include jQuery (Lightbox Requirement) -->
	<script type="text/javascript" src="jquery_lightbox/js/jquery-1.2.6.pack.js"></script>
	<!-- Include Lightbox (Production) -->
	<script type="text/javascript" src="jquery_lightbox/js/jquery.lightbox.packed.js"></script>
adjusting the src locations appropriately.

Usage:
Refer to (index.xhtml) or (http://www.balupton.com/sandbox/jquery_lightbox/) if (index.xhtml) does not exist.

For more information:
Refer to the source code of (index.xhtml) or (http://www.balupton.com/sandbox/jquery_lightbox/) if (index.xhtml) does not exist.

Support:
http://plugins.jquery.com/project/issues/jquerylightbox_bal

----

Changelog:

v1.2.1-final (August 1, 2008)
- Made it easier to apply options.files - No longer have to modifiy the js location within the jquery.lightbox.js file
    reported by dec: http://plugins.jquery.com/node/3191
- Fixed safari CSS bug
    reported by rgnelson and noYet: http://plugins.jquery.com/node/3254 , http://plugins.jquery.com/node/3314
- Fixed XP IE7 double flash bug
	reported by sashabe and sheshnjak: http://plugins.jquery.com/node/1804

v1.2.0-final (July 11, 2008)
- Added support for the following options:
    ['baseurl', 'files', 'text', 'show_linkback', 'keys', 'opacity', 'padding', 'speed', 'rel', 'auto_relify', 'scroll_with']
- Can specify options like so:
    jquery_lightbox/js/jquery.lightbox.js?show_linkback=false&amp;text.image=Translation%20of%20Image
    or
    $.Lightbox.construct({'show_linkback':false,'text':{'image':'Translation of Image'}}); // resets the lightbox
    or
    $.Lightbox.construct({'speed':900}); // does not reset the lightbox
- Added the ability for the "show" handler, for details see:
    http://plugins.jquery.com/node/3103
- Added the option scroll_with, when true, the lightbox will scroll with the page, to use:
    jquery_lightbox/js/jquery.lightbox.js?scroll_with=true
- Cut support for IE6 due to my belief that the IE6 userbase do not care for lightboxes.
    If you do wish for lightboxes to be enabled for IE6 users, then use v1.0.1-final.
    Users of IE6 will have lightboxes disabled, and be shown a upgrade message courtesy of
    http://www.savethedevelopers.org/
- Added support for name attribute in images array.

v1.1.2-final (May 04, 2008)
- Fixed imported css never caching

v1.1.1-final (April 07, 2008)
- Smoothed effects, especially initial lightbox show effect

v1.1.0-final (April 06, 2008)
- Added ability to remove the linkback (add "?show_linkback=false")
    http://plugins.jquery.com/node/1348
- Added ability to manually specify the baseurl
    reported by crollmm: http://plugins.jquery.com/node/1878
- Fixed overlay problem not resizing correctly (fixed by adding position:fixed;)
    reported by pendergrass: http://plugins.jquery.com/node/1330
- Fixed a new lightbox not displaying in center when the old lightbox contained a image of the same size
    reported by pendergrass: http://plugins.jquery.com/node/1331
- Fixed escape key not working in opera
    reported by FredXY: http://plugins.jquery.com/node/1883

v1.0.1-final
* Includes an improvement to the baseurl calculation for the auto-include of required files
* Now works under special circumstances for when an appendix is included to the js file, such as wordpress installations.
* Credits to Pedro "ei99070" Lamas for the fix: http://plugins.jquery.com/node/1199

v1.0.0-final
* Improved Lightbox Positioning, now animates to the center of the screen
* Updated prev next images to include notation for keyboard shortcuts
* Added preloading of lightbox required images
* Added keyboard navigation notation to prev and next images
* Fixed an overlay problem with IE
* Fixed an overlay problem with Safari
* Improved padding detection
* - If the padding setting is set, then it is not auto-detected
* - Moved padding detection to later on, fixes a display issue with Konqueror 3.5. (Credits to Blueyed).
* Added some "help" text
* Cleaned file structure
* Refined licencing
* - Now uses the GNU Affero General Public License and the GNU Free Documentation License
* Added a linkback as required by the GNU Affero General Public License

v0.2.3-final
* improved packing
* - original:  35.71KB total, 25.4KB js, 4.77KB css, 5.54KB images
* - packed:    15.12KB total, 7.67KB js, 1.91KB css, 5.54KB images
* htm: fix: changed src to href in common examples
* js: fixed issue when using the same images in a lightbox group
* js/css: added lightbox-enabled css class for elements that are lightbox enabled
* sample images: reduced the amount of them, as they used up all my bandwidth!

v0.2.2-beta
* added packed files
* - original:  35.71KB total, 25.4KB js, 4.77KB css, 5.54KB images
* - packed:    20.15KB total, 12.7KB js, 1.91KB css, 5.54KB images
* js: jsLint compliance
* htm: added info for packed form

v0.2.1-beta
* index.htm: Fixed demonstration code for example "Manually create grouped lightboxes.".

v0.2.0-beta
* Greedy elements are now properly hidden
* New / Optimized Lightbox Design
* Added support for descriptions
* All new example and documentation page

v0.1.0-dev
* Initial Release

----

Known Issues:

XHTML Incompatiable: An invalid or illegal string was specified
See: http://plugins.jquery.com/node/1392

----

Special Thanks / Based upon / Inspired by / Credits to:
- Warren Krewenki's jQuery Lightbox Plugin v0.5 {@link http://jquery-lightbox.googlecode.com/}
- Leandro Vieira Pinho's jQuery Lightbox Plugin v0.4 {@link http://leandrovieira.com/projects/jquery/lightbox/}
- Lokesh Dhakar's Lightbox 2 {@link http://www.huddletogether.com/projects/lightbox2/}

----