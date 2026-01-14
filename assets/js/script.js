// Ensure preloader fades out after page load
document.addEventListener("DOMContentLoaded", () => {
  // Fade out preloader after a short delay to ensure page is fully rendered
  if (document.querySelector("#preloader")) {
    setTimeout(() => {
      const preloader = document.querySelector("#preloader");
      preloader.style.opacity = "0";
      preloader.style.pointerEvents = "none";
      
      // Remove from DOM after fade completes
      setTimeout(() => {
        preloader.style.display = "none";
      }, 500);
    }, 300);
  }
});

// Fallback: Also use window load event for additional certainty
window.addEventListener("load", () => {
  if (document.querySelector("#preloader")) {
    const preloader = document.querySelector("#preloader");
    preloader.style.opacity = "0";
    preloader.style.pointerEvents = "none";
    
    setTimeout(() => {
      preloader.style.display = "none";
    }, 500);
  }
});

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
