<div id="comments-wrap">
	<?php // Do not delete these lines
	$require = get_option( 'require_name_email' );
	$current_commenter = wp_get_current_commenter();

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if ( post_password_required() ) { ?>
	<p class="nocomments">برای مشاهده‌ی دیدگاه‌ها باید رمز نوشته را وارد کنید.</p>
	<?php return;}?>

	<!-- You can start editing here. -->
<?php // Begin Comments & Trackbacks ?>
<?php if ( have_comments() ) : ?>

	<ol class="commentlist"><?php wp_list_comments(); ?></ol>
	<div class="comments-navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

<?php // End Comments ?>
<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?><!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed ?><!-- If comments are closed. -->
	<p>امکان قراردادن دیدگاه برای این پست بسته شده است.</p>

<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

	<div id="respond">
		<h3 class="postcomment"><?php comment_form_title( 'دیدگاه خود را بیان کنید', 'ارسال یک پاسخ به دیدگاه %s' ); ?></h3>
		<div class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></div>
		<?php if ( get_option('comment_registration') && !get_the_ID() ) : ?>

		<p>ابتدا <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">وارد شوید</a> تا بتوانید دیدگاهی ارسال کنید</p>

<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( get_current_user_id() ) : ?>

			<p> آیا شما کاربر <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo wp_get_current_user()->display_name; ?></a> نیستید؟ <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="خروج از حساب کاربری"> خارج شوید &raquo;</a></p>

<?php else : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="author">نام <?php if ($require) echo "(الزامی)"; ?> :</label>
                            <input type="text" name="author" id="author" class="textarea"
                                   value="<?php echo $current_commenter['comment_author'] ?>" size="28" tabindex="1"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">پست‌الکترونیک <?php if ($require) echo "(الزامی)"; ?> :</label>
                            <input type="text" name="email" id="email" value="<?php echo $current_commenter['comment_author_email'] ?>"
                                   size="28" tabindex="2" class="textarea"/>
                        </div>
                    </div>
                </div>

<?php endif; ?>
            <div class="row">
		<div class="col-md-12">
			<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" class="textarea"></textarea>
			<input name="submit" id="submit" type="submit" tabindex="5" value="ارسال دیدگاه"/>
			<?php comment_id_fields(); ?>
		</div>
<?php do_action('comment_form', $post->ID); ?>
            </div>
		</form>
<?php endif; ?>
	</div>

<?php else : // Comments are closed ?>
<p>موقتا امکان ارسال دیدگاه وجود ندارد</p>
<?php endif; ?>
</div>