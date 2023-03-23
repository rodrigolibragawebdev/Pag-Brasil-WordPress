<?php
/*
 * The template for displaying Comments.
 */

if (post_password_required()) {
  return;
} ?>

<div id="comments" class="comments-area">

  <?php if (have_comments()): ?>
  <h4 class="comments-title">
    <?php printf(
      _nx(
        'Um comentário(s) em "%2$s"',
        '%1$s comentários em "%2$s"',
        get_comments_number(),
        "Titulo",
        ""
      ),
      number_format_i18n(get_comments_number()),
      "<span>" . get_the_title() . "</span>"
    ); ?>
  </h4>

  <ol class="comment-list list-unstyled">
    <?php wp_list_comments([
      "style" => "ol",
      "max_depth" => 1,
      "short_ping" => true,
      "avatar_size" => 74,
      "reverse_top_level" => true,
      "walker" => new My_Theme_Walker_Comment(),
    ]); ?>
  </ol><!-- .comment-list -->

  <?php if (get_comment_pages_count() > 1 && get_option("page_comments")): ?>
  <nav class="navigation comment-navigation" role="navigation">

    <h1 class="screen-reader-text section-heading"><?php _e(
      "Navegar",
      ""
    ); ?></h1>
    <div class="nav-previous"><?php previous_comments_link(
      __("&larr; Comentários antigos", "")
    ); ?></div>
    <div class="nav-next"><?php next_comments_link(
      __("Comentários recentes &rarr;", "")
    ); ?></div>
  </nav>
  <?php endif; ?>

  <?php if (!comments_open() && get_comments_number()): ?>
  <p class="no-comments"><?php _e("Comentários não permitidos.", ""); ?></p>
  <?php endif; ?>

  <?php endif;
// have_comments()
?>

  <?php comment_form([
    "class_submit" => "btn btnPagBrasil",
    "fields" => [
      "author" =>
        '<div class="pt-2 form-group comment-form-author"> 
    <label for="author"> ' .
        __("Nome", "domainreference") .
        "</label>" .
        '<input class="form-control" id="author" name="author" value="" type="text" size="30" aria-required="true"></input>
    </div>',
      "email" =>
        '<div class="pt-2 form-group comment-form-email"> 
     <label for="email"> ' .
        __("E-mail", "domainreference") .
        "</label>" .
        '<input class="form-control" id="email" name="email" value="" type="text" size="30" aria-required="true"></input>
     </div>',
    ],
    //  COMMENT_FIELD
    "comment_field" =>
      '<div class="form-group comment-form-comment"> 
      <label for="comment"> ' .
      _x("Comment", "noun") .
      '</label> 
      <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
      </div>',
  ]); ?>

</div><!-- #comments -->