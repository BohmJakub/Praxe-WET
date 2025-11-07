  const optionBtn = document.getElementById('optionBtn');
  const popupMenu = document.getElementById('popupMenu');

  // Toggle popup visibility when button clicked
  optionBtn.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent click from bubbling to document
    popupMenu.classList.toggle('show');
  });

  // Close popup when clicking outside
  document.addEventListener('click', (event) => {
    if (!popupMenu.contains(event.target) && !optionBtn.contains(event.target)) {
      popupMenu.classList.remove('show');
    }
  });