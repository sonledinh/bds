<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garden
 */

?>

<footer style="background: url('<?php echo __BASE_URL__; ?>/images/bn-footer.png') no-repeat center;background-size: cover;">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="item-ft">
						<div class="logo"><a href=""><img src="<?php echo get_field('logo','option')['url']; ?>" class="img-fluid" alt=""></a></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="title-ft"><?php echo the_field('title_fter_1','option'); ?></div>
						<div class="desc">
							<?php echo the_field('desc_fter_1','option'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="title-ft"><?php echo the_field('title_fter_2','option'); ?></div>
						<div class="desc">
							<?php echo the_field('desc_fter_1','option'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="title-ft"><?php echo the_field('title_fter_3','option'); ?></div>
						<div class="desc">
							<?php echo the_field('desc_fter_1','option'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bott">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<div class="title-ft">Thông tin DỰ ÁN</div></div>
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="item-ft">
						<ul>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<ul>
							<li>Lorem ipsum</li> 
							<li>Lorem ipsum</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<ul>
							<li>Lorem ipsum</li>
							<li>Lorem ipsum</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
