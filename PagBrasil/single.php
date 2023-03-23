<?php get_header(); ?>

<main>
  <div class="container py-5">
    <div class="row d-flex align-items-start">
      <div class="col-sm-8">
        <!-- LOGIC -->
        <?php if (has_post_thumbnail()):
          the_post_thumbnail("large", ["class" => "img-fluid imgRounded"]);
        endif; ?>

        <div class="postContent">
          <h1><?php the_title(); ?></h1>
          <div class="postDetails">
            <p> <?php the_category(","); ?> </p>
            <p> <?php the_time("d/m/y"); ?> </p>
            <p> <?php the_tags("tags: ", ", "); ?></p>
            <p> <?php the_author(""); ?></p>
          </div>
          <div>
            <?php the_content(); ?>
          </div>
        </div>
        <div class="postCommentSession py-3">
          <?php if (comments_open() || get_comments_number()):
            comments_template(); ?>
          <?php
          endif; ?>
        </div>
      </div>
      <div class="col-sm-4 postSideBar px-3 py-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
