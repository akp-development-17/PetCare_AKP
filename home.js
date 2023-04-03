
burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
navList = document.querySelector(".nav-list");

burger.addEventListener("click", () => {
  // Your code to toggle the menu goes here
  navList.classList.toggle("v-class-resp");
  navbar.classList.toggle("h-nav-resp");
});
