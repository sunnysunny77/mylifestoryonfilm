const version = 10000;
const cacheName = `mylifestoryonfilm-v${version}`;

const resources = [
  "./",
  "./index.php",
  "./schedule.php",
  "./information.php",
  "./favicon.ico",
  "./manifest.json",
  "./css/app.min.css",
  "./js/app.min.js",
  "./js/preload.js",
  "./font/NunitoSans.ttf",
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
  "./images/pwa-logo-small.webp",
  "./images/pwa-logo.webp",
  "./images/grandparents-kids.webp",
  "./images/nature.webp",
  "./images/dancing.webp",
  "./images/park.webp",
  "./images/play.webp",
  "./images/pause.webp",
  "./fallback.php"
];

const installResources = async (resources) => {

  const cache = await caches.open(cacheName);
  await cache.addAll(resources);
};

self.addEventListener("install", (event) => {

  console.log("Service worker is installed");
  
  self.skipWaiting();

  event.waitUntil(installResources(resources));
});

const cache = async (req) => {

  try {

  const res = await fetch(req);
  const cache = await caches.open(cacheName);
  await cache.put(req, res.clone());

  } catch (error) {

    console.log(error);

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

const stale = async (req) => {

  try {

    const match = await caches.match(req);

    if (match) {

      cache(req);

      return match;
    }

    const res = await fetch(req);

    return res;
      
  } catch (error) {
    
    console.log(error);
    
    if (req.mode === "navigate") {

      const fallback = await caches.match("./fallback.php");

      if (fallback) {

        return fallback;
      }
    }

    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

const video_add = async (req) => {

  const cache = await caches.open(cacheName);
  cache.add(req.url);
};

const video = async (req) => {
 
  try {

    const cache = await caches.open(cacheName);
    const match = await cache.match(req);

    if (match) {

      return match;
    }

    video_add(req);

    const res = await fetch(req);

    return res;

  } catch (error) {

    console.log(error);
    
    return new Response("Network error happened", {
      status: 408,
      headers: { "Content-Type": "text/plain" },
    });
  }
};

self.addEventListener("fetch", (event) => {

  console.log("Fetching via Service worker");

  if (event.request.destination === "video") {
    
    event.respondWith(video(event.request));
  } else {

    event.respondWith(stale(event.request));
  }
});