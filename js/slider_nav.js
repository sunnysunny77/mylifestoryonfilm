import { events } from "./utillites.js";
import { OverlayScrollbars } from "overlayscrollbars";

export const slider_nav = () => {

  const navbar_toggler = document.querySelectorAll(".navbar-toggler");
  const navbar_collapse = document.querySelector(".navbar-collapse");

  if (
    !navbar_toggler ||
    !navbar_collapse
  ) {

    return;
  }

  let has_collapsed = true;

  OverlayScrollbars(navbar_collapse, {
    overflow: {
      x: "hidden",
      y: "scroll",
    },
    scrollbars: {
      theme: "os-theme-body",
  }});

  for (const index of navbar_toggler) {

    events(index , "click", () => {

      index.disabled = "true";
      has_collapsed = !has_collapsed;
      navbar_toggler[0].classList.toggle("has-collapsed");
      navbar_toggler[1].classList.toggle("has-collapsed");
      navbar_collapse.classList.toggle("has-collapsed");
      has_collapsed ? window.osInst.options({
        overflow: {
          x: "hidden",
          y: "scroll",
        },
        scrollbars: {
          theme: "os-theme-body",
      }}) : window.osInst.options({
        overflow: {
          x: "hidden",
          y: "hidden",
        },
        scrollbars: {
          theme: "os-theme-body",
      }});
      setTimeout(() => {

        index.disabled = "";
      }, 500);
    });
  };
};