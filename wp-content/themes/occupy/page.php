<?php get_header(); ?>
<div id="content">
<div class="col-left page">
<div id="post-<?php the_ID(); ?>" class="post type-post ">
<h1 class="post-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} 
?>
<?php the_content(); ?>
</div>
</div>
<div id="nav-below" class="navigation">
<p class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> older articles', 'blankslate' )) ?></p>
<p class="nav-next"><?php previous_posts_link(__( 'newer articles <span class="meta-nav">&raquo;</span>', 'blankslate' )) ?></p>
</div></div>

<div class="col-right single">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>