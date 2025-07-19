document.addEventListener('DOMContentLoaded', () => {
  const animateCounter = (element, start, end, duration) => {
      const startTime = performance.now();

      const animate = (currentTime) => {
          const elapsedTime = currentTime - startTime;
          const progress = Math.min(elapsedTime / duration, 1);
          const currentNumber = Math.floor(start + (end - start) * progress);

          element.textContent = currentNumber;

          if (progress < 1) {
              requestAnimationFrame(animate);
          }
      };

      requestAnimationFrame(animate);
  };

  const observerCallback = (entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              const counterElement = document.getElementById('counter');
              const counter1Element = document.getElementById('counter1');
              const counter2Element = document.getElementById('counter2');

              // Dapatkan nilai akhir dari atribut data
              const endCounter = parseInt(counterElement.getAttribute('data-end'), 10);
              const endCounter1 = parseInt(counter1Element.getAttribute('data-end'), 10);
              const endCounter2 = parseInt(counter2Element.getAttribute('data-end'), 10);

              // Mulai animasi
              animateCounter(counterElement, 0, endCounter, 3000);
              animateCounter(counter1Element, 0, endCounter1, 4000);
              animateCounter(counter2Element, 0, endCounter2, 5000);

              observer.disconnect(); // Stop observing once animation has started
          }
      });
  };

  const observerOptions = {
      root: null, // Use the viewport as the container
      threshold: 0.1 // Trigger when 10% of the element is visible
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  const target = document.querySelector('main');

  observer.observe(target);
});
