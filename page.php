<?php get_header(); ?>
<div id="content">
	<?php the_post(); ?>
	<h2><a href="/">Whatfettle</a> &#8275; <a href="<?php the_permalink()  ?>"><?php the_title(); ?></a></h2>
	<div class="post"><?php the_content(); ?></div>
	<?php edit_post_link('Edit this post.'); ?>
</div>
<?php get_footer(); ?>
