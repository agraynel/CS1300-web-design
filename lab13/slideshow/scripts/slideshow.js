$(document).ready(function() {
	// the array of images
	var images = ["images/tower1.png", "images/tower2.png", "images/tower3.png", "images/tower4.png", "images/baby-corn-1.jpg"];

	// current image index
	var currentImageIndex = 0;

	// store the index of the first and last image
	var FIRST_IMAGE_INDEX = 0;
	var LAST_IMAGE_INDEX = images.length - 1;

	// When the left button is clicked
	$("#left").click(function() {
		// move to the previous image, if we can
		if (currentImageIndex > FIRST_IMAGE_INDEX) {
			// move to previous image
			currentImageIndex = currentImageIndex - 1;
		} else {
			// wrap around to last image if this is the first image
			currentImageIndex = LAST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentImageIndex]);
	});

	// when the right button is clicked
	$("#right").click(function() {
		// move to the next image, if we can
		if (currentImageIndex < LAST_IMAGE_INDEX) {
			// move to next image
			currentImageIndex = currentImageIndex + 1;
		} else {
			// wrap around to first image if this is the last image
			currentImageIndex = FIRST_IMAGE_INDEX;
		}
		$("#current_img").attr("src", images[currentImageIndex]);
	});
});
