<?php

// WALKERS
require_once get_template_directory() . "/inc/class-nav-boostrap-walker.php";
require_once get_template_directory() . "/inc/class-comment-walker.php";

// REDIRECT TO HOME AUTO
function my_homepage_redirect()
{
  if (is_home() && !is_paged()) {
    wp_redirect(site_url() . "/home", 301);
    exit();
  }
}
add_action("template_redirect", "my_homepage_redirect");

// MY THEME
function my_theme_setup()
{
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo");
  add_theme_support("title-tag");
  register_nav_menus([
    "primary" => "primary",
  ]);
  add_theme_support("post-formats", [
    "link",
    "aside",
    "gallery",
    "image",
    "quote",
    "status",
    "video",
    "audio",
    "chat",
  ]);
}
add_action("after_setup_theme", "my_theme_setup");

// LOAD CUSTOM CSS
function load_custom_style()
{
  wp_enqueue_style(
    "custom css",
    get_template_directory_uri() . "/assets/css/styles.css"
  );
}
add_action("wp_enqueue_scripts", "load_custom_style");

// LOAD BOOTSTRAP
function load_bootstrap_content()
{
  // BOOTSTRAP SCRIPT CDN (ACTIVE CAROUSEL)
  wp_register_script(
    "bootstrap-min",
    "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js",
    ["jquery"]
  );
  wp_enqueue_script("bootstrap-min");

  // BOOTSTRAP SCRIPT LOCAL (ACTIVE NAVIGATION)
  wp_enqueue_script(
    "bootstrap-local-script",
    get_template_directory_uri() . "/assets/js/bootstrap.min.js",
    ["jquery"]
  );

  // BOOTSTRAP ICONS CDN
  wp_register_style(
    "bootstrap-icons",
    "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
  );
  wp_enqueue_style("bootstrap-icons");

  // BOOTSTRAP STYLE CDN
  wp_register_style(
    "bootstrap-style2",
    "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
  );
  wp_enqueue_style("bootstrap-style2");

  // BOOTSTRAP STYLE LOCAL
  wp_enqueue_style(
    "bootstrap-style",
    get_template_directory_uri() . "/assets/css/bootstrap_css/bootstrap.min.css"
  );

  // SOLVE JQUERY
  wp_deregister_script("jquery");
  wp_register_script(
    "jquery",
    "https://code.jquery.com/jquery-3.2.1.slim.min.js"
  );
}
add_action("wp_enqueue_scripts", "load_bootstrap_content");

//LOAD CUSTOM JS ->
function load_custom_js_script()
{
  if (is_page("sobre-nos")) {
    wp_enqueue_script(
      "myJs",
      get_template_directory_uri() . "/assets/js/custom.js"
    );
  }
}
add_action("wp_enqueue_scripts", "load_custom_js_script");

//  LOAD SIDE - BARS
add_action("widgets_init", "my_theme_sidebars");
function my_theme_sidebars()
{
  // USED ON POSTS
  register_sidebar([
    "id" => "primary-sidebar",
    "name" => "Primary Sidebar",
    "description" => "Sidebar that appears across the entire website",
    "before_widget" => '<div id ="1$s" class="widget %2$s">',
    "after_widget" => "</div>",
    "before_title" => '<h3 class=widget-title">',
    "after_title" => "</h3>",
  ]);
}

// ALLOW SVG FILES
add_filter(
  "wp_check_filetype_and_ext",
  function ($data, $file, $filename, $mimes) {
    global $wp_version;
    if ($wp_version !== "4.7.1") {
      return $data;
    }

    $filetype = wp_check_filetype($filename, $mimes);

    return [
      "ext" => $filetype["ext"],
      "type" => $filetype["type"],
      "proper_filename" => $data["proper_filename"],
    ];
  },
  10,
  4
);

function cc_mime_types($mimes)
{
  $mimes["svg"] = "image/svg+xml";
  return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

function fix_svg()
{
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action("admin_head", "fix_svg");
