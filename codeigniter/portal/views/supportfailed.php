<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com
?>

<div class="container">
	<div class="hero-unit">
		<?php $this->load->view('menubar', array('active' => 'main/support')); ?>

		<h2>Customer Number Not Found!</h2>
		<p>Your support Ticket has NOT been submitted successfully.</p>
		<p>Your customer number <strong>#<?php echo $number; ?></strong> does not appear to be valid.</p>
	</div>
</div>
