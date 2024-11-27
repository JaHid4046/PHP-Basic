<ul>
	<?php 
		foreach ($navItems as $item) {
			echo "<li><a href=\"$item[menu_bar]\">$item[title]</a></li>";
		}
	?>
</ul>
