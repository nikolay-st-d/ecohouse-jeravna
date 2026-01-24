<header>
    <h1>Еко къща Жеравна</h1>
    <nav>

        <ul>
            <li><a id="mobile-menu-button" href="#" title="open menu"><i class="fa-solid fa-bars"></i></a></li>
        </ul>
        <ul id="menu">
            <li><a <?php echo str_contains($current_page, 'index') ? ' class="link-active"' : '' ?> href="./"><i class="fa-solid fa-house-chimney"></i></a></li>
            <li><a <?php echo str_contains($current_page, 'about') ? ' class="link-active"' : '' ?> href="about.php">КЪЩАТА</a></li>
            <li><a <?php echo str_contains($current_page, 'zheravna') ? ' class="link-active"' : '' ?> href="zheravna.php">ЖЕРАВНА</a></li>
            <li><a <?php echo str_contains($current_page, 'gallery') ? ' class="link-active"' : '' ?> href="gallery.php">ГАЛЕРИЯ</a></li>
            <li><a <?php echo str_contains($current_page, 'pricelist') ? ' class="link-active"' : '' ?> href="pricelist.php">ЦЕНИ</a></li>
            <li><a <?php echo str_contains($current_page, 'contacts') ? ' class="link-active"' : '' ?> href="contacts.php">РЕЗЕРВАЦИЯ</a></li>
        </ul>
        <ul>
            <li>
                <a rel="nofollow" target="_blank" href="https://www.facebook.com/guesthousezheravna" title="Нашата Facebook страница">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
            <li>
                <a rel="nofollow" target="_blank" href="https://maps.app.goo.gl/WT39jUzJ8dsKBpjZ8" title="Локация в Google maps">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
            </li>
            <li><a href="home-en.php" title="English">EN</a></li>
        </ul>
    </nav>
</header>