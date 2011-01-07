<?php get_header(); ?>
<div id="content">
	<?php the_post(); ?>
	<h2><a href="/">Whatfettle</a> &#8275; <a href="<?php the_permalink()  ?>"><?php the_title(); ?></a></h2>
	<div class="post"><?php the_content(); ?></div>
	<div id="footer">
	<p>
		A <a href="/">Whatfettle</a> post by <a href="/about/">Paul Downey</a> published on the <?php the_time('l, F jS, Y,') ?> at <?php the_time() ?> under a <a id="license" rel="license" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons License">Creative Commons License</a>.</p>
		<?php edit_post_link('<p>Edit</p>'); ?>
	</div>
	<?php comments_template(); ?>
</div>
<?php get_footer(); ?>
