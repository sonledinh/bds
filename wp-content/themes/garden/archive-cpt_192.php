<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>

<main>
	<section class="news">
		<div class="container">
			<div class="title-pg">
				<h2>Thư viện</h2>
			</div>
			<div class="list-tab">
				 <ul class="list-inline">
				 	<li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-0" class="clc-tab active">Tất cả</a></li>
				 	<?php
					$categories=get_terms( array(
					    'taxonomy' => 'tax_167',
					    'hide_empty' => false,
					) );
					foreach($categories as $key => $category) {  
					    $args=array(
					      'category__in' => array($category->term_id), 
					    );
					    ?>
					    <li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-<?php echo $key+1; ?>" class="clc-tab"><?php echo $category->name ?></a></li>
					    <?php
					    }  
					?>
				 	
				 	<!-- <li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-3" class="clc-tab">Video</a></li>
				 	<li class="list-inline-item"><a href="javascript:void(0)" data-tab="tab-4" class="clc-tab">Tin tức</a></li> -->
				 </ul>
			</div>
		</div>

		<div class="content-tab active" id="tab-0">
			<div class="container-fluid">
				<div class="list-new-pg">
					<div class="row">
						<?php
						$loc= array(
							'post_type' => 'cpt_192',
							'orderby'   => 'publish_date',
							'order'     => 'DESC',
							'posts_per_page' => 7,
						); 	
						$db = new WP_Query( $loc );
						$db = $db->get_posts(); 
						?>
						<div class="col-md-4">
							<?php
							if($db[0]){
								$data = $db[0]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[1]){
								$data = $db[1]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>


						<div class="col-md-4">
							<?php
							if($db[2]){
								$data = $db[2]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[3]){
								$data = $db[3]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[4]){
								$data = $db[4]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>



						<div class="col-md-4">
							<?php
							if($db[5]){
								$data = $db[5]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[6]){
								$data = $db[6]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>	
						
					</div>
				</div>
			</div>
		</div>

		<?php 
			foreach($categories as $key => $category) {  
				$loc=array(
					'post_type' => 'cpt_192',
					'orderby'   => 'publish_date',
					'order'     => 'DESC',
					'posts_per_page' => 7,
					'tax_query' => array(
				        array(
				           'taxonomy' => 'tax_167',
				           'field'    => 'slug',
				           'terms'    => $category->slug,
				        ),
					),
				); 	
        ?>

		<div class="content-tab" id="tab-<?php echo $key+1; ?>">
			<div class="container-fluid">
				<div class="list-new-pg">
					<div class="row">
						<?php
						$db = new WP_Query( $loc );
						$db = $db->get_posts(); 
						?>
						<div class="col-md-4">
							<?php
							if($db[0]){
								$data = $db[0]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[1]){
								$data = $db[1]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>


						<div class="col-md-4">
							<?php
							if($db[2]){
								$data = $db[2]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[3]){
								$data = $db[3]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[4]){
								$data = $db[4]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>



						<div class="col-md-4">
							<?php
							if($db[5]){
								$data = $db[5]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
							<?php
							if($db[6]){
								$data = $db[6]; 
									if (has_post_thumbnail( $data->ID ) ): 
										$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $data->ID ), 'single-post-thumbnail' ); 
									endif; 
							?>
									<div class="item-new-pg">
										<div class="avarta"><a href="<?php echo get_permalink( $data->ID );?>"><img src="<?php echo $image3[0]; ?>" class="img-fluid w-100" alt="<?php  echo $data->post_title  ?>"></a></div>
										<div class="info">
											<div class="top text-uppercase">
												<h3><a href="<?php echo get_permalink( $data->ID );?>"><?php  echo $data->post_title  ?></a></h3>
												<div class="i-right">architecture</div>
											</div>
											<div class="desc">
												<?php  echo wpautop(wp_trim_words( $data->post_title,1000, $more = null ));  ?>
											</div>
											<div class="btn-more"><a href="<?php echo get_permalink( $data->ID );?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt="<?php  echo $data->post_title  ?>"></a></div>
										</div>
									</div>
							<?php
							}
							?>
						</div>	
						
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