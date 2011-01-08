<form id="searchform" method="GET" action="<?php bloginfo('home'); ?>/">
	<label for="s">Search this site</label>
	<input id="s" name="s" type="search" value="<?php echo wp_specialchars($s, 1); ?>" />
</form>
