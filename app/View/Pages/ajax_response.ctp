<ul>
	<?php 
		foreach ($emails_listados as $email) {
			echo '<li>'. $email['Email']['email'] .'</li>'; 
			echo '<br />';
		} 
	?>
</ul>