import { events } from "./utillites.js";

const video_state = () => {

    const pause_video = document.querySelector(".pause-video");
    const play_video = document.querySelector(".play-video");
    const video = document.querySelector(".play");

    pause_video.classList.toggle("has-pause");
    play_video.classList.toggle("has-play");

    if (video.paused) { 
      video.play(); 
    } else { 
      video.pause();
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

        events(index, "click", video_state);
    }
};
