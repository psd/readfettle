<?php get_header(); ?>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><a href="/">Whatfettle</a> &#8275; <a href="<?php the_permalink()  ?>"><?php the_title(); ?></a></h2>
	<div class="post">
	<?php the_content('<span class="more-link">Continue Reading &raquo;</span>'); ?>
	</div>
	<div id="footer">
		<p>A <a href="/">Whatfettle</a> post by <a href="/about/">Paul Downey</a> published on the <?php the_time('l, F jS, Y,') ?> at <?php the_time() ?> under a <a id="license" rel="license" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons License">Creative Commons License</a>.</p>
	</div>
	<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
