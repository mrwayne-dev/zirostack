document.addEventListener("DOMContentLoaded", () => {
  const el = document.querySelector(".hero-word-fade");
  const words = ["Project", "Idea", "Vision", "Product", "Platform"];
  let i = 0;

  setInterval(() => {
    el.classList.add("hide");

    setTimeout(() => {
      i = (i + 1) % words.length;
      el.textContent = words[i];
      el.classList.remove("hide");
    }, 400);

  }, 2000);
});
