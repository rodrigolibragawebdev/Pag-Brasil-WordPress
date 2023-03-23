<div class="postCard">
  <!-- image -->
  <?php if (has_post_thumbnail()):
    the_post_thumbnail("full", ["class" => "imgCard img-fluid"]);
  endif; ?>
  <div class="postCardContent">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="d-flex justify-content-start">
      <p class="pr-2"> <?php the_category(","); ?> </p>
      <p class="px-2"> <?php the_author(""); ?> </p>
      <p class="px-2"> <?php the_date("d/m/y"); ?> </p>
    </div>
    <?php the_excerpt(); ?>
    <button class="btn btnPagBrasil"><a href="<?php the_permalink(); ?>">Ler mais</a></button>
  </div>
</div>