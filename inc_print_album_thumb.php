			<div class="album-wrap">
				<ul class="thumbnails">
					<?php while (next_album()) { ?>
					<li class="span4 album-thumb">
						<a class="thumbnail" rel="tooltip" href="<?php echo html_encode(getAlbumLinkURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php echo getBareAlbumTitle() . '<br>'; ?><?php printAlbumDesc(true); ?>">
							<?php printCustomAlbumThumbImage(getBareAlbumTitle(), NULL, getOption(personnal_thumb_width), getOption(personnal_thumb_height), getOption(personnal_thumb_width), getOption(personnal_thumb_height), NULL, NULL, 'remove-attributes'); ?>
						</a>
						<h4>
							<a href="<?php echo html_encode(getAlbumLinkURL()); ?>" title="<?php echo gettext('View album:'); ?> <?php echo getBareAlbumTitle(); ?>">
								<?php printAlbumTitle(); ?>
							</a>
						</h4>
					</li>
					<?php } ?>
				</ul>
				<script type="text/javascript">
					$('.thumbnail').tooltip({
						placement: 'bottom'
					});
				</script>
			</div>