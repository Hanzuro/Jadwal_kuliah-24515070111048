document.addEventListener("DOMContentLoaded", function () {
  // Existing alert styling
  const alerts = document.querySelectorAll(".alert");
  if (alerts.length) {
    alerts.forEach((a) => {
      a.style.background = "#fff3f3";
      a.style.padding = "4px 8px";
      a.style.borderRadius = "4px";
    });
  }

  // IntersectionObserver for fade-in animation on .container
  const container = document.querySelector(".container");
  if (container) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            container.classList.add("visible");
          } else {
            container.classList.remove("visible");
          }
        });
      },
      { threshold: 0.1 }
    );
    observer.observe(container);
  }
});
