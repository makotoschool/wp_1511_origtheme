<?php
register_nav_menus(array(
					'mainnavi'=>'メインナビゲーションです',
					'utility'=>'上部のナビゲーションです'
					));

function mainscripts(){
	wp_enqueue_script('mainscript',get_template_directory_uri().'/js/main.js',array('jquery'));

}

add_action('wp_enqueue_scripts','mainscripts');


