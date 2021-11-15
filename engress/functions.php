<?php
function my_scripts()
{
  wp_enqueue_style('engress-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
  wp_enqueue_script('engress-js', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

// ----------------

// ---アイキャッチ画像---
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// -----------------

// ------グローバルナビ-----
function register_my_menus()
{
  register_nav_menus(array(
    'nav' => 'nav',
    'news-menu' => 'お知らせ',
    'blog-menu' => 'ブログ',
    'price-menu' => 'コース・料金',
  ));
}
add_action('after_setup_theme', 'register_my_menus');

//------お問い合わせ　ナビ -------------

function contact_menus()
{
  register_nav_menus(array(
    'contact' => 'contact',
  ));
}
add_action('after_setup_theme', 'contact_menus');

// ----------------資料請求　ナビ----------------------------

function document_menus()
{
  register_nav_menus(array(
    'document' => 'document',
  ));
}
add_action('after_setup_theme', 'document_menus');


// -----archive.phpを挿入------
function post_has_archive($args,$post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; 
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// ----------------


// --------pagination for news -------
function myPreGetPosts($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  if ($query->is_post_type_archive( 'news' )) {
    $query->set('posts_per_page', 10);
  }
}
add_action('pre_get_posts', 'myPreGetPosts');

// -----------------


// ---------pagination for blog ---------
function blogPreGetPosts($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  if ($query->is_post_type_archive( 'blog' )) {
    $query->set('posts_per_page', 10);
  }
}
add_action('pre_get_posts', 'blogPreGetPosts');

// ----------------------------------------------


// -----pagination for taxonomy-----

function termPreGetPosts($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  if ($query->is_tax()) {
    $query->set('posts_per_page', 5);
    return;
}
}
add_action('pre_get_posts', 'termPreGetPosts');

// ------------------------------