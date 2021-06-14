<?php /* Template Name: project */ ?>
<?php get_header(); ?> 

<main>
	<section class="box-project" style="background: url('<?php echo __BASE_URL__; ?>/images/bn-project.png') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="title-pg">
				<h2 class="f-play">Dự án</h2>
			</div>
		</div>
		<div class="container-fluid">
			<div class="slide-project">
				<?php 
                    $args=array(
                        'post_type' => 'cpt_173',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        'posts_per_page' => 10,
                    );
                    $my_query = new wp_query($args);
                    ?>
					<?php if ( $my_query->have_posts() ): ?>
						<?php $index = 1; ?> 
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                        	<div class="item-slide">
								<div class="item-pr">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<div class="top text-uppercase">
											<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
											<div class="i-right">architecture</div>
										</div>
										<div class="desc text-right">
											<?php echo get_the_excerpt(); ?>
										</div>
										<div class="btn-more"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo __BASE_URL__; ?>/images/more.png" class="img-fluid" alt=""></a></div>
									</div>
								</div>
							</div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>   