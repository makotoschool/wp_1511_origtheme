<?php
register_nav_menus(array(
					'mainnavi'=>'メインナビゲーションです',
					'utility'=>'上部のナビゲーションです'
					));

function mainscripts(){
	wp_enqueue_script('mainscript',get_template_directory_uri().'/js/main.js',array('jquery'));

}

add_action('wp_enqueue_scripts','mainscripts');

//ウィジェット有効
/*
register_sidebar(array(
					'name'=>'デフォルトのサイドバー',
					'id'=>'default',
					'before_widget'=>'<div class="widget">',
					'after_widget'=>'</div>',
					'before_tittle'=>'<h3>',
					'after_title'=>'</h3>'	

));
*/
$w_keys=array(
	'デフォルトのサイドバー'=>'default',
	'WEBのサイドバー'=>'web',
	'DTPのサイドバー'=>'dtp',
	'BLOGのサイドバー'=>'blog',
	'ACCESSのサイドバー'=>'access',
	'CONTACTのサイドバー'=>'contact',
	'個別投稿デフォルトのサイドバー'=>'single',
	'フッターエリア'=>'footer'
);

foreach($w_keys as $w_title => $w_id){
	widget_add($w_title,$w_id);
}

function widget_add($title,$id){
	register_sidebar(array(
					'name'=>$title,
					'id'=>$id,
					'before_widget'=>'<div class="widget">',
					'after_widget'=>'</div>',
					'before_tittle'=>'<h3>',
					'after_title'=>'</h3>'	
	));

}

add_theme_support('post-thumbnails');



