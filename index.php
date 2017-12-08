<!DOCTYPE html>
<html>
<?php $title = 'cool title'; include('modules/head.php'); ?>

<body>
	<?php include('modules/nav.php'); ?>
	<header> <!-- Normally, even this would be included as a seperate file (using some php magic; Just like I used the title variable that can be custom-set for every page while still using the same import) so don't take it for what it is! -->
		</h1>Fancy header Stuff</h1>
	</header>

	<main> <!-- if you were to use a single php file for each webpage, content between tag is the only one that matters -->
		<p>Some body stuff</p>
	</main>

	<!-- Wait a second!
	What if you were to use a variable for each piece of text, and then use that variable inside another file? It is the perfect combination of php and markdown, except there is no markdown -->

	<!-- Example:
	top each sub-page php file:
	$title =  'something'
	$body = 'body'
	$extra_text = 'text'

	import(template_file) //where the variables would be used

	inside the template file:
	<!AllRequiredTags></>

	<h1>$title</h1> //each var needs the php tag around it, but I ommited it for simplicity
	<p>$body</p> //all of these variables were declared in another file, but since I imported this to the other file, they are shared
	<p>$extra_text</p> //this is a whole new way of content management. Unfortunately, markdown plus is not enough to design a whole site. The best method is probably this.
-->

<!--
We could also read a md file to get the content of the page, using JavaScript or PHP

So
-Header
-Content -- read from MD reader
-Footer

Is the page organization
-->

	<?php include('modules/footer.php'); ?>
</body>
</html>
