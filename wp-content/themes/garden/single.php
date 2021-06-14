<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package garden
 */

get_header();
?>

<main>
	<section class="new-detail">
		<div class="title-pg title-line">
			<div class="container">
				<h1><?php the_title(); ?> <span>Architecture</span></h1>
			</div>
		</div>
		<div class="avart-detail"><img src="<?php echo __BASE_URL__; ?>/images/avr-detail.png" class="img-fluid w-100" alt=""></div>
		<div class="content-detail">
			<div class="container">
				<div class="detail">
					<div class="date text-uppercase"><span><?php echo the_author_meta( 'user_nicename', $post->post_author ); ?></span> on <?php echo get_the_date('d/m/Y'); ?></div>
					<!-- <div class="description">
						One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The same is true as we experience the emotional sensation of stress  I knew everything…been there, done that. She was in the moment,  in the past. She was mindful. I was mindless.
					</div> -->
					<div class="info-detail">
						<?php echo the_content() ?>
					</div>

					<div class="tags">
						<ul class="list-inline">
							<li class="list-inline-item"><strong>TAGS</strong></li>
							<?php
								$posttags = get_the_tags(); 
								if ($posttags) {
								  foreach($posttags as $tag) {
								?>
								<li class="list-inline-item"><a href=""><?php echo $tag->name . ' ' ?></a></li>
								<?php
								  }
								}
							?> 
						</ul>
					</div>
					<div class="share-detail">
						<ul class="list-inline">
							<li class="list-inline-item"><strong>SHARE</strong></li>
							<li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="other-news">
		<div class="title-ther">
			<div class="container">
				<h2>Bài viết liên quan</h2>
			</div>
		</div>
		<div class="slide-news-other">
			<?php 
				$the_query = new WP_Query( array ( 
						'post__not_in' => array(get_the_ID()),
						'post_type' => 'post',
					    'post_status' => 'publish',
					    'posts_per_page' => 6,
					    'orderby' => 'rand'
					) 
				);
			?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="item-slide">
					<div class="item-new-pg">
						<div class="avarta"><a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt=""></a></div>
						<div class="info">
							<div class="top text-uppercase">
								<h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
								<div class="i-right">architecture</div>
							</div>
							<div class="desc">
								<?php echo get_the_excerpt(); ?>
							</div>
							<div class="btn-more"><a href="<?php echo get_the_permalink(); ?>">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt=""></a></div>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
			<!-- <div class="item-slide">
				<div class="item-new-pg">
					<div class="avarta"><a href=""><img src="<?php echo __BASE_URL__; ?>/images/n-1.png" class="img-fluid w-100" alt=""></a></div>
					<div class="info">
						<div class="top text-uppercase">
							<h3><a href="">House in <br>Forest</a></h3>
							<div class="i-right">architecture</div>
						</div>
						<div class="desc">
							The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"  are also reproduced in their  accompanied by English 14 translation by H. Rackham.
						</div>
						<div class="btn-more"><a href="">Explore more <img src="<?php echo __BASE_URL__; ?>/images/arrow.png" class="img-fluid" alt=""></a></div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	<section class="box-comment">
		<div class="container">
			<div class="comment text-center">
				<!-- <img src="<?php echo __BASE_URL__; ?>/images/cmt.png" class="img-fluid" alt=""> -->
				<div class="comment pt-100 pb-100">
					<div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=1620283888101801&autoLogAppEvents=1" nonce="SHumFoXj"></script>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
