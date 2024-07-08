<div class="nav__container">
    <div class="nav__logo">
        <img src="/assets/images/portapapeles.png" alt="web-logo">
    </div>
    <div class="nav__menu">
        <a href="/" class="<?= urlIs('/') ? 'nav__link-current' : '' ?> nav__link">To Do List</a>
        <a href="/meals" class="<?= urlIs('/meals.php') ? 'nav__link-current' : '' ?> nav__link">Meals</a>
        <a href="/products" class="<?= urlIs('/products.php') ? 'nav__link-current' : '' ?> nav__link">Products</a>
    </div>
    <div class="nav__profile">
        <img src="/assets/images/usuario.png" alt="user-icon">
    </div>
</div>