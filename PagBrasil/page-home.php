<?php get_header(); ?>

<main>
  <div class="container py-5">

    <!-- SLIDER -->
    <section>
      <?php get_template_part("template-parts/blocks/slider"); ?>
    </section>

    <!-- PAGE BY EDITOR -->

    <section class="py-5">
      <div class="row d-flex align-items-center justify-content-between">
        <div class=" col-sm-7"><?php get_template_part(
          "template-parts/content/content-page"
        ); ?></div>
        <div class="col-sm-5 text-right"><img class="img-fluid" src="<?php bloginfo(
          "template_url"
        ); ?>/assets/images/home01.png" alt=""></div>
      </div>
    </section>

    <!-- POSTS -->
    <section>
      <div class="py-5 text-center d-flex justify-content-center">
        <div class="text-center w-75 d-flex flex-column align-items-center">
          <h1>Últimos Posts</h1>
          <p>Esteja sempre atento as novidades da Pag Brasil</p>
          <div class="underscore"></div>
        </div>
      </div>
      <?php get_template_part("template-parts/blocks/posts-block-home"); ?>
    </section>

  </div>
</main>

<?php get_footer(); ?>
