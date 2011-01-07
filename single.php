<?php get_header(); ?>
<div id="content">
	<?php the_post(); ?>
	<h2><a href="/">Whatfettle</a> &#8275; <a href="<?php the_permalink()  ?>"><?php the_title(); ?></a></h2>
	<div class="post"><?php the_content(); ?></div>
	<div id="footer" class="vcard">
		<p>A <a href="/" class="url">Whatfettle</a> article by <a href="/about/" class="fn">Paul Downey</a> published <a href="<?php the_permalink() ?>"><?php the_time('l, F jS, Y,') ?> at <?php the_time() ?></a> under a <a id="license" rel="license" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons License">Creative Commons License</a>. <?php edit_post_link('Edit this post.'); ?></p>
	</div>
	<?php comments_template(); ?>
</div>
<?php get_footer(); ?>
