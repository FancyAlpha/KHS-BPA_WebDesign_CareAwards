<!-- NOTICE: always use <//?=$rel_url?> withought the // when linking!-->

<!-- nav Section -->
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



foreach($award1DropdownContents as $link)
{
    $award1List = $award1List . "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
}

foreach($award2DropdownContents as $link)
{
    $award2List = $award2List . "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
}

foreach($award3DropdownContents as $link)
{
    $award3List = $award3List . "<a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a>";
}

if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) {
$navbarContents = "
	<nav>
		<div class=\"container-mobile\">
			<div>
				<div class=\"dropdown-mobile\">
					<div class=\"aBtn award1ddbtn\">
						<img src=\"$rel_url/_assets/dropdownIcon.png\" alt=\"Dropdown\">
					</div>
					<div class=\"dropdown-content-mobile\">
                        <div class=\"mobile-menu\">
                        <div>
                        <h3>$award1DropdownLabel</h3>
                        $award1List
                        </div>
                        <div>
                        <h3>$award2DropdownLabel</h3>
                        $award2List
                        </div>
                        <div>
                        <h3>$award3DropdownLabel</h3>
                        $award3List
                        </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</nav>";
}

else {
$navbarContents = "
	<nav>
		<div class=\"container\">
			<img src=\"$rel_url/_assets/headerLogo.png\" alt=\"BPA Logo with tagline\">
			<div>
				<div class=\"dropdown\">
					<div class=\"aBtn award1ddbtn\">
						$award1DropdownLabel
					</div>
					<div class=\"dropdown-content\">
						$award1List
					</div>
				</div>

				<div class=\"dropdown\">
					<div class=\"aBtn award2ddbtn\">
						$award2DropdownLabel
					</div>
					<div class=\"dropdown-content\">
						$award2List
					</div>
				</div>

				<div class=\"dropdown\">
					<div class=\"aBtn award3ddbtn\">
						$award3DropdownLabel
					</div>
					<div class=\"dropdown-content\">
						$award3List
					</div>
				</div>
			</div>
		</div>
	</nav>";
}

	echo "$navbarContents";
	?>
