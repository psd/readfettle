<?php get_header(); ?>
	<div id="header">
		<h1><a href="#fettle">Whatfettle</a></h1>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
	<div id="content">
		<p class="vcard">An all too infrequent <a href="http://blog.whatfettle.com" class="url">journal</a> by <a href="/about/" class="fn" rel="me">Paul Downey</a> (<a href="#elsewhere" class="nickname">psd</a>), a <span class="title">hacker</span> living in <a href="http://en.wikipedia.org/wiki/Berkhamsted" class="adr"><span class="locality">Berkhamsted</span>, <span class="country-name">England</span></a>, published with an <a href="http://blog.whatfettle.com/feed/" title="Paul Downey Atom (XML) Feed" rel="alternate" type="application/atom+xml">Atom Feed</a> and under a <a id="license" rel="license" href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons License">Creative Commons License</a>.</p>
		<h2>Posts</h2>
		<ul id="posts">
	<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<em>
				<?php the_time('d-M-y') ?> 
				<?php if ( get_comments_number() > 0 ) : ?>{<?php comments_popup_link('0', '1', '%'); ?>}<?php endif; ?>
			</em>
			</li>
	<?php endwhile; ?>
		</ul>
	</div>
<?php get_sidebar(); ?>
	<dl class="dictionary">
		<dt id="fettle">fettle |ˈfetl|</dt>
		<dd>&ndash; noun: state; condition. <i>what <b>fettle</b>? In fine <b>fettle</b>!</i></dd>
		<dd>&ndash; verb: to repair: <i>I'll <b>fettle</b> it.</i></dd>
	</dl>
<?php get_footer(); ?>
