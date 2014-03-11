<?php get_header(); ?>
<div id="content">
<div class="col-left single">
<?php the_post(); ?>
<div id="nav-above" class="navigation">
<p class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></p>
<p class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></p>
</div>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="post-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php 
if ( has_post_thumbnail() ) {
the_post_thumbnail();
} 
?>
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
</div>

</div>
<div class="entry-meta">
<span class="meta-prep meta-prep-author"><?php _e('By ', 'blankslate'); ?></span>
<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
<span class="meta-sep"> | </span>
<span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'blankslate'); ?></span>
<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
<?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
</div>

<div id="nav-below" class="navigation">
<p class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></p>
<p class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></p>
</div>
</div>
<div class="col-right single">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>