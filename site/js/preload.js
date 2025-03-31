const preload = (href, as) => {
  const preloadLink = document.createElement("link");
  preloadLink.href = href;
  preloadLink.rel = "preload";
  preloadLink.as = as;
  if (as === "font") {
    preloadLink.crossOrigin = "true";
  }
  document.head.appendChild(preloadLink);
};

const path = location.pathname;

const fonts = [
  "./font/Poppins-Black.ttf",
  "./font/Poppins-Bold.ttf",
  "./font/Poppins-ExtraBold.ttf",
  "./font/Poppins-ExtraLight.ttf",
  "./font/Poppins-Light.ttf",
  "./font/Poppins-Medium.ttf",
  "./font/Poppins-Regular.ttf",
  "./font/Poppins-SemiBold.ttf",
  "./font/Poppins-Thin.ttf",
  "./webfonts/fa-regular-400.woff2",
  "./webfonts/fa-brands-400.woff2",
  "./webfonts/fa-solid-900.woff2",
];

const home = [
  "./images/grandparents-kids.webp",
  "./images/nature.webp",
  "./images/dancing.webp",
];

if(path.includes("schedule")) {

  for (const index of fonts) {

    preload(index, "font");
  }
} else if (path.includes("information")) {

  for (const index of fonts) {

    preload(index, "font");
  }
} else {

  for (const index of home) {

    preload(index);
  }
  for (const index of fonts) {

    preload(index, "font");
  }
}