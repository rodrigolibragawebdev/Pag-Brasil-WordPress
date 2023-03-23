<?php
/*
Template Name: Full Width
Template Post Type: page, post
*/

get_header(); ?>

<main>
  <div class="container py-5">
    <div>
      <!-- LOGIC -->
      <?php if (has_post_thumbnail()):
        the_post_thumbnail("large", ["class" => "img-fluid"]);
      endif; ?>

      <br>
      <h1><?php the_title(); ?></h1>
      <br>
      <span> <?php the_category(","); ?></span><br>
      <span> <?php the_time("d/m/y"); ?></span><br>
      <span><?php the_tags("tags: ", ", "); ?></span>

      <div>
        <?php the_content(); ?>
      </div>

      <?php if (comments_open() || get_comments_number()):
        comments_template(); ?>
      <?php
      endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
