//create elemtents
const imagesWrapper = document.createElement("div");
const imagesContainer = document.createElement("div");
const image = document.createElement("img");

// array of images
const images = [
  "img/alvan.jpg",
  "img/charles.jpg",
  "img/hang.jpg",
  "img/jamie.jpg",
  "img/karsten.jpg",
  "img/stephanie.jpg",
];

//add classes
imagesWrapper.classList.add("images-wrapper");
imagesContainer.classList.add("images-container");
// add class to each image
images.forEach((img) => {
  image.classList.add("image");
});

//append elements
document.body.appendChild(imagesWrapper);
//foreach image add a container and add one image to it
images.forEach((img) => {
  imagesWrapper.appendChild(imagesContainer.cloneNode(true));
});
//put 1 image in each container
const imagesContainers = document.querySelectorAll(".images-container");
imagesContainers.forEach((container, index) => {
  container.appendChild(image.cloneNode(true));
  container.children[0].src = images[index];
});

//add event listener to window to listen for scroll event
window.addEventListener("scroll", () => {
  //get the scroll position
  const scrollPosition = window.scrollY;
  //get the images
  const images = document.querySelectorAll(".image");
  //loop through the images and change the style
  images.forEach((image, index) => {
    //get the height of the image
    const imageHeight = image.clientHeight;
    //get the position of the image
    const imagePosition = image.getBoundingClientRect().top;
    //get the height of the window
    const windowHeight = window.innerHeight;
    //check if the image is in the window
    if (imagePosition < windowHeight) {
      //if the image is in the window, change the style
      image.style.transform = `translateY(${scrollPosition / 2}px)`;
    }
    //max scroll position is the height of the image - the height of the window + the height of the image
    const maxScrollPosition = imageHeight - windowHeight + imageHeight;
    //check if the scroll position is greater than the max scroll position
    if (scrollPosition > maxScrollPosition) {
      //if the scroll position is greater than the max scroll position, change the style
      image.style.transform = `translateY(${maxScrollPosition / 8}px)`;
    }
  });
});

//on hover scale img up
imagesContainers.forEach((container) => {
  container.addEventListener("mouseenter", () => {
    container.children[0].style.transform = "scale(1.2)";
    container.style.transition = "all 1s ease";
  });
  container.addEventListener("mouseleave", () => {
    container.children[0].style.transform = "scale(1)";
  });
});

// on hover scale container up
imagesContainers.forEach((container) => {
  container.addEventListener("mouseenter", () => {
    container.style.transform = "scale(1.02)";
  });
  container.addEventListener("mouseleave", () => {
    container.style.transform = "scale(1)";
  });
});
