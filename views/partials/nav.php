<?php
$menuController = new MenuController();;
$menuItems = $menuController->getMenuItems();
?>
<div class="nav__container">
    <div class="nav__logo">
        <img src="/assets/images/portapapeles.png" alt="web-logo">
    </div>
    <div class="nav__menu">
        <?php foreach ($menuItems as $menuItem) : ?>
            <a href="<?= $menuItem['url'] ?>" class="<?= urlIs($menuItem['url']) ? 'nav__link-current' : '' ?> nav__link"><?= $menuItem['label'] ?></a>
        <?php endforeach; ?>
    </div>
    <div class="nav__profile">
        <img src="/assets/images/usuario.png" alt="user-icon">
    </div>
</div>