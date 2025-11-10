  const optionBtn = document.getElementById('optionBtn');
  const popup = document.getElementById('popup');
  const closeBtn = document.getElementById('closePopup');

  // Helper to actually show the popup (removes hidden then triggers transition)
  function openPopup() {
    if (!popup.classList.contains('hidden')) return;
    popup.classList.remove('hidden');
    popup.setAttribute('aria-hidden', 'false');

    // Allow one frame so the browser applies the "left: -320px" state first,
    // then we add .show to trigger the CSS transition.
    requestAnimationFrame(() => {
      popup.classList.add('show');
      // After opening, start listening for outside clicks and Esc
      document.addEventListener('click', onDocumentClick);
      document.addEventListener('keydown', onKeyDown);
    });
  }

  // Hide popup and cleanup listeners after transition ends
  function closePopup() {
    if (popup.classList.contains('hidden')) return;
    popup.classList.remove('show');
    popup.setAttribute('aria-hidden', 'true');

    // Wait for transition to finish before hiding completely
    const onEnd = () => {
      popup.classList.add('hidden');
      popup.removeEventListener('transitionend', onEnd);
    };
    popup.addEventListener('transitionend', onEnd);

    // Remove outside-click and key listeners immediately so they don't run while closing twice
    document.removeEventListener('click', onDocumentClick);
    document.removeEventListener('keydown', onKeyDown);
  }

  // Toggle behavior for the button
  optionBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // prevent the document click from firing immediately
    if (popup.classList.contains('hidden')) openPopup();
    else closePopup();
  });

  // Close button inside panel
  closeBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    closePopup();
  });

  // If user clicks anywhere outside the popup (and not the button), close it
  function onDocumentClick(e) {
    // e.composedPath is robust for shadow DOM; fallback to contains
    const path = e.composedPath ? e.composedPath() : null;
    const clickedInsidePopup = path ? path.includes(popup) : popup.contains(e.target);
    const clickedButton = path ? path.includes(optionBtn) : optionBtn.contains(e.target);

    if (!clickedInsidePopup && !clickedButton) {
      closePopup();
    }
  }

  // Close with Escape
  function onKeyDown(e) {
    if (e.key === 'Escape') closePopup();
  }

  // Optional: if the popup is open and user resizes / scrolls, keep it usable
  // (not strictly needed for a fixed left panel, but useful for other layouts)
  window.addEventListener('resize', () => {
    if (popup.classList.contains('show')) {
      // nothing required for fixed panel, but placeholder if you want to recalc positions
    }
  });


   const slides = document.querySelectorAll('.carousel-item');
    let index = 0;

    function showSlide(newIndex) {
      slides[index].classList.remove('active');
      index = (newIndex + slides.length) % slides.length;
      slides[index].classList.add('active');
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
      showSlide(index + 1);
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      showSlide(index - 1);
    });


document.addEventListener("DOMContentLoaded", () => {
  const slideshows = document.querySelectorAll("[data-slideshow]");
  const intervalPerSegment = 2000; // ms per progress section (1s each)

  slideshows.forEach((slideshow) => {
    const items = slideshow.querySelectorAll(".slideshow-item");
    const progressSegments = slideshow.querySelectorAll(".progress-segment .fill");
    const nextBtn = slideshow.querySelector(".next");
    const prevBtn = slideshow.querySelector(".prev");

    let currentIndex = 0;
    let currentSegment = 0;
    let timer;

    function showSlide(index) {
      items.forEach((item, i) => {
        item.classList.toggle("active", i === index);
      });
      slideshow.querySelector(".slideshow-inner").style.transform =
        `translateX(-${index * 100}%)`;
    }

    function resetProgress() {
      progressSegments.forEach(seg => {
        seg.style.transition = "none";
        seg.style.width = "0%";
      });
      void slideshow.offsetWidth; // reflow
    }

    function startProgress() {
      resetProgress();
      currentSegment = 0;
      progressTick();
    }

    function progressTick() {
      if (currentSegment >= progressSegments.length) {
        // Restart from beginning after 4 segments
        currentSegment = 0;
      }

      // Reset previous segments
      progressSegments.forEach((seg, i) => {
        seg.style.transition = "none";
        seg.style.width = i < currentSegment ? "100%" : "0%";
      });

      const seg = progressSegments[currentSegment];
      // Animate this segment filling
      requestAnimationFrame(() => {
        seg.style.transition = `width ${intervalPerSegment}ms linear`;
        seg.style.width = "100%";
      });

      // After segment fills, move to next slide
      timer = setTimeout(() => {
        nextSlide();
      }, intervalPerSegment);
    }

    function nextSlide() {
      clearTimeout(timer);
      currentIndex = (currentIndex + 1) % items.length;
      showSlide(currentIndex);

      // Move to next progress segment
      currentSegment = (currentSegment + 1) % progressSegments.length;
      progressTick();
    }

    function prevSlide() {
      clearTimeout(timer);
      currentIndex = (currentIndex - 1 + items.length) % items.length;
      showSlide(currentIndex);

      currentSegment = (currentSegment - 1 + progressSegments.length) % progressSegments.length;
      progressTick();
    }

    nextBtn.addEventListener("click", nextSlide);
    prevBtn.addEventListener("click", prevSlide);

    // Initialize
    showSlide(currentIndex);
    startProgress();
  });
});


