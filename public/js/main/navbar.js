const btn = document.querySelector(".mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// Add Event Listeners
btn.addEventListener("click", () => {
  console.log("Abcde");
  menu.classList.toggle("hidden");
});