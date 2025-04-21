import { OverlayScrollbars } from "overlayscrollbars";

const overlay = () => {

  window.osInst = OverlayScrollbars(document.body, {
    overflow: {
      x: "hidden",
      y: "scroll",
    },
    scrollbars: {
      theme: "os-theme-body",
    },
  });
};

const scrolled = (obj, options) => {

  const observer = new IntersectionObserver((entries, observer)=>{

    entries.filter(index=> index.isIntersecting).forEach(index => {

      index.target.classList.add("scrolled");
      observer.unobserve(index.target);
    });
  },options);

  obj.forEach(index => {

    observer.observe(index);
  });
};

const hash = () => {

  const hash = location.hash;

  if (hash) {

    const path = document.querySelector(`${hash}`);

    if (path) {

        path.scrollIntoView({ behavior: "smooth" });
    };
  };
};

export const init = () => {

  scrolled(document.querySelectorAll(".scrolled-init"));
  overlay();
  hash();
  document.querySelector(".navbar-collapse").classList.add("has-js");
};