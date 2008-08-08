=== jQuery Lightbox For Native Galleries ===
Contributors: Viper007Bond
Donate link: http://www.viper007bond.com/donate/
Tags: lightbox, jquery, gallery
Requires at least: 2.6
Stable tag: trunk

Makes the native WordPress galleries introduced in WordPress 2.5 use jQuery Lightbox by balupton to display the fullsize images.

== Description ==

Makes the native WordPress galleries introduced in WordPress 2.5 use [jQuery Lightbox by balupton](http://plugins.jquery.com/project/jquerylightbox_bal) to display the fullsize images.

**Demo**

A demo is available at [this plugin's homepage](http://www.viper007bond.com/wordpress-plugins/jquery-lightbox-for-native-galleries/).

== Installation ==

###Updgrading From A Previous Version###

To upgrade from a previous version of this plugin, delete the entire folder and files from the previous version of the plugin and then follow the installation instructions below.

###Installing The Plugin###

Extract all files from the ZIP file, making sure to keep the file structure intact, and then upload it to `/wp-content/plugins/`.

This should result in the following file structure:

`- wp-content
    - plugins
        - jquery-lightbox-for-native-galleries
            | jquery-lightbox-for-native-galleries.php
            | readme.txt
            - jquery_lightbox
                | COPYING.txt
                | FDL.txt
                | readme.txt
                - css
                    | jquery.lightbox.css
                    | jquery.lightbox.packed.css
                - images
                    | blank.gif
                    | loading.gif
                    | next.gif
                    | prev.gif
                - js
                    | jquery.lightbox.packed.js`

Then just visit your admin area and activate the plugin. That's it!

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== ChangeLog ==

**Version 1.0.1**

* Better WordPress 2.6 support (i.e. when you have a moved plugins directory).

**Version 1.0.0**

* Initial release.