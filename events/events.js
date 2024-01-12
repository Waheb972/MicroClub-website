const navbarinsc = document.querySelector(".navbar");
const Navelem = navbarinsc.querySelectorAll(".option");
for (let i = 0; i < Navelem.length; i++) {
  Navelem[i].addEventListener("click", () => {
    console.log("ok");
    let current = document.querySelector(".active");
    current.classList.remove("active");
    Navelem[i].className += " active";
  });
}

const scrolling = document.querySelector(".explore");

scrolling.addEventListener("click", (e) => {
  e.preventDefault();
  scrolling.scrollIntoView({
    behavior: "smooth",
  });
});
