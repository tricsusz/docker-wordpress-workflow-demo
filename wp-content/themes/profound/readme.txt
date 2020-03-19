=== Profound ===

Contributors: mudThemes
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Installation ==

1. To Install Profound Theme, Put the "profound" directory in your wp-content/themes directory.
2. Activate the Theme from WordPress Admin Panel.
3. The Theme installs with the basic layout in place although you can configure theme using options.

== Frequently Asked Questions ==

= Where can I find theme support? =

Go to https://wordpress.org/support/theme/profound

== Todo ==

= Upcoming =
* (front-page.php) Will be modified to display slideshow across the site.

== Changelog ==

= 1.0.8.13 - 05/06/2018 =
(Flexslider) Now user can add upto 3 slides

= 1.0.8.12 - 29/05/2018 =
*(es_ES) Added translation files

= 1.0.8.11 - 24/01/2018 =
* (nl_NL) Added translation files

= 1.0.8.10 - 15/02/2017 =
(functions.php) Added theme support for editor style
(editor-style.css) Added File

= 1.0.8.9 - 09/02/2017 =
* (Translations) Added fr_Fr translation

= 1.0.8.8 - 15/11/2016 =
* (font awesome) Upgraded to version 4.7.0

= 1.0.8.7 - 16/08/2016 =
* (style.css) Added/Removed theme tags

= 1.0.8.6 - 11/02/2016 =
* (font awesome) Upgraded font awesome to 4.6.2
* (favicon) Removed favicon feature from options

= 1.0.8.5 - 05/04/2016 =
* (assets/admin/images) Deleted folder and files
* (assets/global/custom.js) Removed unused code
* (assets/global/custom.min.js) Recreated
* (content/general/404.php) Modified 404 output
* (customizer.php) Removed commented code
* (core files) Removed special characters from i18n translation strings
* (profound.pot) Regenerated translation file

= 1.0.8.4 - 08/02/2016 =
* (core) Changed profound_cta_section_show() call
* (core) Modified few HTML tags to support HTML5
* (functions.php) Added version to wp_enqueue_style: font awesome
* (functions.php) Removed version from respond.min.js
* (functions.php) Added pluggable function profound_enqueue_font()
* (functions.php) Now function profound_setup() is pluggable
* (functions.php) Now function profound_enqueue_ie_script() is pluggable

= 1.0.8.3 - 08/01/2016 =
* (JS) Added HTML5 Shiv
* (readme.txt) Added resource for HTML5 Shiv

= 1.0.8.2 - 25/12/2015 =
* (includes/customizer.php) Added more customizer options - social profiles
* (includes/customizer.php) Changed panel priority
* (includes/customizer.php) Changed default value of disable_social_section to false
* (icons) Upgraded to version 4.5.0
* (functions.php) Enqueued icons version 4.5.0
* (functions.php) Modified to display more social profiles
* (content/general/404.php) Fixed translation bug
* (comments.php) Fixed translation bug
* (profound.pot) Regenerated

= 1.0.8.1 - 22/11/2015 =
* (functions.php) Added function profound_get_theme_info()
* (functions.php) Now using profound_get_theme_info() in profound_enqueue()
* (functions.php) Removed some constants | Replaced removed constants with others
* (functions.php) Now using get_content_part() in profound_404_show()
* (footer.php) Now calling footer using get_template_part()
* (content/general/404.php) Added
* (content/general/footer.php) Added
* (customizer.php) Replaced removed constants with others
* (comments.php) Added few filters
* (core files) Indented and optimized code
* (respond.min.js) Renamed and enqueued

= 1.0.8 - 02/10/2015 =
* (functions|header.php) Added title-tag theme support
* (functions.php) - Removed '!important' from customizer css output
* (style.css) - Added required class '.screen-reader-text'
* (Options Framework) Removed
* (Assets/admin) - Options framework assets removed
* (Customizer settings) Added
* (All files) Modified to support customizer
* (All files) $profound_options no longer used | Switched to profound_get_option()

