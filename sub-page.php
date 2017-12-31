<!Doctype html>
<html>
<?php
	$rel_url = "../";
	require($rel_url . "_modules/head.php"); ?>
	<body>
		<?php require($rel_url . "_modules/nav.php"); ?>
		<!----
		<header>
			<h1>//<?=$heading?></h1>
			<p>//<?=$sub_heading?></p>
		</header>

		<main>
			<p>//<?=$para?></p>
		</main>
		--->
		
		<h1>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et risus quis arcu scelerisque pulvinar.
        </h1>
        <div class="flex-container">
            <div>
                <h4><?=$sub-heading1?></h4>
                <p><?=$para1?></p>
                <h4><?=$sub-heading2?></h4>
                <p><?=$para2?></p>
            </div>
            <div style="flex: 0 0 200px">
                <h4>?=$sub-heading3?></h4>
                <ul>
                    <li><?=$1li1?></li>
                    <li><?=$1li2?></li>
                    <li><?=$1li3?></li>
                    <li><?=$1li4?></li>
                    <li><?=$1li5?></li>
                    <li><?=$1li6?></li>
                </ul>
            </div>
            <div>
                <h4><?=$sub-heading4?></h4>
                <p><?=$para3?></p>
                <h4><?=$sub-heading5?></h4>
                <p><?=$para4?></p>
            </div>
        </div>
        
            <div class = "flex-container">
                <div>
                <h4><?=$sub-heading6?></h4>
                <p><?=$para5?></p>
                </div>
                
                <div>
                <h4><?=$sub-heading7?></h4>
                <ul>
                    <li><?=$2li1?></li>
                    <li><?=$2li2?></li>
                    <li><?=$2li3?></li>
                    <li><?=$2li4?></li>
                </ul>
                </div>
                </div>
                <h4><?=$sub-heading8?></h4>
                <p><?=$para6?></p>
		<?php require("../_modules/footer.php"); ?>
	</body>
</html>
