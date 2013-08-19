<?php
/*
Plugin Name: Dashboard Message
Plugin URI: http://selectperformers.com/
Description: Add Dashboard Message
Author: Ian Anderson Gray
Version: 1.0.0
Author URI: http://selectperformers.com/
*/
function sp_dashboard_widget_function() {
	// Entering the text between the quotes
	echo "<h4>Progress</h4><ul>
	<li><strong>Release Date:</strong> Still in Development</li>
	<li><strong>Author:</strong> Ian Anderson Gray / Select Performers.</li>
	<li><strong>Hosting provider:</strong> <a href=\"http://selectperformers.com/\">Select Performers</a></li>
	</ul><hr />
	<iframe width='100%' height='300' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=ADDKEYHERE'";
}

function sp_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'Technical information', 'sp_dashboard_widget_function');
}

add_action('wp_dashboard_setup', 'sp_add_dashboard_widgets' );

?>