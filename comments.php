<?php if ($comments) : ?>
	<div id="comments">
	<h2>Comments <span class="count"><?php comments_number('{ 0 }', '{ 1 }', '{ % }' );?></span></h2>
	<ol class="commentlist">
<?php foreach ($comments as $comment) : ?>
		<li id="comment-<?php comment_ID() ?>" class="<?php echo $oddcomment; ?>">
			<p class="comment-metadata">
				<img src="<?php gravatar(); ?>" alt="Gravatar" class="gravatar"/>
				<em><?php comment_author_link() ?></em>
				| <a href="#comment-<?php comment_ID() ?>" title="Permalink to this comment" rel="permalink"><?php comment_date('d-M-y') ?> at <?php comment_time('g:i a') ?></a>
				<?php edit_comment_link('Edit', '| ', ''); ?></p>
			<?php if ($comment->comment_approved == '0') : ?><em>Your comment is awaiting moderation.</em><?php endif; ?>
			<?php comment_text() ?>
		</li>
<?php
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>
<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<h4 id="respond">Post a Comment</h4>
	<div class="formcontainer">	
		<form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
<?php if ( $user_ID ) : ?>
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php" title="Logged in as <?php echo $user_identity; ?>"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log off?</a></p>
<?php else : ?>
			<p>Your email is <em>never</em> published nor shared. <?php if ($req) echo "Required fields are marked <span style='color:red;background:#fff;'>*</span>"; ?></p>
			<div><label for="author">Name</label></div>
			<div><input id="author" name="author" type="text" value="<?php echo $comment_author; ?>" tabindex="3" /> <span class="required">*</span></div>
			<div><label for="email">Email</label></div>
			<div><input id="email" name="email" type="text" value="<?php echo $comment_author_email; ?>" tabindex="4" />  <span class="required">*</span></div>
			<div><label for="url">Website</label></div>
			<div><input id="url" name="url" type="text" value="<?php echo $comment_author_url; ?>" tabindex="5" /></div>
<?php endif; ?>
			<div><label for="comment">Message</label></div>
			<div><textarea id="comment" name="comment" tabindex="6" cols="45" rows="8"></textarea></div>
			<div>
				<input id="submit" name="submit" type="submit" value="Post" tabindex="7" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</div>
<?php do_action('comment_form', $post->ID); ?>
		</form>
	</div>
</div>
<?php endif; ?>
