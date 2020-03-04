<?php
/*
Plugin Name: GoSchedule Appointment Scheduling Software
Plugin URI: https://goschedule.io
Description: Embed <a href="https://www.goschedule.io">GoSchedule Appointment Scheduling Software</a> into your site.  The tag to embed is: <code>[goschedule website="https://plugin.goschedule.io/shakthicorp1"]</code>
Version: 1.0.0
Author: GoSchedule Integrations Team
Author URI: http://help.goschedule.io
*/

/**
 * Embed GoSchedule Plugin like:
 * <iframe src="https//:plugin.goschedule.io/shakthicorp1" width="100%" height="600"></iframe>
 */
function embedgoscheduleplugin( $atts ) {
	extract( shortcode_atts( array(
		'website' => 'https://goschedule.io/',
		'width' => '100%',
		'height' => 600,
		'border' => 0
	), $atts ) );

	return "<iframe src=\"$website\" width=\"$width\" height=\"$height\" frameBorder=\"$border\"></iframe>";
}
add_shortcode( 'goschedule', 'embedgoscheduleplugin' );
