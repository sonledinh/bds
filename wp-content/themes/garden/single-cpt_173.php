<?php /* Template Name: project-detail */ ?>
<?php get_header(); ?>

<main class="archi-main"> 
	<section class="box-bn-archi">
		<div class="avarta-1"><img src="<?php echo __BASE_URL__; ?>/images/bn-archi.png" class="img-fluid w-100" alt=""></div>
		<div class="intro"><a href=""><img src="<?php echo __BASE_URL__; ?>/images/intro.png" class="img-fluid" alt=""></a></div>
		<div class="link-archi text-uppercase">
			<div class="container">
				<ul>
					<li><a href=""><img src="images" alt="">chào mừng <span>→</span></a></li>
					<li><a href=""><img src="images" alt="">ALBUM HÌNH ẢNH  <span>→</span></a></li>
					<li><a href=""><img src="images" alt="">MÔ TẢ, NỘI DUNG DỰ ÁN <span>→</span></a></li>
					<li><a href=""><img src="images" alt="">khách hàng của chúng tôi nói gì về house in forest <span>→</span></a></li>
					<li><a href=""><img src="images" alt="">CÁC DỰ ÁN LIÊN QUAN <span>→</span></a></li>
				</ul>
			</div>
		</div>
		<div class="cap-archi">
			<div class="container">
				<div class="info-cap">
					<!-- <h1><img src="<?php echo __BASE_URL__; ?>/images/t-archi.png" class="img-fluid" alt=""></h1> -->
					<h1 class="f-play"><?php the_title(); ?></h1>
					<div class="desc"><?php echo the_field('desc') ?></div>
				</div> 
			</div>
		</div> 
	</section> 
	<section class="box-gall-archi">
		<div class="container">
			<div class="box-gall">
				<h2 class="text-uppercase"><?php echo the_field('t_album') ?></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="txt-gall-ar">
							<?php echo the_field('desc_album') ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="av"><img src="<?php echo get_field('avar_album')['url'] ?>" class="img-fluid w-100" alt=""></div>
					</div>
				</div>
			</div>
			<div class="box-ins">
				<h2 class="text-uppercase"><?php echo the_field('title_ins') ?></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="av"><img src="<?php echo get_field('avr_ins')['url'] ?>" class="img-fluid w-100" alt=""></div>
					</div>
					<div class="col-md-6">
						<div class="txt-ins-ar">
							<?php echo the_field('desc_ins') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-desc">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-uppercase">mô tả, nội dung dự án</h2>
				</div>
				<div class="col-md-6">
					<div class="box-quess">
						<?php while ( has_sub_field('danh_sach' ) ) : ?>
							<div class="item-quess">
								<h4><span><?php the_sub_field( 'title_desc' ); ?></span> <img src="<?php echo __BASE_URL__; ?>/images/circle-right.png" class="img-fluid" alt=""></h4>
								<div class="answer">
									<?php the_sub_field( 'sort_desc' ); ?>
									<div class="btn-exp"><a href=""><img src="<?php echo __BASE_URL__; ?>/images/exp.png" class="img-fluid" alt=""></a></div>
								</div>
							</div>
						<?php endwhile; ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-feedback">
		<div class="container">
			<h2 class="text-uppercase">khách hàng của chúng tôi nói gì về house in forest</h2>
			<div class="slide-feed">
				<?php while ( has_sub_field('danh_sach_feedback' ) ) : ?>
					<div class="item-slide">
						<div class="item-feed">
							<div class="avarta-fg text-center"><img src="<?php echo get_sub_field('avr_feed')['url']; ?>" class="img-fluid" alt=""></div>
							<div class="info">
								<div class="name">
									<h3><?php the_sub_field( 'ten' ); ?></h3><img src="<?php echo __BASE_URL__; ?>/images/kep.png" class="img-fluid" alt="">
								</div>
								<div class="desc ml-auto"><?php the_sub_field( 'sort_feed' ); ?></div>
							</div>
						</div>
					</div> 
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<section class="box-prj">
		<div class="title">
			<div class="container">
				<h2>Dự án liên quan</h2>
			</div>
		</div>
		<div class="container-fluid">
			<div class="slide-project">
				<?php 
                    $args_nb=array(
                    	'post__not_in' => array(get_the_ID()),
                        'post_type' => 'cpt_173',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        'posts_per_page' => 6,
                        'orderby' => 'rand'
                    );  
                    $my_query_nb = new wp_query($args_nb);
                ?>
                <?php if ( $my_query_nb->have_posts() ): ?>
					<?php $index = 1; ?> 
                    <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
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
	</section>
	<section class="new-archi">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="left">
						<div class="title"><h2>Tin tức</h2></div>
						<div class="link-new-ar text-uppercase">
							<ul> 
								<?php 
			                        $args_nb=array(
			                            'post_type' => 'post',
			                            'orderby'   => 'publish_date',
			                            'order'     => 'DESC',
			                            'posts_per_page' => 6,
			                        );  
			                        $my_query_nb = new wp_query($args_nb);
			                    ?>
			                    <?php $i = 0; ?>
			                    <?php if ( $my_query_nb->have_posts() ): ?>
			                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
			                            <?php $i++ ?>
			                            <li><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?><img src="<?php echo __BASE_URL__; ?>/images/circle-right.png" class="img-fluid" alt=""></a></li>
			                        <?php endwhile ?>
			                    <?php endif;wp_reset_query(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-right">
					<div class="avarta"><img src="<?php echo __BASE_URL__; ?>/images/new-ar.png" class="img-fluid" alt=""></div>
				</div>
			</div>
		</div>
	</section>
</main>  

<?php get_footer() ?>    