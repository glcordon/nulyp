<?php
/**
 * @file
 * hasta_content.features.inc
 */

/**
 * Implements hook_install().
 */
function hasta_content_install() {
$sliders = array(
  1 => array(
    'slid' => 1,
    'title' => 'Home Corporative',
    'description' => '',
    'machine_name' => 'home-corporative',
    'settings' => 'a:32:{s:10:"full_width";i:1;s:5:"width";s:4:"1170";s:6:"height";s:3:"643";s:11:"touch_swipe";i:1;s:10:"responsive";i:1;s:8:"videobox";i:0;s:4:"loop";i:1;s:10:"loadingbar";s:4:"none";s:12:"bar_position";s:6:"bottom";s:21:"show_next_prev_button";i:1;s:9:"auto_play";i:1;s:11:"pause_hover";i:1;s:11:"show_bullet";i:1;s:15:"bullet_position";s:1:"2";s:14:"show_thumbnail";i:0;s:18:"thumbnail_position";s:1:"1";s:12:"border_style";s:1:"0";s:16:"dropshadow_style";s:1:"0";s:9:"animation";s:4:"fade";s:5:"delay";s:5:"20000";s:9:"transtime";s:3:"800";s:11:"thumb_width";s:3:"100";s:12:"thumb_height";s:2:"75";s:18:"create_bg_imgstyle";i:0;s:10:"dmf_google";s:55:"http://fonts.googleapis.com/css?family=Roboto&Open+Sans";s:15:"enable_font_css";i:1;s:17:"generate_css_file";i:0;s:8:"on_start";s:0:"";s:6:"on_end";s:0:"";s:11:"color_saved";s:13:"ff9900,CC0000";s:13:"device_enable";i:1;s:12:"device_width";s:3:"600";}',
  ),
  2 => array(
    'slid' => 2,
    'title' => 'Shop Slider',
    'description' => '',
    'machine_name' => 'shop-slider',
    'settings' => 'a:32:{s:10:"full_width";i:1;s:5:"width";s:4:"1170";s:6:"height";s:3:"630";s:11:"touch_swipe";i:1;s:10:"responsive";i:1;s:8:"videobox";i:0;s:4:"loop";i:1;s:10:"loadingbar";s:4:"none";s:12:"bar_position";s:6:"bottom";s:21:"show_next_prev_button";i:1;s:9:"auto_play";i:1;s:11:"pause_hover";i:1;s:11:"show_bullet";i:1;s:15:"bullet_position";s:1:"2";s:14:"show_thumbnail";i:0;s:18:"thumbnail_position";s:1:"1";s:12:"border_style";s:1:"0";s:16:"dropshadow_style";s:1:"0";s:9:"animation";s:4:"fade";s:5:"delay";s:4:"8000";s:9:"transtime";s:3:"800";s:11:"thumb_width";s:3:"100";s:12:"thumb_height";s:2:"75";s:18:"create_bg_imgstyle";i:0;s:10:"dmf_google";s:55:"http://fonts.googleapis.com/css?family=Roboto&Open+Sans";s:15:"enable_font_css";i:1;s:17:"generate_css_file";i:0;s:8:"on_start";s:0:"";s:6:"on_end";s:0:"";s:11:"color_saved";s:13:"ff9900,CC0000";s:13:"device_enable";i:1;s:12:"device_width";s:3:"600";}',
  ),
);
foreach ($sliders as $slider) {
	$slider = (object)$slider;
	$slider = _md_slider_recast('MDSlider',$slider);
	$slider->slid = NULL;

	if (!MDSlider::get_by_machine_name($slider->machine_name))
		$slider->save();
}
}
