<?php get_header(); ?>





<div class="container">
<div class="floatfix">

<div id="feed" class="mainContent">	
<?php query_posts('showposts=20&offset=0'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<h4><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h4>
<?php if (has_post_format( 'video' )) { ?>
<!-- video post loop ========================================================= -->
		<div class="video">
    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    		<h3><?php the_time('M j'); ?></h3>
    		<?php the_excerpt('more'); ?>                
<!-- quote post loop ========================================================= -->
<?php } elseif (has_post_format( 'quote' )) { ?>
    	<div class="quote">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
    		<h3><?php the_time('M j'); ?></h3>
    		<?php the_excerpt('more'); ?>
   			<p class="attribution">&mdash; <?php echo get_post_meta($post->ID, 'quoted', true) ?></p>                    
<!-- link post loop ========================================================= -->
<?php } elseif (has_post_format( 'link' )) { ?>
        <div class="quote">
        	<a href="<?php echo get_post_meta($post->ID,'link-url', true) ?>" > 		
			<?php if(has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
            <h2><?php the_title(); ?></h2></a>
            <h3><?php the_time('M j'); ?></h3>
			<?php the_excerpt(); ?>
            <p class="attribution">&mdash; <?php echo get_post_meta($post->ID, 'link-author', true) ?></p>                  
<!-- normal post loop ========================================================= -->
<?php } else { ?>
		<div class="standard">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('medium'); } ?>
			<h3><?php the_time('M j'); ?></h3>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt('more'); ?>
<?php } ?>	
<!-- everything has this too =================================================== -->      			
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