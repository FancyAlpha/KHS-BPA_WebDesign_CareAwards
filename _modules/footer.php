<!-- Footer Setcion -->
<footer>
	<div class="container">
		<div class="row navigation">
			<div class="footer-item">
				<h4>
					<a href="<?=$rel_url?>Service-Learning-Awards/index.php">
						<?=$award1DropdownLabel?>
					</a>
				</h4>
				<?php 
		foreach($award1DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>

			<div class="footer-item">
				<h4>
					<a href="<?=$rel_url?>Special-Recognition-Awards/index.php">
						<?=$award2DropdownLabel?>
					</a>
				</h4>
				<?php 
		foreach($award2DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>

			<div class="footer-item">
				<h4>
					<a href="<?=$rel_url?>Professional-Awards/index.php">
						<?=$award3DropdownLabel?>
					</a>
				</h4>
				<?php 
		foreach($award3DropdownContents as $link)
			echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
		?>
			</div>
		</div>

		<div class="row about">
			<div class="footer-item">
				<p>
					Taraka Pranav Rayudu<br> Carter Watson<br> John Rangel<br> Bryson Smith
				</p>
			</div>

			<div class="footer-item">
				<p>Chapter: 02-0478</p>
				<p>Keller High School<br> Keller, Texas</p>
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<p>Having trouble with BPA Cares Award? Visit our <a href="http://www.bpa.org/service/caresfaq" class="link">Frequently Asked Questions page.</a></p>

		<h4 class="policy-header">Non-Discrimination Policy</h4>
		<p>It is the policy of Business Professionals of America that no person on the basis of race, color, religion, national origin or ancestry, age, sex, marital status, sexual orientation, or disability shall be discriminated against, excluded from participation in, denied the benefits of, or otherwise be subjected to, discrimination in any program or activity for which it is responsible.
		</p>

	</div>

	<div class="copyright">
		<p class="container">Part of the content for this site has been obtained from <a href="http://www.bpa.org/service/bpacares" class="link">The BPA Cares website.</p>
	</div>
</footer>
