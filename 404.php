<?php header("HTTP/1.1 404 Not Found"); ?>
<?php get_header(); ?>
<div id="content">
	<p>{ Error 404 }</p>
	<h2><a href="/">Whatfettle</a> &#8275; Page Not Found</h2>
	<p>Oh noes! We can't find that page! Maybe someone gave you a bum steer, the Interweb tubes are blocked, or maybe I dropped the ball on this one.</p>
	<p>Perhaps you'd like to go <a href="/">home</a> or .. </p>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
</body>
</html>
