<!-- Footer Setcion -->
<footer>
	<div class="container">
		<div class="navigation">
			<div class="footer-item">
				<h3><?=$award1DropdownLabel?></h3>
				<?php 
		foreach($award1DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>

			<div class="footer-item">
				<h3><?=$award2DropdownLabel?></h3>
				<?php 
		foreach($award2DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>

			<div class="footer-item">
				<h3><?=$award3DropdownLabel?></h3>
				<?php 
		foreach($award3DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>
		</div>

		<div class="about">
			<h3>Made by: </h3>
<pre>Authors: John P Rangel
	      Carter Watson
	      Bryson Smith
	      Pranav Rayudu</pre>

			<p>Charter: </p>
			<p>School?</p>
			<p>Something else</p>
		</div>
	</div>
	<div class="copyright"><p class="container">&copy; Made by the KHS BPA Web Design Team 2017-18</p></div>
</footer>
