# Hw 3 Notes 
Here, to do everything sucessfully I had to do the following steps:


used the layout from w3 schools to style in CSS and used JS to iteratively create slides based on  
## Main Ideas  to replicate JS

1) Set up HTML structure to have a container to hold slides and nav dots

2) Define the locan variable ur iterating over 

ex: var NUM_IMAGES = 5, var imageNames [list of image names]

3. Identify the Target Container
Before adding slides, determine where they should be placed.

The slides will be added inside the div class="slideshow-container".
Use document.getElementsByClassName("slideshow-container")[0] to select the first instance of this container.

4. Prepare Image Data
Since we are generating slides dynamically, we need to store the images and captions in arrays.

NUM_IMAGES: Total number of images.
imgNames: Array containing image file names (without extensions).
imgCaptions: Array containing captions corresponding to each image.
5. Loop Through Images and Create Slides
For each image:

- Create a div for the slide and assign it the class "mySlides".
- Create a div for the slide number (e.g., "1 / 5") and insert text.
- Create an img element and set its src attribute dynamically.
- Create a div for the caption and insert the corresponding text.
- Append all elements to the slide wrapper.
- Append the completed slide to the slideshow container.

