<?php get_header(); ?>
	<div id="header">
		<h1><a href="#footer">Whatfettle</a></h1>
		<p>— an infrequent weblog by <a href="/about/">Paul Downey</a> (<a href="#elsewhere">psd</a>)</p>
	</div>
<?php while (have_posts()) : the_post(); ?>

			<li><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<span class="post-date"><?php the_time('Y m d') ?></span>
			</li>

<?php endwhile; ?>
</ul>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
