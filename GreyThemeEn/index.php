<?php get_header(); ?>


<div class="blockposts">
     <?php if(have_posts()) : ?>
     		<?php while(have_posts()) : the_post(); ?> 
<div class="post">
	<h1 class="postname"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p class = "postdate">(<?php the_date_xml(); ?>)</p>
	<div class = "imgstyle"><?php the_post_thumbnail(); ?></div>
     				<p class = "posttext"><?php the_excerpt(); ?></p>
	</div>

	<div class = "invisible"></div>
<div class = "readmore-btn a"><a href = "<?php the_permalink(); ?>">Read more</a></div>	
<p class = "label"><?php the_tags(); ?></p>
			<?php endwhile; ?>	
	
<div class="pagenavigator"><?php if (function_exists('wp_corenavi')) wp_corenavi(); ?></div>
</div>
			<?php endif; ?> 

<?php get_sidebar(); ?>	

</div>

<?php get_footer(); ?>

</div>	
</body>
</html>