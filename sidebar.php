<div id="kickstarter">
	<h1>Donate now</h1>
	<iframe frameborder="0" height="275px" src="http://www.kickstarter.com/projects/888557521/gears-of-change-a-youth-climate-change-media-proje/widget/video.html" width="300px"></iframe>
</div>

<ul>
	<h1>Recently</h1>
<?php query_posts('showposts=3'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<li class="post">
			<?php if(has_post_thumbnail()) { the_post_thumbnail('thumb'); } ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</li>
<?php endwhile; ?>
<?php else : ?>			
<?php endif; ?>
