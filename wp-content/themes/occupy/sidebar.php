<aside id="sidebar">
<?php if ( is_active_sidebar('primary-widget-area') ) : ?>
<div id="primary" class="widget-area">
<div id="salsa">
<h3>Sign Up For Updates!</h3>
<strong>Stay In Touch</strong> with email updates News and Events from <strong>Occupy Our Homes DC</strong>
<?php the_jalapeno_action(8036) ?>
</div>
<ul class="sid">
<?php dynamic_sidebar('primary-widget-area'); ?>
</ul>
</div>
<?php endif; ?>
</aside>