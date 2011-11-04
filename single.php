<?php get_header(); ?>
	
	


<div class="container">
<div class="floatfix">

<div id="single" class="mainContent">	

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<h4><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h4>
<?php if (has_post_format( 'video' )) { ?>
<!-- video post loop ========================================================= -->
		<div class="video">
    		<h2><?php the_title(); ?></h2>
    		<h3><?php the_time('M j'); ?></h3>
    		<?php the_content('more'); ?>                
<!-- quote post loop ========================================================= -->
<?php } elseif (has_post_format( 'quote' )) { ?>
    	<div class="link">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
			<h2><?php the_title(); ?></h2>
    		<h3><?php the_time('M j'); ?></h3>  		
    		<?php the_content('more'); ?>
   			<p class="attribution">&mdash; <?php echo get_post_meta($post->ID, 'quoted', true) ?></p>                    
<!-- link post loop ========================================================= -->
<?php } elseif (has_post_format( 'link' )) { ?>
        <div class="quote">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
            <h2><?php the_title(); ?></h2>
            <h3><?php the_time('M j'); ?></h3>
			<?php the_content(); ?>
            <p class="attribution">&mdash; <?php echo get_post_meta($post->ID, 'link-author', true) ?></p>                  
<!-- normal post loop ========================================================= -->
<?php } else { ?>
		<div class="standard">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
			<h3><?php the_time('M j'); ?></h3>
			<h2><?php the_title(); ?></h2>
			<?php the_content('more'); ?>
<?php } ?>	
<!-- everything has this too =================================================== -->    
			<h5><?php the_author(); ?>  			
		</div>
	</div>
<?php endwhile; ?>
<?php else : ?>			
<?php endif; ?>
</div>



<div id="stash">
	<?php get_sidebar(); ?>
</div>

</div>
</div>


</body>
<script>
var $container = $('#feed');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.post'
  });
});
</script>