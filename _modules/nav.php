<!-- NOTICE: always use <//?=$rel_url?> withought the // when linking!

<!-- nav Setcion -->
<?php
$award1DropdownLabel = "Professional Awards";
$award2DropdownLabel = "Service Learning Awards";
$award3DropdownLabel = "Special Recognition Awards";

//2d array magic
$award1DropdownContents  = array(array("Community Serivce Award", "#"),
								array("Environmental Action/Awareness Award", "#"),
								array("Safety Awareness Award", "#"),
								array("Service Learning Individual Award", "#"),
								array("Special Olympics Award", "#"));

$award2DropdownContents  = array(array("BPA Marketing and Public Relations", "#"),
								array("BPA Merit Scholar", "#"),
								array("Chapter Activities Award of Excellence", "#"),
								array("Recruiter of the Year Award", "#"),
								array("Membership Explosion Award", "#"),
								array("Social Media Award", "#"),
								array("The Professional Cup", "#"));

$award3DropdownContents = array(array("Advisor of the Year Award", "#"),
								array("Emerging Advisor of the Year Award", "#"),
								array("Emerging Professional of the Year Award", "#"),
								array("Hall of Fame Award", "#"),
								array("Outstanding Service Award", "#"),
								array("Student of the Year", "#"));

?>

	<nav>
		<div class="container">
			<img src="<?=$rel_url?>_assets/headerLogo.png" alt="BPA Logo with tagline">
			<div>
				<!-- First dropdown -->
				<div class="dropdown">
					<div class="aBtn award1ddbtn">
						<?=$award1DropdownLabel?>
					</div>
					<!-- links here -->
					<div class="dropdown-content">
						<?php 
						foreach($award1DropdownContents as $link)
							echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
						?>
					</div>
				</div>
				
				<!-- Second dropdown -->
				<div class="dropdown">
					<div class="aBtn award2ddbtn">
						<?=$award2DropdownLabel?>
					</div>
					<!-- links here -->
					<div class="dropdown-content">
						<?php 
						foreach($award2DropdownContents as $link)
							echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
						?>
					</div>
				</div>
				
				<!-- Third dropdown -->
				<div class="dropdown">
					<div class="aBtn award3ddbtn">
						<?=$award3DropdownLabel?>
					</div>
					<!-- links here -->
					<div class="dropdown-content">
						<?php 
						foreach($award3DropdownContents as $link)
							echo "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
						?>
					</div>
				</div>
			</div>
		</div>
	</nav>
