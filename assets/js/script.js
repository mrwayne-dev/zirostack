// Ensure preloader fades out after page load and stays hidden
let preloaderHidden = false;

function hidePreloader() {
  if (preloaderHidden) return; // Prevent hiding multiple times
  
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    preloaderHidden = true;
    preloader.style.opacity = "0";
    preloader.style.pointerEvents = "none";
    
    // Remove from DOM after fade completes
    setTimeout(() => {
      preloader.style.display = "none";
      preloader.style.visibility = "hidden";
    }, 500);
  }
}

// Hide preloader when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  setTimeout(hidePreloader, 300);
});

// Also hide on window load
window.addEventListener("load", () => {
  hidePreloader();
});

document.addEventListener("DOMContentLoaded", () => {
  const el = document.querySelector(".hero-word-fade");
  if (!el) return;
  
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
