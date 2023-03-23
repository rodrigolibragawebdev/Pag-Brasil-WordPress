<?php get_header(); ?>

<main>
  <section>
    <div class="container py-5">
      <div class="d-flex justify-content-center">
        <div class="text-center w-75 d-flex flex-column align-items-center">
          <h1>Página não encontrada</h1>
          <p>O link que você estava procurando não foi encontrado, tente novamente.</p>
          <div class="underscore"></div>
          <button class="btn btnPagBrasil d-block my-5"> <a href="<?php echo home_url(
            "/"
          ); ?>">Voltar para página inicial</a></button>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
