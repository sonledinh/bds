<?php /* Template Name: contact */ ?>
<?php get_header(); ?>

<main>
	<section class="contact">
		<div class="title-pg title-line">
			<div class="container">
				<h2><?php echo the_field('title') ?></h2>
			</div>
		</div>
		<div class="info-contact" style="background: url('<?php echo __BASE_URL__; ?>/images/bn-contact.png') no-repeat center; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="left"><img src="<?php echo get_field('logo')['url'] ?>" class="img-fluid" alt=""></div>
					</div>
					<div class="col-md-9">
						<div class="desc">
							<?php echo the_field('content_desc') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-form-contact">
			<div class="container">
				<h4 class="text-uppercase"><?php echo the_field('title_form') ?></h4>
				<div class="row">
					<div class="col-md-6">
						<div class="ctn-left">
							<div class="hotline"><a href="tel:<?php echo the_field('hotline') ?>"><?php echo the_field('hotline') ?></a></div>
							<div class="desc">
								<p><?php echo the_field('diachi') ?></p>
							</div>
							<ul>
								<li><strong>Email:</strong> <?php echo the_field('email') ?></li>
								<li>
									<strong>Follow us:</strong>
									<?php while ( has_sub_field('danh_sach' ) ) : ?>
										<a href="<?php the_sub_field( 'link_mxh' ); ?>"><i class="<?php the_sub_field( 'icon' ); ?>"></i></a>
									<?php endwhile; ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="ctn-right">
							<!-- <h4>Let's grab a coffee and jump on conversation <span>chat with us.</span></h4>
							<div class="list-form-ctn">
								<div class="item">
									<div class="row">
										<div class="col-md-6">
											<input type="text" placeholder="Name" class="txt-ctn">
										</div>
										<div class="col-md-6">
											<input type="text" placeholder="Email*" class="txt-ctn">
										</div>
										<div class="col-md-12">
											<textarea name="Message  *"></textarea>
										</div>
										<div class="col-md-6">
											<input type="submit" value="TƯ VẤN CHO TÔI" class="btn-contact">
										</div>
									</div>
								</div>
							</div> -->
							<?php echo do_shortcode('[contact-form-7 id="61" title="Form liên hệ"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="maps">
			<?php echo the_field('iframe_maps') ?>
		</div>
	</section>
</main>

<?php get_footer() ?>   