= 1.0.7 - 20/07/2015 =
* (Design) New look with wider wrapper and sidebar support
* (page.php) Now supports sidebar
* (archive template files) Modified HTML structure to accommodate sidebar
* (theme-options.php) Modified options - Disabled blog heading (by default)
* (functions.php) Removed function profound_loop_section_col_class_cb()
* (style.css) Increased wrapper width
* (style.css) Modified few CSS styles
* (screenshot.png) New screenshot with sidebar
* (photographer.jpg) Modified dimensions
* (readme.txt) Added resource license

= 1.0.6.3 - 26/06/2015 =
* (single.php) - Added primary sidebar support
* (templates/sidebar-right.php) - Added new page template
* (style.css) - Added primary sidebar CSS for single/pages
* (style.css) - Modified tags
* (readme.txt) - Modified format

= 1.0.6.2 - 03/06/2015 =
* (content-blog.php) - Modified Filters
* (functions.php) - Added functions profound_blog_heading_title() & profound_blog_heading_desc()
* (theme-options.php) - Added options
* (profound.pot) - Regenerated translations

= 1.0.6.1 - 01/05/2015 =
* (options-panel.php) - Escaped strings
* (readme.txt) - Modified changelog format

= 1.0.6 - 22/04/2015 =
* (Options framework) Removed
* (Options Panel) Added custom options panel
* (functions.php) Fixed few bugs

= 1.0.5 - 08/04/2015 =
* (options.php) Added function_exists to mudthemes_optionsframework_options()
* (functions.php) Internationalized text
* (functions.php) Sanitized output in profound_attach_options_style()
* (options framework) Modified multiple bugs
* (profound.pot) Regenerated translation file

= 1.0.4 - 23/03/2015 =
* (options.php) Added more options
* (functions.php) Added functions to support options
* (core files) Modified them to support options
* (core files) Modified few bugs as per review
* (options framework) | Now using as forked
* (respond.src.js) | File created

= 1.0.3 - 30/01/2015 =
* (core template archive files) Added sidebar | Modified class
* (style.css) Modified CSS bugs | Modified description
* (front-page.php) Modified template call
* (profound.pot) Added translations | Recreated .pot file
* (functions.php) Modified PHPDocs

= 1.0.2 - 27/01/2015 =
* (front-page.php) Removed custom template call
* (loop.php) Modified post_class() call | Added HTML
* (style.css) Fixed bug

= 1.0.1 - 09/01/2015 =
* (category.php) Now uses function term_description()
* (tag.php) Now uses function term_description()
* (category.php | tag.php) Removed unnecessary filter
* (loop.php | searchform.php) Added translation strings
* (sidebar-header.php) Removed file
* (header.php) Removed call to profound_pre_load()
* (functions.php) Removed function profound_pre_load()
* (functions.php) style.css uses $profound_version
* (functions.php) Enqueued custom.min.js
* (options-framework.php) Commented constant PROFOUND_CHECK_VERSION
* (options-framework.php) Removed constant PROFOUND_CHECK_VERSION in Theme options
* (style.css) Fixed flexslider bug
* (profound.pot) Recreated
* (custom.min.js) Recreated

= 1.0.0 - 20/11/2014 =
* Profound Theme initial release

== Resources ==

* Slideshow image (http://pixabay.com/en/photographer-tourist-snapshot-407068/): by http://pixabay.com/en/users/SplitShire/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot image (https://pixabay.com/en/suspension-bridge-cables-768738/): by https://pixabay.com/en/users/Unsplash-242387/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* FlexSlider: by WooThemes (http://www.woothemes.com), licensed under [GPLv2] (http://www.gnu.org/licenses/gpl.html)
* Superfish jQuery menu: by Joel Birch (https://github.com/joeldbirch), dual licensed under[GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* Respond.js: by Scott Jehl (https://github.com/scottjehl), licensed under [MIT](http://www.opensource.org/licenses/mit-license.php)
* HTML5 Shiv: by Alexander Farkas (https://github.com/aFarkas), dual licensed under[GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* Font Awesome: by Dave gandy (http://fontawesome.io), dual licensed under [SIL OFL 1.1](http://scripts.sil.org/OFL) and [MIT](http://www.opensource.org/licenses/mit-license.php)