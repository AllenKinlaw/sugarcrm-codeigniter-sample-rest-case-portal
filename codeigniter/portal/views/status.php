<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

// Enrico Simonetti
// 2013-03-16
// http://enricosimonetti.com
?>

<div class="container">
	<div class="hero-unit">
		<?php $this->load->view('menubar', array('active' => 'main/status')); ?>

		<h2>Service Status and Announcements Page</h2>
		
		<?php
			// output cases

			if(!empty($cases))
			{
				foreach($cases as $case)
				{
					echo '<h3>'.$case['name'].'</h3>';

					if(!empty($case['description']))
					{
						echo '<p>'.nl2br(html_entity_decode($case['description'])).'</p><hr/>';
					}
				}
			}
			else
			{
				?>
					<p>There are no current Announcements</p>
				<?php
			}
		?>
	</div>
</div>
