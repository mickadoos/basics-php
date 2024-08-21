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
        <?php if (isset($_SESSION['user'])) : ?>
            <form method="POST" action="/session">
                <input type="hidden" name="_method" value="DELETE">
                <button>Log out</button>
            </form>
            <p>Hello, <?= htmlspecialchars($_SESSION['user']['email']) ?></p>
        <?php else : ?>
            <a href="/login">
                <img src="/assets/images/login-icon.png" alt="user-icon">
            </a>
            <p>Hello, Guest user</p>
        <?php endif; ?>
    </div>
</div>
