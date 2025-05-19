function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const aboutImage = document.getElementById('about-image');

  function onScroll() {
    const rect = aboutImage.getBoundingClientRect();
    // when top of image container is within bottom 75% of viewport
    if (rect.top < window.innerHeight * 0.75) {
      aboutImage.classList.add('visible');
      window.removeEventListener('scroll', onScroll);
    }
  }

  window.addEventListener('scroll', onScroll);
  // in case it's already in view
  onScroll();
});
