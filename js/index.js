// import "bootstrap/js/dist/alert";
// import "bootstrap/js/dist/button";
// import "bootstrap/js/dist/carousel";
// import "bootstrap/js/dist/collapse";
// import "bootstrap/js/dist/dropdown";
// import "bootstrap/js/dist/modal";
// import "bootstrap/js/dist/popover";
// import "bootstrap/js/dist/scrollspy";
// import "bootstrap/js/dist/tab";
// import "bootstrap/js/dist/toast";
// import "bootstrap/js/dist/tooltip";

import { slider_2 } from "./slider_2.js";
import { play } from "./play.js";
import { slider_nav } from "./slider_nav.js";
import { init } from "./init.js";
import { fallback } from "./fallback.js";
import { service_worker } from "./service_worker.js";
import { events } from "./utillites.js";

events(window, "load", () => {

  slider_2();
  play();
  slider_nav();
  init();
  fallback();
  service_worker();
});