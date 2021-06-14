<?php /* Template Name: News */ ?>
<?php get_header(); ?>

<main>
	<section class="news">
		<div class="container">
			<div class="title-pg">
				<h2>Tin tức</h2>
			</div>
			<div class="list-tab">
				 <ul class="list-inline">
				 	<li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-0" class="clc-tab active">Tất cả</a></li>
				 	<?php
						$cat_args=array(
						  'orderby' => 'name',
						  'order' => 'ASC' 
						);
						$categories=get_categories($cat_args);
						foreach($categories as $key => $category) {  
						    $args=array(
						      'category__in' => array($category->term_id), 
						    );
						    ?>
						    <li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-<?php echo $key+1; ?>" class="clc-tab"><?php echo $category->name ?></a></li>
						    <?php
						    }  
						?>
				 </ul>
			</div>
		</div> 
		<div class="content-tab active" id="tab-0">
			<div class="container-fluid">
				<div class="list-new-pg">
					<div class="row"> 
						<?php 
	                        $args_nb=array(
	                            'post_type' => 'post',
	                            'orderby'   => 'publish_date',
	                            'order'     => 'DESC',
	                            // 'posts_per_page' => 3, 
	                        );  
	                        $my_query_nb = new wp_query($args_nb);
	                    ?>
	                     <?php $i = 0; ?>
		                    <?php if ( $my_query_nb->have_posts() ): ?>
		                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
		                            <?php $i++ ?>
		                            <div class="col-md-4 col-sm-6">
										<div class="item-new-pg">
											<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<div class="top text-uppercase">
													<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
													<div class="i-right">architecture</div>
												</div>
												<div class="desc">
													<?php echo get_the_excerpt(); ?>
												</div>
												<div class="btn-more"><a href="<?php echo get_the_permalink() ?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt=""></a></div>
											</div>
										</div>
									</div>
		                        <?php endwhile ?>
		                    <?php endif;wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
		$cat_args=array(
		  'orderby' => 'name',
		  'order' => 'ASC' 
		);
		$categories=get_categories($cat_args);
		foreach($categories as $key => $category) {  
		?>
		<div class="content-tab " id="tab-<?php echo $key+1; ?>">
			<div class="container-fluid">
				<div class="list-new-pg">
					<div class="row"> 
						<?php 
	                        $args_nb=array(
	                            'post_type' => 'post',
	                            'orderby'   => 'publish_date',
	                            'order'     => 'DESC',
	                            'category__in' => $category->term_id
	                            // 'posts_per_page' => 3, 
	                        );  
	                        $my_query_nb = new wp_query($args_nb);
	                    ?>
	                     <?php $i = 0; ?>
		                    <?php if ( $my_query_nb->have_posts() ): ?>
		                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
		                            <?php $i++ ?>
		                            <div class="col-md-4 col-sm-6">
										<div class="item-new-pg">
											<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<div class="top text-uppercase">
													<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
													<div class="i-right">architecture</div>
												</div>
												<div class="desc">
													<?php echo get_the_excerpt(); ?>
												</div>
												<div class="btn-more"><a href="<?php echo get_the_permalink() ?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt=""></a></div>
											</div>
										</div>
									</div>
		                        <?php endwhile ?>
		                    <?php endif;wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
		    }  
		?>

	</section>
</main>
<?php get_footer() ?>   

