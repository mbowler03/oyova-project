<?php 

function project_files() {
wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
wp_enqueue_style('project_main_styles', get_theme_file_uri('/build/style-index.css'));
wp_enqueue_style('project_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'project_files');



function project_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }
  
  add_action('after_setup_theme', 'project_features');
  
  function project_adjust_queries($query) {

    if (!is_admin() AND is_post_type_archive('staff') AND $query->is_main_query()) {
        $query->set('posts_per_page', -1);
      }
  }
  
  add_action('pre_get_posts', 'project_adjust_queries');


