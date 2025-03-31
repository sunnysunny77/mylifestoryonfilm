import { events } from "./utillites.js";

export const tooltip = () => {

  const input = document.querySelectorAll(".input-tooltip");
  const tooltip = document.querySelectorAll(".form-tooltip");

  if (
    input.length < 1 && 
    tooltip.length < 1  
  ) {
    return;
  };

  for (let index = 0; index <= input.length - 1; index++) {
    
    events(input[index], "mouseover", () => {

      tooltip[index].classList.add("has-mouse");
    });

    events(input[index], "mouseout", () => {

      tooltip[index].classList.remove("has-mouse");
    });
  };
};