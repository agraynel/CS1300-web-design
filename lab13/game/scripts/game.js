$(document).ready(function() {
	// Constants

	// the amount the block moves on each arrow press
	MOVE_DISTANCE = 100;

	// Calculate the width and height of the block
	block_width = $("#catch_me").width();
	block_height = $("#catch_me").height();

	// Calculate the x position of the left side of the container
	leftEdgeX = $(".container").position().left;
	// and the y position of the top edge of the container
	topEdgeY = $(".container").position().top;

	// Calculate the x position of the right side of the container
	rightEdgeX = leftEdgeX + $(".container").width();
	// and the y position of the bottom edge of the container
	bottomEdgeY = topEdgeY + $(".container").height();

	// Calculate the middle X and Y Values
	midX = (leftEdgeX + rightEdgeX) / 2;
	midY = (topEdgeY + bottomEdgeY) / 2;


	// Initialize starting point for block as the two middle values
	// we just calculated.
	$("#catch_me").css("top", midY);
	$("#catch_me").css("left", midX);

	// Whenever a key is pressed
	$(document).keydown(function(e) {
		// Prevent scrolling via arrow keys
		if (e.which >= 37 && e.which <= 40) {
			e.preventDefault();
		}

		// If the key is the right arrow, move the block right
		if (e.key == "ArrowRight") {
			newValue = $("#catch_me").position().left + MOVE_DISTANCE;
			if (newValue <= rightEdgeX - block_width) {
				$("#catch_me").css("left", newValue);
			}
		}
		// If the key is the right arrow, move the block left
		if (e.key == "ArrowLeft") {
			newValue = $("#catch_me").position().left - MOVE_DISTANCE;
			if (newValue >= leftEdgeX) {
				$("#catch_me").css("left", newValue);
			}
		}
		// If the key is the up arrow, move the block up
		if (e.key == "ArrowUp") {
			newValue = $("#catch_me").position().top - MOVE_DISTANCE;
			if (newValue >= topEdgeY) {
				$("#catch_me").css("top", newValue);
			}
		}
		// If the key is the down arrow, move the block down
		if (e.key == "ArrowDown") {
			newValue = $("#catch_me").position().top + MOVE_DISTANCE;
			if (newValue <= bottomEdgeY - block_height) {
				$("#catch_me").css("top", newValue);
			}
		}

	});

	// When the block is clicked
	$("#catch_me").click(function() {
		// If the score is less than 2, tell the user they have to start the
		// game or give the block mover some time
		if (score < 2) {
			alert("Whoa there! You need to start the game or give slowpoke a chance!");
		} else {
			// otherwise, display the game over message and the score.
			alert("Game over! You caught the block in " + score + " seconds.");
		}
		// reload the page
		location.reload()
	});

	// Manage the Start / Pause button with the timer function.
	millisecondsInASecond = 1000;

	// by default, the code is not running, there is no timeout, and the score is 0
	running = false;
	timeout = 0;
	score = 0;

	// when the start button is clicked
	$("#start").click( function() {
		// if the code is not running, set the code to running, change the
		// button text to "Pause", and start a timer that runs code every second.
		if (!running) {
			running = true;
			$("#start").text("Pause");
			// every second we add one to the score and display
			// the current score.
			timeout = window.setInterval(function() {
				score = score + 1;
				$("#score").text("Score: " + score);
			}, millisecondsInASecond);
		} else {
			// if the code is running, set the code to not running, change the
			// button text to "Continue", and stop the timer.
			running = false;
			$("#start").text("Continue");
			window.clearTimeout(timeout);
		}
	})

});
