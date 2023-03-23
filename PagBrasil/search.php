<?php get_header(); ?>

<main>
  <div class="container py-5">
    <section>
      <div class="d-flex justify-content-center">
        <div class="text-center w-75 d-flex flex-column align-items-center">
          <h2 class="page-title"> Resultados da pesquisa por: <?php echo get_search_query(); ?> </h2>
        </div>
      </div>
    </section>
    <section>
      <?php get_template_part("template-parts/blocks/posts-block-archive"); ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>