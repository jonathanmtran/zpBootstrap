<?php
/**
 * Form for registering users
 */
?>
	<form id="mailform" class="form-horizontal" action="<?php echo sanitize($_SERVER['REQUEST_URI']); ?>" method="post" autocomplete="off">
		<input type="hidden" name="register_user" value="yes" />

		<div class="control-group">
			<label class="control-label" for="admin_name"><?php echo gettext("Name:"); ?></label>
			<div class="controls">
				<input type="text" id="admin_name" name="admin_name" class="input-large" value="<?php echo html_encode($admin_n); ?>" size="22" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="adminuser"><?php if (getOption('register_user_email_is_id')) echo gettext("Email:"); else echo gettext("User ID:"); ?></label>
			
			<div class="controls">
				<input type="text" id="adminuser" name="adminuser" class="input-large" value="<?php echo html_encode($user); ?>" size="22" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="password"><?php echo gettext("Password:"); ?></label>
			<div class="controls">
				<input type="password" id="password" name="adminpass" class="input-large" value="" size="23" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="adminpass_2"><?php echo gettext("Re-enter:"); ?></label>
			<div class="controls">
				<input type="password" id="adminpass_2" name="adminpass_2" class="input-large" value="" size="23" />
			</div>
		</div>

		<?php $msg = $_zp_authority->passwordNote(); if (!empty($msg)) echo $msg; ?>
			
		<?php if (!getOption('register_user_email_is_id')) { ?>
		<div class="control-group">
			<label class="control-label" for="admin_email"><?php echo gettext("Email:"); ?></label>
			<div class="controls">
				<input type="text" id="admin_email" name="admin_email" class="input-large" value="<?php echo html_encode($admin_e); ?>" size="22" />
			</div>
		</div>
		<?php } ?>
		
		<?php $html = zp_apply_filter('register_user_form', ''); if (!empty($html)) echo $html; ?>

		<?php if (getOption('register_user_captcha')) { ?>
		<div class="control-group">
			<?php $captcha = $_zp_captcha->getCaptcha(); ?>
			<label class="control-label" for="code">
				<?php echo gettext("Enter CAPTCHA:"); ?>
			</label>
			<div class="controls">
				<?php
				if (isset($captcha['html']) && isset($captcha['input'])) echo $captcha['html'];
				if (isset($captcha['input'])) {
					echo $captcha['input'];
				} else {
					if (isset($captcha['html'])) echo $captcha['html'];
				}
				if (isset($captcha['hidden'])) echo $captcha['hidden'];
				?>
			</div>
		</div>
		<?php } ?>

		<div id="contact-submit" class="form-actions">
			<input class="btn btn-inverse" type="submit" value="<?php echo gettext('Submit') ?>" />
		</div>

		<?php if (function_exists('federated_login_buttons')) { ?>
		<fieldset id="Federated_buttons_fieldlist">
			<legend><?php echo gettext('You may also register using federated credentials'); ?></legend>
			<?php federated_login_buttons(WEBPATH.'/index.php'); ?>
		</fieldset>
		<?php } ?>

	</form>