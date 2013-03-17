<?php include ('inc_header.php'); ?>

	<!-- wrap -->
		<!-- container -->
			<!-- header -->
				<h3><?php printGalleryTitle(); ?></h3>
			</div> <!-- / header -->

			<div class="breadcrumb">
				<h4>
					<?php if (getOption('zpB_homepage')) { ?>
						<?php printCustomPageURL(getGalleryTitle(), 'gallery'); ?>
					<?php } else { ?>
						<a href="<?php echo html_encode(getGalleryIndexURL()); ?>" title="<?php echo gettext('Albums Index'); ?>"><?php echo html_encode(getGalleryTitle()); ?></a>
					<?php } ?>
					<span class="divider"> &raquo; </span>
					<?php printParentBreadcrumb('', '<span class="divider"> &raquo; </span>', '<span class="divider"> &raquo; </span>'); ?>
					<?php printAlbumTitle(true); ?>
				</h4>
			</div>

			<?php if (getOption('zpB_slideshow') <> 'none') { ?>
			<ul class="pager hidden-phone pull-right">
				<li>
					<?php zpB_printSlideShowLink(gettext('Slideshow')); ?>
				</li>
			</ul>
			<?php } ?>

			<?php printPageListWithNav('&laquo;', '&raquo;', false, true, 'pagination', null, true, 7); ?>

			<div class="page-header bottom-margin-reset">
				<p><?php printAlbumDesc(true); ?></p>
			</div>

			<?php include('inc_print_album_thumb.php'); ?>

			<?php include('inc_print_image_thumb.php'); ?>

			<?php printPageListWithNav('&laquo;', '&raquo;', false, true, 'pagination', null, true, 7); ?>

			<?php include('inc_print_comment.php'); ?>

<?php include ('inc_footer.php'); ?>