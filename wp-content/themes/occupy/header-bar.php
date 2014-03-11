<?php
if ( is_front_page() ) { ?>
	<header>
<div id="branding">
<div id="blog-title"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a>
</div>
<nav>
<?php wp_nav_menu( array( 'items_wrap' => '<ul id="nav">%3$s</ul>', 'theme_location' => 'primary-menu' ) ); ?>
</nav></div>
</header>
<div id="front-top"><?php
if( function_exists('FA_display_slider') ){
    FA_display_slider(7);
}
?>
</div>
<div class="page">


<div id="container">
<?php } else { ?>
	<header>
<div id="branding">
<div id="blog-title"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a>
</div>
<nav>
<?php wp_nav_menu( array( 'items_wrap' => '<ul id="nav">%3$s</ul>', 'theme_location' => 'primary-menu' ) ); ?>
</nav></div>
</header>
<div id="page">


<div class="container">
<?php }
?>


