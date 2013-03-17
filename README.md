zpBootstrap 
============

zpBootstrap is a « Responsive » theme for ZenPhoto (http://www.zenphoto.org).

Feel free to download and use it, and thanks in advance for your feedback!

Description
-----------

Scripts used:

    Bootstrap (HTML, CSS, and JS toolkit for Responsive WebSite)
    Flexslider (a fully responsive jQuery slider plugin)
    AddThis (snippet to add sharing tools to your site)
    colorbox (lightweight customizable lightbox plugin for jQuery)
    script for navigation with the arrow keys.

The theme supports the following ZenPhoto plugins:

    comment_form, contact_form, dynamic-locale, flag_thumbnail, GoogleMap, rating, register_user, user_login-out, zenpage

The theme does not support the following ZenPhoto plugins :

    colorbox and slideshow (zpBoostrap uses and configures it's own colorbox and modal plugins)

Installation
------------

    Upload the zip file to your computer,
    Unzip the downloaded zip file locally, and upload the zpBoostrap folder to the directory /themes/ of your ZenPhoto site,
    In ZenPhoto administration, go to the Themes tab and activate the zpBootstrap theme,
    Navigate to Options>Theme to view and configure the available options for zpBootstrap.

Options
-------

    You can display a home page, with a slider of 5 random picts, the gallery description and the latest news (if zenpage is used),
    Only one RSS Feed is displayed: go to options>RSS and select the RSS feed to use (RSS Feed "All News" has priority over RSS Feed "Gallery").

Advises
-------

    Enter the title and url of your website, the title and description of your gallery in admin>options>gallery.
    Make responsive images in news and pages : to do that, edit the html source of news and pages and add class="remove-attributes" on each image (the result should be < img class="remove-attributes" src="the_path_to_your_image" />)

More information and changelog
---------

Please, read readme.html and changelog.txt