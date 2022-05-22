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
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
