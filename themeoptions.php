<?php

/* Plug-in for theme option handling
 * The Admin Options page tests for the presence of this file in a theme folder
 * If it is present it is linked to with a require_once call.
 * If it is not present, no theme options are displayed.
 */

require_once(SERVERPATH . '/' . ZENFOLDER . '/admin-functions.php');

class ThemeOptions {

	function ThemeOptions() {
		setThemeOptionDefault('thumb_size', '220');
		setThemeOptionDefault('thumb_crop', '1');
		setThemeOptionDefault('thumb_crop_width', '220');
		setThemeOptionDefault('thumb_crop_height', '220');
		setThemeOptionDefault('image_size', '800');
		setThemeOptionDefault('image_use_side', 'longest');
		setThemeOptionDefault('custom_index_page', '');

		setThemeOptionDefault('zpB_homepage', true);
		setThemeOptionDefault('zpB_disablewarning', false);
		setThemeOptionDefault('allow_search', true);
		setThemeOptionDefault('zpB_show_archive', true);
		setThemeOptionDefault('zpB_show_tags', true);
		setThemeOptionDefault('zpB_social_links', true);
		setThemeOptionDefault('zpB_slideshow', 'none');
		setThemeOptionDefault('zpB_slideshow_speed', 4000);
	}

	function getOptionsDisabled() {
		return array('thumb_size', /*'thumb_crop', 'thumb_crop_width', 'thumb_crop_height',*/ 'image_size', 'custom_index_page');
	}

	function getOptionsSupported() {
		return array(
			gettext('Disable Plugin Warning') => array('order' => 0, 'key' => 'zpB_disablewarning', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext_th("Check to disable the warning message about plugins to disable.", 'zpBootstrap')),
			gettext('Homepage') => array('order' => 1, 'key' => 'zpB_homepage', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext_th("Display a home page, with a slider of 5 random picts, the gallery description and the latest news.", 'zpBootstrap')),
			gettext('Social Links') => array('order' => 2, 'key' => 'zpB_social_links', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext_th("Check to show some social links.", 'zpBootstrap')),
			gettext('Slideshow') => array('key' => 'zpB_slideshow', 'type' => OPTION_TYPE_RADIO,
										'order' => 4, 'buttons' => array(gettext('None') => 'none', gettext('sized image') => 'sizedimage', gettext('full image') => 'fullimage'),
										'desc' => gettext_th("You can display a slideshow with colorbox and you can choose the size of the displayed images.", 'zpBootstrap')),
			gettext('Speed') => array('order' => 5, 'key' => 'zpB_slideshow_speed', 'type' => OPTION_TYPE_TEXTBOX, 'desc' => gettext("Speed of the transition in milliseconds.")),
			gettext('Allow search') => array('order' => 6, 'key' => 'allow_search', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext("Check to enable search form.")),
			gettext('Archive View') => array('order' => 7, 'key' => 'zpB_show_archive', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext_th("Display a link to the Archive list.", 'zpBootstrap')),
			gettext('Tags') => array('order' => 8, 'key' => 'zpB_show_tags', 'type' => OPTION_TYPE_CHECKBOX, 'desc' => gettext_th("Check to show a tag cloud in Archive list, with all the tags of the gallery.", 'zpBootstrap'))
		);
	}

	function handleOption($option, $currentValue) {
	}
}
?>