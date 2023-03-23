<?php get_header(); ?>

<main>
  <div class="container py-5">
    <section>
      <div class="row">
        <div class="col-sm-12">
          <?php if (have_posts()):
            while (have_posts()):
              the_post(); ?>
          <div>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
          <?php
            endwhile;
          endif; ?>
        </div>
      </div>
    </section>
  </div>

</main>

<?php get_footer(); ?>
