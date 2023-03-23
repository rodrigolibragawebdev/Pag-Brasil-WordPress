<?php
class My_Theme_Walker_Comment extends Walker_Comment
{
  /**
   * Outputs a single comment.
   *
   * @since 3.6.0
   *
   * @see wp_list_comments()
   *
   * @param WP_Comment $comment Comment to display.
   * @param int        $depth   Depth of the current comment.
   * @param array      $args    An array of arguments.
   */
  protected function comment($comment, $depth, $args)
  {
    if ("div" === $args["style"]) {
      $tag = "div";
      $add_below = "comment";
    } else {
      $tag = "li";
      $add_below = "div-comment";
    }

    $commenter = wp_get_current_commenter();
    $show_pending_links =
      isset($commenter["comment_author"]) && $commenter["comment_author"];

    if ($commenter["comment_author_email"]) {
      $moderation_note = __("Your comment is awaiting moderation.");
    } else {
      $moderation_note = __(
        "Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved."
      );
    }
    ?>
		<<?php echo $tag; ?> <?php comment_class($this->has_children ? "parent" : "", $comment); ?> id="comment-<?php comment_ID(); ?>">
		<?php if ("div" !== $args["style"]): ?>
		<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
			<?php /* if (0 != $args["avatar_size"]) {
     echo get_avatar($comment, $args["avatar_size"]);
   }   */
    ?>
    
			<?php
   $comment_author = get_comment_author_link($comment);

   if ("0" == $comment->comment_approved && !$show_pending_links) {
     $comment_author = get_comment_author($comment);
   }

   printf(
     /* translators: %s: Comment author link. */
     __('%s <span class="says">says:</span>'),
     sprintf('<cite class="fn">%s</cite>', $comment_author)
   );
   ?>
		</div>
		<?php if ("0" == $comment->comment_approved): ?>
		<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
		<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata">
			<?php
   printf(
     '<a href="%s">%s</a>',
     esc_url(get_comment_link($comment, $args)),
     sprintf(
       /* translators: 1: Comment date, 2: Comment time. */
       __('%1$s at %2$s'),
       get_comment_date("", $comment),
       get_comment_time()
     )
   );

   edit_comment_link(__("(Edit)"), " &nbsp;&nbsp;", "");
   ?>
		</div>

		<?php comment_text(
    $comment,
    array_merge($args, [
      "add_below" => $add_below,
      "depth" => $depth,
      "max_depth" => $args["max_depth"],
    ])
  ); ?>

		<?php comment_reply_link(
    array_merge($args, [
      "add_below" => $add_below,
      "depth" => $depth,
      "max_depth" => $args["max_depth"],
      "before" => '<div class="reply">',
      "after" => "</div>",
    ])
  ); ?>

		<?php if ("div" !== $args["style"]): ?>
		</div>
		<?php endif; ?>
		<?php
  }
}

?>
