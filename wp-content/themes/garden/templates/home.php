<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<style>
	.header-top {
	    background: transparent;
	}

	.header-top .logo a {
	    background: #15100de6;
	}

	.btn-bar img {
	    background: #15100db3;
	}
	main {
		padding-top: 0;
	}
</style>


<main>
	<section class="box-1">
		<div class="avarta cover-banner"><img src="<?php echo get_field('banner-top')['url'] ?>" class="img-fluid w-100" alt=""></div>
		<div class="info">
			<div class="container">
				<div class="caption">
					<div class="info-cap">
						<h2 class="f-play titl-grad"><img src="<?php echo get_field('avr_title')['url'] ?>" class="img-fluid" alt=""></h2>
						<h3 class="f-play"><?php echo the_field('text_title') ?></h3>
						<div class="desc">
							<?php echo the_field('desc_banner') ?>
						</div>
						<div class="btn-grad"><a href="<?php echo the_field('link-tvan') ?>">Tư vấn cho tôi <img src="<?php echo __BASE_URL__; ?>/images/border.png" class="img-fluid" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro-video"><a href="<?php echo the_field('link_video') ?>"><img src="<?php echo __BASE_URL__; ?>/images/intro.png" class="img-fluid" alt=""></a></div>
	</section>
	<section class="box-2">
		<div class="avarta cover-banner"><img src="<?php echo get_field('banner_box_2')['url'] ?>" class="img-fluid w-100" alt=""></div>
		<div class="info-box-2">
			<div class="container">
				<h2 class="f-play titl-grad"><img src="<?php echo get_field('avr-title_2')['url'] ?>" class="img-fluid" alt=""></h2>
				<div class="t-top f-play"><span>Quy mô</span></div>
				<div class="desc-box-2">
					<div class="row">
						<div class="col-md-6">
							<div class="desc">
								<?php echo the_field('sort_1') ?>
							</div>
						</div>
						<div class="col-md-6 text-right">
							<div class="desc ml-auto">
								<?php echo the_field('sort_2') ?>
							</div>
						</div>
					</div>
					</div>
				<div class="btn-grad text-right"><a href="<?php echo the_field('link_bn_2') ?>">Tư vấn cho tôi <img src="<?php echo __BASE_URL__; ?>/images/border.png" class="img-fluid" alt=""></a></div>
			</div> 
		</div>
	</section>
	<section class="box-3" style="background: url('<?php echo __BASE_URL__; ?>/images/bn-prev.png') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="slide-tab">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="preview">
							<div class="slider-for">
								<?php while ( has_sub_field('avr_slide' ) ) : ?>
									<div class="carousel-item">
	                                    <img class="" src="<?php echo get_sub_field( 'danh_sach_slide' )['url']; ?>" class="img-fluid" width="100%" alt="Third slide">
	                                </div>
								<?php endwhile; ?>
                            </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-prev">
							<!-- <h2 class="titl-grad f-play"><img src="<?php echo __BASE_URL__; ?>/images/title-2.png" class="img-fluid" alt=""></h2>  -->
							<h2 class="titl-grad f-play"><?php echo the_field('title_slide') ?></h2>
							<div class="desc">
								<?php echo the_field('desc_slide') ?>
							</div>
							<div class="prev-slide">
								<div class="slider-nav">
									<?php while ( has_sub_field('avr_slide' ) ) : ?>
										<div class="clc">
		                                 	<div class="item"><img class="" src="<?php echo get_sub_field( 'danh_sach_slide' )['url']; ?>" width="100%" alt="Third slide"></div>
		                                </div>
									<?php endwhile; ?>
	                            </div>
							</div>
							<div class="btn-grad"><a href="<?php echo the_field('link_slide') ?>">Tư vấn cho tôi <img src="<?php echo __BASE_URL__; ?>/images/border.png" class="img-fluid" alt=""></a></div>
						</div>
					</div>
				</div>
			</div>
		</div> 
	</section>
	<section class="box-video">
		<div class="avarta"><img src="<?php echo get_field('banner_video')['url'] ?>" class="img-fluid w-100" alt=""></div>
		<div class="clc-video text-center">
			<a href="javascript:void(0)">
				<svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M51 0.375C40.9873 0.375 31.1995 3.3441 22.8743 8.90685C14.549 14.4696 8.06031 22.3761 4.22862 31.6267C0.396935 40.8772 -0.605609 51.0562 1.34777 60.8764C3.30114 70.6967 8.12271 79.7172 15.2027 86.7973C22.2828 93.8773 31.3033 98.6989 41.1236 100.652C50.9439 102.606 61.1229 101.603 70.3734 97.7714C79.6239 93.9397 87.5304 87.451 93.0932 79.1257C98.6559 70.8005 101.625 61.0127 101.625 51C101.61 37.5781 96.2713 24.7102 86.7806 15.2194C77.2898 5.72869 64.422 0.390136 51 0.375ZM51 90.375C43.2124 90.375 35.5996 88.0657 29.1244 83.7391C22.6493 79.4125 17.6025 73.263 14.6223 66.0682C11.6421 58.8733 10.8623 50.9563 12.3816 43.3183C13.9009 35.6803 17.651 28.6644 23.1577 23.1577C28.6644 17.651 35.6803 13.9009 43.3183 12.3816C50.9563 10.8623 58.8733 11.642 66.0682 14.6222C73.263 17.6024 79.4126 22.6492 83.7391 29.1244C88.0657 35.5996 90.375 43.2124 90.375 51C90.3631 61.4392 86.2109 71.4475 78.8292 78.8292C71.4475 86.2108 61.4393 90.3631 51 90.375ZM69.75 51C69.7501 51.9044 69.532 52.7955 69.1144 53.5977C68.6968 54.3999 68.0919 55.0896 67.351 55.6083L48.601 68.7333C47.758 69.3234 46.7693 69.671 45.7425 69.7382C44.7156 69.8055 43.6901 69.5897 42.7773 69.1145C41.8646 68.6393 41.0998 67.9228 40.566 67.0431C40.0322 66.1633 39.75 65.154 39.75 64.125V37.875C39.75 36.846 40.0322 35.8367 40.566 34.9569C41.0998 34.0772 41.8646 33.3607 42.7773 32.8855C43.6901 32.4103 44.7156 32.1945 45.7425 32.2618C46.7693 32.329 47.758 32.6766 48.601 33.2667L67.351 46.3917C68.0919 46.9104 68.6968 47.6001 69.1144 48.4023C69.532 49.2045 69.7501 50.0956 69.75 51Z" fill="white"/>
				</svg>
			</a>
		</div>
	</section>
	<section class="box-news" style="background: url('<?php echo __BASE_URL__; ?>/images/bn-news.png') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="title text-center"><h2 class="f-play">Tin tức</h2></div>
			<div  class="list-news">
				<div class="row"> 
					<?php 
                        $args_nb=array(
                            'post_type' => 'post',
                            'orderby'   => 'publish_date',
                            'order'     => 'DESC',
                            'posts_per_page' => 3,
                        );  
                        $my_query_nb = new wp_query($args_nb);
                    ?>
                    <?php $i = 0; ?>
                    <?php if ( $my_query_nb->have_posts() ): ?>
                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
                            <?php $i++ ?>
                            <div class="col-md-4">
								<div class="item-news">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										<div class="i-news">
											<ul class="list-inline">
												<li class="list-inline-item"><a href=""><img src="<?php echo __BASE_URL__; ?>/images/i-1.png" class="img-fluid" alt=""><span>Tin tức</span></a></li>
												<li class="list-inline-item"><a href=""><img src="<?php echo __BASE_URL__; ?>/images/i-2.png" class="img-fluid" alt=""><span>3 Comments </span></a></li>
											</ul>
										</div>
										<div class="desc">
											<?php echo get_the_excerpt(); ?>
										</div>
									</div>
								</div>
							</div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
				</div>
			</div>
			<div class="content-comm">
				<div class="row align-items-center">
					<div class="col-md-5">
						<div class="left">
							<div class="title">
								<h2 class="f-play mb-0">Cam kết</h2>
								<h4>Của chúng tôi </h4>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="list-comm text-right">
							<ul class="list-inline">
								<?php while ( has_sub_field('danh_sach' ) ) : ?>
									<li class="list-inline-item">
										<div class="item-comm">
											<div class="icon"><img src="<?php echo get_sub_field( 'icon_ck' )['url']; ?>" class="img-fluid" alt=""></div>
											<div class="info">
												<h3><?php the_sub_field( 'title_ck' ); ?></h3>
												<div class="desc">
													<?php the_sub_field( 'desc_ck' ); ?>
												</div>
											</div>
										</div>
									</li> 
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-form">
		<div class="avarta-form"><img src="<?php echo __BASE_URL__; ?>/images/avr-form.png" class="img-fluid" alt=""></div>
		<div class="container">
			<div class="row"> 
				<div class="col-md-7">
					<div class="text-form">
						 <div class="title">
						 	<h4 class="f-play">GIA NHẬP CỘNG ĐỒNG AMY GARDEN</h4>
						 	<h2 class="f-play">Ngay hôm nay!</h2>
						 </div>
						 <!-- <div class="content-form">
						 	<div class="item">
						 		<span>Họ và tên</span>
						 		<input type="text" class="txt-inp">
						 	</div>
						 	<div class="item">
						 		<span>Số điện thoại</span> 
						 		<input type="text" class="txt-inp">
						 	</div>
						 	<div class="item">
						 		<span>Email</span>
						 		<input type="text" class="txt-inp">
						 	</div>
						 	<div class="item">
						 		<ul class="list-inline">
						 			<li class="list-inline-item"><span>Bạn quan tâm đến loại hình đầu tư nào?</span></li>
						 			<li class="list-inline-item"><input type="checkbox" id="1001"><label for="1001">Nhà ở</label></li>
						 			<li class="list-inline-item"><input type="checkbox" id="1002"><label for="1002">Đầu tư</label></li>
						 		</ul>
						 	</div>
						 	<div class="item">
						 		<input type="checkbox" id="1003"><label for="1003">Đăng ký nhận thông tin, thông báo qua email</label>
						 	</div>
						 	<div class="item">
						 		<span>Yên cầu bổ sung</span>
						 		<textarea name="" id="" cols="30" rows="10"></textarea>
						 	</div>
						 	<div class="item">
						 		<div class="btn-grad"><input type="submit" value="Tư vấn cho tôi" class="btn-grad"></div>
						 	</div>
						 </div> -->
						 <?php echo do_shortcode('[contact-form-7 id="162" title="Form đăng ký"]'); ?>
					</div>
				</div>
			</div>
		</div> 
	</section>
</main>


<?php get_footer() ?>   
<script>
	$(document).ready(function(){
       $(window).bind('scroll', function() {
             if ($(window).scrollTop() > 1) {
                 $('.header-top').addClass('fixed');
             }
             else {
                 $('.header-top').removeClass('fixed');
             }
        });
    });
</script>