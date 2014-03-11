<?php
/*
Template Name: Front
*/
?>

<?php get_header(); ?><style>.more-link{display:none;}</style>
<div id="content">
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<div id="nav-above" class="navigation">
<p class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> older articles', 'blankslate' )) ?></p>
<p class="nav-next"><?php previous_posts_link(__( 'newer articles <span class="meta-nav">&raquo;</span>', 'blankslate' )) ?></p>
</div>
<?php } ?>
<div class="col-left">
<h2 class="page-title">News</h2>
<?php while ( have_posts() ) : the_post() ?>
<?php $stripe = ($stripe == 'bright') ? 'bright' : 'dark'; ?>
<div id="post-<?php the_ID(); ?>" <?php post_class($stripe); ?>><div class="post-image">
<?php if ( has_post_thumbnail() ) { ?>
<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
<?php } else { ?>
<p align="center"> <img src="<?php bloginfo('template_directory'); ?>/images/default-image.png" alt="<?php the_title(); ?>" /></p></div>
<?php } ?>


<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div class="entry-content">
<?php the_content(__('... <div style="display:none;>f</div>ffff', 'blankslate')); ?>...
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>
</div>
<div class="entry-utility">
<div class="post-meta">
								<span class="post-meta-info"><?php the_time( __('F jS, Y', 'cp') ); ?> in <?php the_category(', ') ?></span>				

				<span class="post-meta-comments"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">Read More</a><?php edit_post_link( __( 'Edit', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
</span>
			</div>

</div>
<img src="<?php bloginfo('template_directory'); ?>/images/border.png" />
</div>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
<div id="nav-below" class="navigation">
<p class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> older articles', 'blankslate' )) ?></p>
<p class="nav-next"><?php previous_posts_link(__( 'newer articles <span class="meta-nav">&raquo;</span>', 'blankslate' )) ?></p>
</div>
<?php } ?>
</div><div class="col-right"></div>
<?php get_footer(); ?>