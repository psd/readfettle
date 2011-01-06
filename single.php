<?php get_header(); ?>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content('<span class="more-link">Continue Reading &raquo;</span>'); ?>
	<div id="footer">
		<p>A <a href="/">Whatfettle</a> post by <a href="/about/">Paul Downey</a> and published on the <?php the_time('l, F jS, Y,') ?> at <?php the_time() ?>.</p>
	</div>
	<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
