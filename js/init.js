import { OverlayScrollbars } from "overlayscrollbars";
import AOS from "aos";

export const init = () => {

  const navbar_collapse = document.querySelector(".navbar-collapse");

  window.osInst = OverlayScrollbars(document.body, {
    overflow: {
      x: "hidden",
      y: "scroll",
    },
    scrollbars: {
      theme: "os-theme-body",
    },
  });

  AOS.init({
    once: true,
  });

  navbar_collapse.classList.add("has-js");

  const hash = location.hash;

  if (hash) {

    const path = document.querySelector(`${hash}`);

    if (path) {

        path.scrollIntoView({ behavior: "smooth" });
    };
  };
};