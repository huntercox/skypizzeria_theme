window.onload = function () {

  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('#navMenu');

  if (hamburger) {
    hamburger.addEventListener('click', function (event) {
      hamburger.classList.toggle('is-active');
      nav.classList.toggle('showNav');
    }, false);
  }
}

function toggleHours() {
  const hoursList = document.querySelector('.hours .list');
  const hoursBtn = document.querySelector('.hours .title');

  if (hoursList.style.display === "none") {
    hoursList.style.display = "block";
    hoursBtn.classList.add('opened');
  } else {
    hoursList.style.display = "none";
    hoursBtn.classList.remove('opened');
  }
}