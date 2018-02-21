<!-- Bootstrap 4 Carousel with WordPress Loop -->
<?php
$args = array(
	'post_type' => 'post',
	'category_name' => 'k911-news'
);
$the_query = new WP_Query ( $args ); 
?>


<div id="k911Carousel" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">


    	<!-- Start WP Loop -->
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<li data-target="#k911Carousel" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
		<?php endwhile; endif; ?>


    </ol>

	<?php rewind_posts(); ?>


    <div class="carousel-inner"> 	
		

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	          $thumbnail_id   = get_post_thumbnail_id();
	          $thumbnail_url  = wp_get_attachment_image_src( $thumbnail_id, 'full', true );
	          $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attatchment_image_alt', true );
	    ?>


    	<div class="carousel-item <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
    		
    		<?php if ( has_post_thumbnail() ) : ?>
    			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    				<?php the_post_thumbnail('full'); ?>
			</a>
			<?php endif; ?>


	    	<div class="container">
	    		<div class="carousel-caption text-left">
	    			<h1 class="text-shadow k911-carousel-title"><?php the_title(); ?></h1>
	    			<span id="carouselExcerpt" class="text-shadow d-none d-sm-block"><?php the_excerpt(); ?></span>
	    		</div>
	    	</div>

    	</div>
		<?php endwhile;	endif; ?>
    </div>
</div>