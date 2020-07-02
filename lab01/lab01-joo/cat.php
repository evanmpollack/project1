<!doctype html>
<html lang="en">

<head> 
	<meta charset="utf-8">
	<title>Joo Eon Park - My Cat</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<link rel="stylesheet" href="sss/sss.css">
</head>

<body>

	<?php include "inc/nav.php"; ?>

	<div class="container">

		<header>
			<h1>My Cat</h1>
			<div class="slider">
				<img src="images/cat.png" alt="cat_in_hole">
				<img src="images/cat_face.png" alt="cat_closeup">
				<img src="images/cat_stand.jpg" alt="cat_sitting">
				<img src="images/cat_angry.jpg" alt="angry_cat">
			</div>
			<p>Pictures of Haku.</p>
		</header>

		<main>
			<p>My cat's name is Haku. She is named after the character from the film, <em>Spirited Away</em>. 
			<p>Story: We named our cat after Haku from the film because we thought he had blue eyes, just like our cat. Turns out he doesn't...</p>
			<p>She is a 9 year old Siamese cat, though she will be turning 10 on July 15. She's needy and is sometimes an ass (as cats typically are), but she is quite cute nonetheless.</p>
			<p>&lt;-- Here are some pictures of Haku!</p>
		</main>

	</div> <!-- container -->

	<?php include "inc/scripts.php"; ?>

	<script src="sss/sss.js"></script>
	<script>
		$('.slider').sss();
	</script>

</body>