import { events } from "./utillites.js";

const video_state = (e) => {

  const video = document.querySelector(".play");
  const pause_video = document.querySelector(".pause-video");
  const play_video = document.querySelector(".play-video");

  if (video.paused) {

    video.play();
    play_video.classList.remove("has-play");
    if (e.type === "click") pause_video.classList.add("has-pause");
  } else {

    video.pause();
    play_video.classList.add("has-play");
    pause_video.classList.remove("has-pause");
  }
};

export const play = () => {

    const controlls = document.querySelectorAll(".controlls");

    if (
        !controlls.length > 0
    ) {
        return;
    }

    for (const index of controlls) {

        if ("ontouchstart" in window) {

          events(index, "touchstart", video_state);
        } else {

          events(index, "click", video_state);
        }
    }
};
