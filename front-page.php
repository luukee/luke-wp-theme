
<?php
/**
 * Template Name: Front Page Template
 */

get_header('none'); ?>

<div class="grid-x grid-padding-x">
	<div class="large-12 cell">
  		<div class="callout">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content' ); ?>
		
	<?php endwhile; ?>

		</div>
	</div>
</div>


<?php get_footer(); ?>
