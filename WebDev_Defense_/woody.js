const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.navigations');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('active');
});