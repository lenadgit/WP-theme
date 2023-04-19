<?php get_header(); ?>


<div class="blockposts">
     <?php if(have_posts()) : ?>
     		<?php while(have_posts()) : the_post(); ?> 
<div class="post">
	<h1 class="postname"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p class = "postdate">(<?php the_date_xml(); ?>)</p>
	
     				<p class = "posttext">
     					<?php the_content(); ?>
     				</p>
	</div>
		<div class = "invisible"></div>

			<?php endwhile; ?>	

<div class="pagenavigator">
	<?php previous_post_link('%link &nbsp; &nbsp;'); ?>
               <?php next_post_link('%link'); ?>
</div>

</div>
	<?php else : ?>
		<div class="blockposts">
		<div class="post">
		<p class = "posttext">
<h1>Result of search</h1>
                   <p>Not Found</p>
</div>
</div>
</div>                   
			<?php endif; ?>
<?php get_sidebar(); ?>	

</div>

<?php get_footer(); ?>

</div>	
</body>
</html>
