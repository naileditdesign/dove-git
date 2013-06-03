<?php

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

function register_menus(){
register_nav_menus(
array(
'headertop-menu' =>__('Header Menu'),
'sitemap-menu' =>__('Sitemap Menu'),
)
);
}
add_action('init','register_menus');

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Right Sidebar',
'before_widget' => '<div class="side-nav">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Left Sidebar',
'before_widget' => '<div class="side-nav">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'... </p> <a class="small button" href="'.$permalink.'">read on</a>';
  return $excerpt;
}

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
function mySearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','mySearchFilter');

function load_cat_parent_template()
{
    global $wp_query;

    if (!$wp_query->is_category)
        return true; // saves a bit of nesting

    // get current category object
    $cat = $wp_query->get_queried_object();

    // trace back the parent hierarchy and locate a template
    while ($cat && !is_wp_error($cat)) {
        $template = TEMPLATEPATH . "/category-{$cat->slug}.php";

        if (file_exists($template)) {
            load_template($template);
            exit;
        }

        $cat = $cat->parent ? get_category($cat->parent) : false;
    }
}
add_action('template_redirect', 'load_cat_parent_template');

?>