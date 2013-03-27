<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com
?>

<div class="container">
	<div class="hero-unit">
		<?php $this->load->view('menubar', array('active' => 'main/support')); ?>

		<h2>Support Ticket Submitted!</h2>
		<p>Dear Customer,</p>
		<p>Your support Ticket has been submitted successfully.</p>
		<p>Your Ticket number is <strong>#<?php echo $case_number; ?></strong></p>
		<br/>
		<p>We will get back to you shortly.</p>
	</div>
</div>
