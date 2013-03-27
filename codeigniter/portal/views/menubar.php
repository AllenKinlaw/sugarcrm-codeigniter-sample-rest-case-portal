<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com
?>

<div class="subnav" style="margin-bottom: 10px;">
	<ul class="nav nav-pills">
		<li <?php if($active == 'main') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo site_url() ?>">Our Hosting</a>
		</li>
		<li <?php if($active == 'main/status') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo site_url('main/status') ?>">Status Page</a>
		</li>
		<li <?php if($active == 'main/support') : ?>class="active"<?php endif; ?>>
			<a href="<?php echo site_url('main/support') ?>">Get Support Now!</a>
		</li>
	</ul>
</div>
