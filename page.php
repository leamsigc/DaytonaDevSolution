<?php get_header(); 
while(have_posts()){
the_post();?>
   <!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
                    <div class="page-banner__bg-image full-width inner" style='background:url(<?php echo get_theme_file_uri('/assets/images/ocean.jpg')?>) no-repeat center fixed;background-size: cover; '>
                        <h1 class="major"><?php the_title() ?></h1>
                        <h2>DONT FORGET TO REPLACE ME LATTER</h2>
					</div>    
					<!-- metabox -->
					<div class="inner">
						<?php 
						// echo get_the_ID();
						// echo wp_get_post_parent_id(get_the_iD());
						$theParentId = wp_get_post_parent_id(get_the_iD());
						if($theParentId){ ?>
							<a href="<?php echo get_permalink($theParentId)?>" class='button'>
							<?php echo get_the_title($theParentId)?>
							</a>
							<a href='#' class='button primary'><?php echo the_title()?></a>
							<?php } ?>
					</div>		

                    <div class="inner">
							<span class="image fit"><img src="<?php echo get_theme_file_uri('/assets/images/pic04.jpg');?>" alt="" /></span>
							<?php 
								$testArray = get_pages(array(
									'child_of' => get_the_ID()
								));
							if($theParentId or $testArray ){ ?>
								<nav class='menu'>
									<a class='button' 
									href="<?php echo get_the_permalink($theParentId) ?>">
									<?php echo  get_the_title($theParentId) ?>
									</a>
									<?php 
									// wp_list_pages([])
									// Associated array
									// $animal = array('cat','dog','pig');
									// $animalSounds = array(
									// 	'cat' => 'meow',
									// 	'dog' => 'bark',
									// 	'pig' => 'oink'
									// );
									// 	echo $animalSounds['dog'];
										
									if($theParentId){
										$findChildrenOf = $theParentId;
									}else{
										$findChildrenOf = get_the_ID();
									}
									?>
									<ul>
									<?php
									wp_list_pages(array(
										'title_li' => NULL,
										'child_of' => $findChildrenOf,
										'sort_column' => 'menu_order'
									));
									?>
									</ul>
								</nav>
							<?php }?>
						<?php the_content(); ?>
						</div>
					</section>

			</div> 
<?php } 
get_footer();?>