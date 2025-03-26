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
  }});

  AOS.init({once: true});
};