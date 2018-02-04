<!-- NOTICE: always use <//?=$rel_url?> withought the // when linking!-->

<!-- nav Section -->
<?php
$award1DropdownLabel = "Service Learning Awards";
$award2DropdownLabel = "Special Recognition Awards";
$award3DropdownLabel = "Professional Awards";

//2d array magic
$award1DropdownContents  = array(array("Community Service Award", "Service-Learning-Awards/Community-Service-Award.php"),
								array("Environmental Action/Awareness Award", "Service-Learning-Awards/Environmental-Action-Award.php"),
								array("Safety Awareness Award", "Service-Learning-Awards/Safety-Awareness-Award.php"),
								array("Service Learning Individual Award", "Service-Learning-Awards/Individual-Award.php"),
								array("Special Olympics Award", "Service-Learning-Awards/Special-Olympics-Award.php"));

$award2DropdownContents  = array(array("BPA Marketing and Public Relations", "Special-Recognition-Awards/BPA-Marketing-and-Public-Relations.php"),
								array("BPA Merit Scholar", "Special-Recognition-Awards/BPA-Merit-Scholar.php"),
								array("Chapter Activities Award of Excellence", "Special-Recognition-Awards/Chapter-Activities-Award-of-Excellence.php"),
								array("Recruiter of the Year Award", "Special-Recognition-Awards/Recruiter-of-the-Year-Award.php"),
								array("Membership Explosion Award", "Special-Recognition-Awards/Member-Explosion-Award.php"),
								array("Social Media Award", "Special-Recognition-Awards/Social-Media-Award.php"),
								array("The Professional Cup", "Special-Recognition-Awards/The-Professional-Cup.php"));

$award3DropdownContents = array(array("Advisor of the Year Award", "Professional-Awards/Advisor-of-the-Year-Award.php"),
								array("Emerging Advisor of the Year Award", "Professional-Awards/Emerging-Advisor-of-the-Year-Award.php"),
								array("Emerging Professional of the Year Award", "Professional-Awards/Emerging-Professional-of-the-Year-Award.php"),
								array("Hall of Fame Award", "Professional-Awards/Hall-of-Fame-Fame-Award.php"),
								array("Outstanding Service Award", "Professional-Awards/Oustanding-Service-Award.php"),
								array("Student of the Year", "Professional-Awards/Student-of-the-Year-Award.php"));

$award1List = "";
$award2List = "";
$award3List = "";

foreach($award1DropdownContents as $link)
{
    $award1List .= "<span><a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a></span>";
}

foreach($award2DropdownContents as $link)
{
    $award2List .= "<span><a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a></span>";
}

foreach($award3DropdownContents as $link)
{
    $award3List .= "<span><a href=\"" . $rel_url . $link[1] . "\">" . $link[0] . "</a></span>";
}


$navbarContents1 = "
	<nav class=\"mobile\">
		
		<div class=\"container-mobile\">
			<div>
				<div class=\"dropdown-mobile\">
					<div class=\"dropdown-icon\">
						<img src=\"$rel_url"."_assets/dropdownIcon.png\" alt=\"Dropdown\">
					</div>
					<div class=\"dropdown-content-mobile\">
                        <div class=\"mobile-menu\">
                        <div>
                        <h3><a href=\"$rel_url"."Service-Learning-Awards/index.php\">$award1DropdownLabel</a></h3>
                        $award1List
                        </div>
                        <div>
                        <h3><a href=\"$rel_url"."Special-Recognition-Awards/index.php\">$award2DropdownLabel</a></h3>
                        $award2List
                        </div>
                        <div>
                        <h3><a href=\"$rel_url"."Professional-Awards/index.php\">$award3DropdownLabel</h3>
                        $award3List
                        </div>
                        </div>
					</div>
				</div>
			</div>

			<a href=\"$rel_url"."index.php\"><img src=\"$rel_url"."_assets/headerLogo.png\" class=\"logo\" alt=\"BPA Logo with tagline\" class=\"logo\"></a>

		</div>
	</nav>";

$navbarContents2 = "
	<nav class=\"desktop\">
		<div class=\"container\">
			<a href=\"$rel_url"."index.php\"><img src=\"$rel_url"."_assets/headerLogo.png\" alt=\"BPA Logo with tagline\" class=\"logo\"></a>
			<div>
				<div class=\"dropdown\">
					<div class=\"aBtn award1ddbtn\">
						<a href=\"$rel_url"."Service-Learning-Awards/index.php\">$award1DropdownLabel</a>
					</div>
					<div class=\"dropdown-content\">
						$award1List
					</div>
				</div>

				<div class=\"dropdown\">
					<div class=\"aBtn award2ddbtn\">
						<a href=\"$rel_url"."Special-Recognition-Awards/index.php\">$award2DropdownLabel</a>
					</div>
					<div class=\"dropdown-content\">
						$award2List
					</div>
				</div>

				<div class=\"dropdown\">
					<div class=\"aBtn award3ddbtn\">
						<a href=\"$rel_url"."Professional-Awards/index.php\">$award3DropdownLabel</a>
					</div>
					<div class=\"dropdown-content\">
						$award3List
					</div>
				</div>
			</div>
		</div>
	</nav>";

	echo "$navbarContents1" . "$navbarContents2";
	?>
