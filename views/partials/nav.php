<div class="nav__container">
    <div class="nav__logo">
        <a href="/">
            <img src="/assets/images/portapapeles.png" alt="web-logo">
        </a>
    </div>
    <div class="nav__menu">
        <?php foreach ($menuItems as $menuItem) : ?>
            <a href="<?= $menuItem['url'] ?>"
               class="<?= urlIs($menuItem['url']) ? 'nav__link-current' : '' ?> nav__link"><?= $menuItem['label'] ?></a>
        <?php endforeach; ?>
    </div>
    <div class="nav__profile">
        <a href="/register">
            <img src="/assets/images/usuario.png" alt="user-icon">
        </a>
        <p>Hello, <?= ($_SESSION['user']['email']) ?? 'Guest user'; ?></p>
    </div>
</div>
