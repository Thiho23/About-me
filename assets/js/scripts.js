document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.getElementById('navmenu');
  
    mobileNavToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
    });
  });
  