
function animateNumber(el) {
  const min = parseFloat(el.getAttribute("data-min")) || 0;
  const max = parseFloat(el.getAttribute("data-max")) || 100;
  const duration = parseInt(el.getAttribute("data-duration")) || 2000;
  const suffix = el.getAttribute("data-suffix") || "";
  const startTime = performance.now();

  function updateNumber(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const value = Math.floor(min + (max - min) * progress);
    el.textContent = value + suffix;

    if (progress < 1) {
      requestAnimationFrame(updateNumber);
    }
  }

  requestAnimationFrame(updateNumber);
}

// Observer to trigger animation when visible
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      animateNumber(entry.target);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

// Observe all numscroller elements
document.querySelectorAll(".numscroller").forEach(el => observer.observe(el));

