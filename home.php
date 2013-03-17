<?php include('inc_header.php'); ?>

	<!-- wrap -->
		<!-- container -->
			<!-- header -->
				<h3><?php printGalleryTitle(); ?></h3>
			</div> <!-- /header -->

			<div class="row">
				<?php if (($_zp_gallery->getNumImages(true)) > 0) { ?>
				<div class="span10 offset1">
					<div class="flexslider">
						<?php printRandomImages(5, 'slides', 'all', '' , 780, 400, true); ?>
					</div>
				</div>
				<?php } else { ?>
				<div class="span10 offset1">
					<div class="flexslider">
						<img src="<?php echo $_zp_themeroot; ?>/images/placeholder.jpg">
						<p class="flex-caption center"><?php echo gettext('Slideshow'); ?></p>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="row site-description">
				<?php
				if ((function_exists('printLatestNews')) && ((getNumNews()) > 0)) {
					$col1 = 'span6 offset1';
				} else {
					$col1 = 'span8 offset2';
				}
				?>
				<div class="<?php echo $col1 ?>">
					<h3><?php echo gettext('Home'); ?></h3>
					<div><?php printGalleryDesc(); ?></div>
				</div>
				<?php if ((function_exists('printLatestNews')) && ((getNumNews()) > 0)) { ?>
				<div class="span5">
					<h3><?php echo gettext_th('Latest news', 'zpBootstrap'); ?></h3>
					<?php printLatestNews( 1, 'none', '', true, true, 200, false); ?>
				</div>
				<?php } ?>
			</div>

<?php include('inc_footer.php'); ?>