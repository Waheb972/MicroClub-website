const navbarinsc = document.querySelector(".navbar");
const Navelem = navbarinsc.getElementsByTagName("li");
for (let i = 0; i < Navelem.length; i++) {
  Navelem[i].addEventListener("click", () => {
    console.log("ok");
    let current = document.querySelector(".active");
    current.classList.remove("active");
    Navelem[i].className += " active";
  });
}
const exitsession = document.querySelector(".exitsession");

const progress = document.querySelector(".progress");
const next1 = document.querySelector(".next1");
const next2 = document.querySelector(".next2");
const previous1 = document.querySelector(".previous1");
const previous2 = document.querySelector(".previous2");

const form1 = document.getElementById("form1");
const form2 = document.getElementById("form2");
const form3 = document.getElementById("form3");
console.log("dibne");
next1.addEventListener("click", (e) => {
  e.preventDefault();

  form1.style.left = "-100%";
  form2.style.left = "00%";
  form3.style.left = "100%";
  progress.style.width = "66.6%";
});
next2.addEventListener("click", (e) => {
  e.preventDefault();

  form2.style.left = "-100%";
  form3.style.left = "0%";
  progress.style.width = "100%";
});

previous1.addEventListener("click", (e) => {
  e.preventDefault();

  form1.style.left = "0";
  form2.style.left = "100%";
  progress.style.width = "33.3%";
});
previous2.addEventListener("click", (e) => {
  e.preventDefault();

  form3.style.left = "100%";
  form2.style.left = "0%";
  progress.style.width = "66.6%";
});
exitsession.addEventListener("click", (e) => {
  console.log("ok");
  document.querySelector(".SESSION").style.display = "none";
});
