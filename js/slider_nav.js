import { events } from "./utillites.js";

export const slider_nav = () => {

  const navigation = document.querySelector(".navigation");
  const navbar_toggler = document.querySelector(".navbar-toggler");
  const navbar_collapse = document.querySelector(".navbar-collapse");

  if (
    !navigation ||
    !navbar_toggler ||
    !navbar_collapse
  ) {

    return;
  }

  let has_collapsed = true;

  events(navigation, "click", () => {

    navbar_toggler.disabled = "true";

    has_collapsed = !has_collapsed;

    Object.assign(navbar_toggler.children[0].children[0].style, {

      transition: "transform 0.375s",
      transform: has_collapsed ? "none" : "translate(0, 7px) rotate(-45deg)",
    });

    Object.assign(navbar_toggler.children[0].children[1].style, {

      transition: "opacity 0.375s",
      opacity: has_collapsed ? 1 : 0,
    });

    Object.assign(navbar_toggler.children[0].children[2].style, {

      transition: "transform 0.375s",
      transform: has_collapsed ? "none" : "translate(0, -7px) rotate(45deg)",
    });

    navbar_collapse.classList.toggle("has-collapsed");
    
    setTimeout(() => {

      navbar_toggler.disabled = "";
    }, 500);
  });
};