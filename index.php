<?php 
get_header();

?>
<div class="wrapper">
<div class="page-banner__bg-image full-width inner" style='background:url(<?php echo get_theme_file_uri('/assets/images/ocean.jpg') ?>) no-repeat center fixed;background-size: cover; '>
	<div class=" title mg-0">
		<h1 class="major">Welcome to Daytona Dev Solutions Blog</h1>
		<h2>Keep up with our latest news.</h2>
	</div>
</div>
</div>
<div class="wrapper style3 fade-up">
	<div class="inner">
		<div class="features">
	<?php
		while(have_posts()){
			the_post();?>
			<section>
				<h2><a href="<?php the_permalink();?>"><?php  the_title();?></a></h2>
				<p>Posted BY 
				<?php the_author_posts_link(); ?> on 
				<?php the_time('m.j.y')?> in 
				<?php echo get_the_category_list(', ');?></p>
				<p>
					<?php the_excerpt();?>
				</p>
				<p><a href="<?php the_permalink();?>" class="button">Continue Reading</a></p>
			</section>
		<?php
		} 
	?>
		</div>
	<?php  echo paginate_links();?>
	</div>
	
</div>
<?php
get_footer();?>