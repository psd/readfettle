<?php

/* no stupid smart quotes, please! */
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('the_rss_contentâ', 'wptexturizeâ');

?>
