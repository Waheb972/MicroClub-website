const navbar = document.querySelector(".navbar");
const Navelem = navbar.getElementsByTagName("li");
const scrolling = document.querySelector(".contactbtn");

scrolling.addEventListener("click", (e) => {
  e.preventDefault();
  scrolling.scrollIntoView({
    behavior: "smooth",
  });
});

for (let i = 0; i < Navelem.length; i++) {
  Navelem[i].addEventListener("click", () => {
    let current = document.querySelector(".active");
    current.classList.remove("active");
    Navelem[i].className += " active";
  });
}
