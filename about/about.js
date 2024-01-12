const counters = document.querySelectorAll(".counter");
const swiperS = document.querySelectorAll(".swiper-slide");
const para = document.querySelector(".para");
counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const c = +counter.innerText;
    const increment = target / 100;
    if (c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`;
    }
    setTimeout(updateCounter, 1);
  };
  updateCounter();
});

swiperS.forEach((e) => {
  e.addEventListener("click", () => {
    para.style.bottom = "10%";
  });
});

const swiper = new Swiper(".swiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
