<?php get_header(); ?>

<main>
  <section>
    <div class="pt-5 text-center d-flex justify-content-center">
      <div class="text-center w-75 d-flex flex-column align-items-center">
        <h1>Blog Pag Brasil</h1>
        <p>Veja todas as nossas postagens</p>
        <div class="underscore"></div>
      </div>
    </div>
    <div><?php get_template_part("template-parts/blocks/posts-block"); ?></div>

  </section>
</main>

<?php get_footer(); ?>
