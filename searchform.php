<form id="searchform" method="get" action="<?php bloginfo('home'); ?>/">
	<input id="s" name="s" type="text" value="<?php echo wp_specialchars($s, 1); ?>" tabindex="1" />
	<input id="searchsubmit" name="searchsubmit" type="submit" value="Search" tabindex="2" />
</form>
