import { events } from "./utillites.js";

export const form = () => {

  const form = document.querySelector("form");

  if (!form) {
      return;
  };

  events(form, "submit", async (e) => {

    e.preventDefault();

    const reply = document.querySelector(".form-reply");
    const gender = document.querySelector(".gender-tooltip");
    const name = e.target.name;
    const tel = e.target.tel;
    const email = e.target.email;
    const male = e.target.male;
    const female = e.target.female;

    let error = false;

    if (!/^[ '.a-z-]{2,40}$/i.test(name.value)) {

      error = true;
      name.previousElementSibling.classList.add("has-tooltip-error");
      name.classList.add("has-input-error");
    } else {

      name.previousElementSibling.classList.remove("has-tooltip-error");
      name.classList.remove("has-input-error");
    };

    if (!/^\+?\d{3,15}$/.test(tel.value)) {

      error = true;
      tel.previousElementSibling.classList.add("has-tooltip-error");
      tel.classList.add("has-input-error");
    } else {

      tel.previousElementSibling.classList.remove("has-tooltip-error");
      tel.classList.remove("has-input-error");
    };

    if (!/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) {

      error = true;
      email.previousElementSibling.classList.add("has-tooltip-error");
      email.classList.add("has-input-error");
    } else {

      email.previousElementSibling.classList.remove("has-tooltip-error");
      email.classList.remove("has-input-error");
    };

    if (male.checked && female.checked) {

      error = true;
      gender.previousElementSibling.classList.add("has-tooltip-error");
      male.classList.add("has-input-error");
      female.classList.add("has-input-error");
    } else {

      gender.previousElementSibling.classList.remove("has-tooltip-error");
      male.classList.remove("has-input-error");
      female.classList.remove("has-input-error");
    }

    if (error) {

      reply.classList.add("has-p-error");
      return;
    ;}

    reply.classList.remove("has-p-error");

    const formData = new FormData(e.target);

    const url = "./form.php";

    try {

      const res = await fetch(url, { method: "POST", body: formData });

      if (!res.ok) {

        throw new Error("Offline");
      }
  
      const text = await res.text();

        if (text) {

        reply.innerHTML = text;
        }

    } catch (error) {

      reply.innerHTML = error;
    }
  });
};