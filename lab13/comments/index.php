<?php
// Include files for CSV storage
include("includes/csvStorage.php");

// Load the comments file
$csvFile = csvGetFile('data/comments.csv');

// Create an array for the comments
$comments = array();

// get the comments
foreach($csvFile as $row) {
	array_push($comments, $row);
}

// If there was a submitted comment
$submit = $_POST["submit"];
if (isset($submit)) {
	$name = htmlspecialchars($_POST["name"]);
	$commentText = htmlspecialchars($_POST["comment"]);

	// create an array with the comment's information
	$newComment = array($name, $commentText);

	// add the new comment to the comment list so it is displayed
	// technically not necessary once we add the redirect below,
	// but we've left it in here so you can see how you would do it.
	array_push($comments, $newComment);

	// save new comment
	csvAppendToFile($csvFile, $newComment);

	// Send back a redirect so that a refresh triggers a GET
	header("Location: index.php");
	return;
}

// to clear a file, use
//csvClearFile($csvFile);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Data Storage</title>
	<link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>

</head>

<body>
	<h1>Simple Comment System</h1>

	<article>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies risus neque, ac rhoncus nibh feugiat non. Maecenas tempor mauris non lacus sollicitudin iaculis. Nulla facilisi. Donec diam diam, auctor non faucibus in, auctor sed mi. Morbi eu posuere est. Ut id augue vel felis gravida fermentum in eget augue. Ut placerat, leo sed varius euismod, diam metus tempor enim, non semper velit eros ac ligula. Cras congue eros id urna sollicitudin mollis. Donec ut imperdiet dolor, et hendrerit orci. Morbi nec maximus arcu, quis gravida leo.</p>

		<p>Integer ac arcu eu dui feugiat tempor non id mauris. Integer eleifend orci in leo tempus laoreet. Ut rutrum tempus nisl, ac mattis sapien suscipit at. Phasellus dapibus elit iaculis hendrerit sodales. Sed ac arcu est. Suspendisse sem augue, hendrerit vel ex quis, dapibus porta lectus. Morbi volutpat molestie sem ac venenatis.</p>

		<p>Praesent feugiat tempus scelerisque. Mauris efficitur aliquam dui, eu tincidunt dui. Vestibulum pellentesque vitae dolor et sollicitudin. Nunc elementum egestas odio, a commodo tellus fringilla nec. Phasellus porttitor, elit ac elementum commodo, nibh mi accumsan mi, a laoreet lorem justo eget diam. Nunc commodo ligula in turpis consequat commodo. Pellentesque eu eleifend tellus. Mauris sit amet arcu at nisi vestibulum fermentum.</p>

		<p>Suspendisse at aliquam leo, et condimentum ante. Integer luctus mauris condimentum felis tristique placerat. Phasellus dictum lacus quis velit congue tincidunt. Sed non eros at leo placerat consequat. Pellentesque eu purus eu urna porttitor luctus. Mauris sed orci felis. Etiam in sem fringilla, blandit eros ac, condimentum libero.</p>
	</article>

	<div id="commentsSection">
		<div id="commentsHolder">
			<h2>Comments</h2>
			<?php foreach($comments as $row) {
				$name = $row[0];
				$commentText = $row[1];
				?>
				<div class="comment">
					<p class="commentBody">
						<?php echo($commentText); ?>
					</p>
					<p class="commentAuthor">
						<?php echo($name); ?>
					</p>
				</div>
				<?php
			}
			?>
		</div>

		<div id="addComment">
			<h3>Add a Comment</h3>
			<form method="post" action="index.php" id="commentForm" novalidate>
				<div class="nameHolder">
					<label for="name">Name: </label>
					<input id="name" name="name" placeholder="Your Name">
				</div>
				<div>
					<label class="commentLabel" for="comment">Comment: </label>
					<textarea name="comment" placeholder="Your Comment" rows="8" cols="50"></textarea>
				</div>

				<div>
					<button type="submit" name="submit" class="submit">Submit</button>
				</div>

			</form>
		</div>
	</div>

</body>
</html>
