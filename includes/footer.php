<footer>
<a href="https://ecohotel.jeravna.com" title="Къща за гости Екокъща Жеравна в село Жеравна">© 2003-<?= date('Y') ?> Екохотел ЖЕРАВНА</a>
<a href="https://www.linoart.com/index-bg.php" target="_blank" title="Дизайн студио">© 2026 дизайн:  Линоарт студио</a>
</footer>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const menuElement = document.getElementById('menu');
    mobileMenuButton.addEventListener('click', function(event) {
        event.preventDefault();
        menuElement.classList.toggle('show-menu');        
    });
</script>