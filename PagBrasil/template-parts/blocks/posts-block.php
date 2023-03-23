<?php
// LIMIT POSTS ---------
$posts_per_page = 6;
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

<div class="container postContainer py-5">

  <?php
  if (have_posts()):
    while (have_posts()):
      the_post(); ?>

  <?php get_template_part("template-parts/blocks/card-post", "default"); ?>

  <?php
    endwhile; ?>

  <div class="container">
    <div class="pb-2 pt-2 mt-2 container d-flex justify-content-center postPagination">
      <?php echo paginate_links([
        "base" => str_replace(
          999999999,
          "%#%",
          esc_url(get_pagenum_link(999999999))
        ),
        "format" => "?paged=%#%",
        "prev_text" => "Anterior",
        "next_text" => "Próxima",
      ]); ?>
    </div>
  </div>



  <?php
  else:
     ?>
  <h3>Nenhum post foi encontrado.</h3>
  <?php
  endif;

  wp_reset_query();
  ?>
</div>