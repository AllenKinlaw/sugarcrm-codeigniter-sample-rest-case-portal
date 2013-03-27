<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com
?>

<div class="container">
	<div class="hero-unit">
		<?php $this->load->view('menubar', array('active' => 'main/support')); ?>

		<h2>Submit a Support Ticket</h2>
		<p>Submit your support with the form below.</p>
		<p>Our Support team will get back to you within one hour.</p>
		<hr />	
		<form class='form-vertical' method='post' action='<?php echo site_url('main/support');?>' >	
			
			<?php echo validation_errors('<p class="text-error">', '</p>'); ?>

			<div class='control-group'>
				* <input class='input-xlarge' type='text' value='<?php echo set_value('number');?>' name='number' placeholder='Customer # (eg: PLATINUM99999)'>
			</div>
			<div class='control-group'>
				* <input class='input-xxlarge' type='text' value='<?php echo set_value('name');?>' name='name' placeholder='Ticket Summary'>
			</div>
			<div class='control-group'>
				* <textarea class='input-xxlarge' rows='6' name='description' placeholder='Detailed explanation of the issue you are experiencing'><?php echo set_value('description');?></textarea>
			</div>

			<div class='form-actions'>
				<button class='btn btn-primary' type='submit'>Submit Ticket</button>
			</div>

		</form>
	</div>
</div>
