<?php /* Template Name: about */ ?>
<?php get_header(); ?>

<main>
	<section class="box-about" style="background: url('<?php echo __BASE_URL__; ?>/images/bn-about.png') no-repeat center; background-size: cover;">
		<div class="container">
			<div class="about-top">
				<div class="title-pg">
					<h2 class="f-play"><?php echo the_field('title_about') ?></h2> 
				</div>
				<div class="info-ab-top">
					<div class="row">
						<div class="col-md-6">
							<div class="desc">
								<?php echo the_field('box_about_1') ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="avarta"><img src="<?php echo get_field('avar_about')['url'] ?>" class="img-fluid w-100" alt=""></div>
						</div>
					</div>
				</div>
			</div>
			<div class="about-bott">
				<div class="row">
					<div class="col-md-3">
						<div class="logo-ab"><img src="<?php echo get_field('logo_about')['url'] ?>" class="img-fluid" alt=""></div>
					</div>
					<div class="col-md-9">
						<div class="desc">
							<?php echo the_field('box_about_2') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>   