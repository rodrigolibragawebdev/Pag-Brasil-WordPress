<?php get_header(); ?>

<main>

  <div class="container">
    <section class="bannerHead py-5 text-center d-flex justify-content-center">
      <div class="text-center w-75 d-flex flex-column align-items-center">
        <h1>Quem somos</h1>

        <p>Nossa completa plataforma de pagamentos online é resultado de mais de 20 anos de experiência no segmento e
          conta com recursos inovadores, pensados especialmente para o mercado brasileiro. Confira nossa história e
          timeline.</p>
        <div class="underscore"></div>
      </div>
    </section>

    <!-- Section2 -->
    <!-- DYNAMIC CONTENT-->
    <section class="row dynamicContent d-flex">
      <div class="content"> <?php get_template_part(
        "template-parts/content/content-page"
      ); ?>
      </div>
      <div class="imgAbout">
        <img class="img-fluid" src="<?php bloginfo(
          "template_url"
        ); ?>/assets/images/poa_img.jpg" alt="Just an img" />
    </section>

    <!-- TEAM -->
    <section class=" pt-5 ">
      <div class="py-5 text-center d-flex justify-content-center">
        <div class="text-center w-75 d-flex flex-column align-items-center">
          <h1>Equipe</h1>
          <p>Conheça alguns de nossos funcionários</p>
          <div class="underscore"></div>
        </div>
      </div>
      <div>
        <div id="team" class="d-flex justify-content-center">
          <!-- DYNAMIC JS HERE -->
        </div>
      </div>
    </section>
  </div>

</main>




<?php get_footer(); ?>
