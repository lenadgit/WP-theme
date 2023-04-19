<?php get_header(); ?>


<div class="blockposts">
     <?php if(have_posts()) : ?>
     		<?php while(have_posts()) : the_post(); ?> 
<div class="post">
	<h1 class="postname"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	
	<div class = "imgstyle"><?php the_post_thumbnail(); ?></div>
     				<p class = "posttext">
     					<?php the_content(); ?>
     				</p>
	</div>

	<div class = "invisible"></div>

			<?php endwhile; ?>	
	

</div>
			<?php endif; ?> 

<?php get_sidebar(); ?>	

</div>

<?php get_footer(); ?>

</div>	
</body>
</html>
