import { OverlayScrollbars } from "overlayscrollbars";
import AOS from "aos";

export const init = () => {

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

  const hash = location.hash;

  if (hash) {

    const path = document.querySelector(`${hash}`);

    if (path) {

        path.scrollIntoView({ behavior: "smooth" });
    };
  };
};