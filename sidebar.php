<section id="hud" class="fourcol">
<?php query_posts('showposts=20'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<li class="post">
		<h3><?php the_time('F j'); ?></h3>
<!-- video post loop ========================================================= -->
<?php if (has_post_format( 'video' )) { ?>	     
			<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb'); } ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
<!-- quote post loop ========================================================= -->
<?php } elseif (has_post_format( 'quote' )) { ?>
			<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb'); } ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>   	                    
<!-- link post loop ========================================================= -->
<?php } elseif (has_post_format( 'link' )) { ?>
			<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb'); } ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>                      
<!-- normal post loop ========================================================= -->
<?php } else { ?>
			<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb'); } ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!-- everything has this too =================================================== -->      			
<?php } ?>	

</li>
<?php endwhile; ?>
<?php else : ?>			
<?php endif; ?>
