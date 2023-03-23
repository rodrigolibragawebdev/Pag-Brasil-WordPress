<?php
// LIMIT POSTS ---------
$posts_per_page = 3;
// GET CURRENT PAGE
$paged = get_query_var("paged") ? get_query_var("paged") : 1;
// SET QUERY
$args = [
  "posts_per_page" => $posts_per_page,
  "paged" => $paged,
];
// QUERY POSTS
query_posts($args);

// LIMIT POSTS --------- ending logic
?>

<div class="container postContainer">

  <?php
  if (have_posts()):
    while (have_posts()):
      the_post(); ?>

  <?php get_template_part("template-parts/blocks/card-post", "default"); ?>

  <?php
    endwhile; ?>

  <?php
  else:
     ?>
  <h3>Nenhum post foi encontrado.</h3>
  <?php
  endif;

  wp_reset_query();
  ?>
</div>