<!-- start WordPress Loop with "query posts" to only get latest post -->
<?php query_posts('posts_per_page=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="featImg" class="col-md-6">
		<?php if ( has_post_thumbnail() ) : ?>
    		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        		<?php the_post_thumbnail('full'); ?>
    		</a>
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<h1><?php the_title(); ?></h1>
		<small>Posted on: <?php the_date(); ?></small>
		<?php the_excerpt(); ?>
	</div>
<!-- end WordPress Loop -->
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'We apologize... something went wrong. Please try again.' ); ?></p>
<?php endif; ?>