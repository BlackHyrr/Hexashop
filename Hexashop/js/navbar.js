let timVine = document.getElementById("navbar");

window.addEventListener("scroll", e => {
  let scrollPos = window.scrollY;
  if (scrollPos > 200) {
    navbar.classList.add('sticky');
    document.getElementById("body").classList.add('navbarOffsetMargin');
  } else {
    navbar.classList.remove('sticky');
    document.getElementById("body").classList.remove('navbarOffsetMargin');
  }
});