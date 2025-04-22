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

const scrolled = (obj, bool) => {

  obj.forEach(index => {

    const options = {
      rootMargin: bool ? `${index.offsetTop}px` : "0px",
    };

    const observer = new IntersectionObserver((entries, observer)=>{

      entries.filter(index=> index.isIntersecting).forEach(index => {

        index.target.classList.add("scrolled");
        observer.unobserve(index.target);
      });
    }, options);

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

  scrolled(document.querySelectorAll(".scrolled-init"), false);
  scrolled(document.querySelectorAll(".scrolled-init-offset"), true);
  overlay();
  hash();
  document.querySelector(".navbar-collapse").classList.add("has-js");
};