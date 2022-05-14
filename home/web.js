const arrowdown = document.querySelector(".downIcon");
const menu = document.querySelector(".menu");
let x = window.matchMedia("(max-width: 700px)");
const Microclub = document.querySelector(".text2");
arrowdown.addEventListener("click", () => {
  if (arrowdown.style.transform == "rotate(0deg)") {
    arrowdown.style.transform = "rotate(180deg)";
    menu.style.top = "0%";
  } else {
    arrowdown.style.transform = "rotate(0deg)";
    menu.style.top = "-6%";
  }
});
window.onscroll = () => {
  let value = scrollY;
  Microclub.style.left = value * 3 + "px";
};
