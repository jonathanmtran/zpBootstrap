						<div class="post clearfix">
							<div class="post-date">
								<span class="month"><?php echo strftime('%b', strtotime($_zp_current_zenpage_news->getDateTime())); ?></span>
								<span class="day"><?php echo strftime('%d', strtotime($_zp_current_zenpage_news->getDateTime())); ?></span>
								<span class="year"><?php echo strftime('%Y', strtotime($_zp_current_zenpage_news->getDateTime())); ?></span>
							</div>
							<h3 class="post-title"><?php printNewsTitleLink(); ?></h3>
							<div class="post-meta"><?php printNewsCategories('', '', 'nav nav-label'); ?></div>
							<div class="post-content clearfix">
								<?php
								printNewsContent();
								if (is_NewsArticle()) {
									printCodeblock(1);
								}
								?>
							</div>
						</div>