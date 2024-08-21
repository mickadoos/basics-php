<main class="main">
    <h1 class="main__title"><?= $heading ?></h1>
    <form class="form" method="POST" action="/session">
        <div class="form__group">
            <label for="email" class="form__label">Email</label>
            <input type="email" id="email" name="email" class="form__input"
                   placeholder="Enter your email" value="<?= old('email', 'test@mail.com') ?>">
            <?php if (isset($errors['email'])) : ?>
                <p class="input__error"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form__group">
            <label for="password" class="form__label">Password</label>
            <input type="password" id="password" name="password" class="form__input"
                   placeholder="Enter your password" value="password">
            <?php if (isset($errors['password'])) : ?>
                <p class="input__error"><?= $errors['password'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form__actions">
            <button type="submit" class="form__button form__button--save">Log In</button>
        </div>
    </form>
</main>