<?php

// titleタグをhead内に生成する
add_theme_support('title-tag');
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');


function add_files() 
{
	wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.2.1/materia/bootstrap.min.css', "", date("U"));
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', "", date("U"));
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', "", date("U"));
	wp_enqueue_style('navbar', get_template_directory_uri().'/css/navbar.css', "", date("U"));
	wp_enqueue_script('jquery3', 'https://code.jquery.com/jquery-3.2.1.slim.min.js',array("jquery"),date('U'));
	wp_enqueue_script('jquery1', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',array("jquery"),date('U'));
	wp_enqueue_script('bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.js',array(),date('U'));
	wp_enqueue_script('main-script', get_template_directory_uri().'/js/main.js',array(),date('U'));
	wp_enqueue_script('docs-script', get_template_directory_uri().'/js/docs.js',array(),date('U'));
}

add_action('wp_enqueue_scripts', 'add_files');