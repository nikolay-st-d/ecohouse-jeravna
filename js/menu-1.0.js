const mobileMenuButton = document.getElementById('mobile-menu-button');
    const menuElement = document.getElementById('menu');
    mobileMenuButton.addEventListener('click', function(event) {
        event.preventDefault();
        menuElement.classList.toggle('show-menu');        
    });