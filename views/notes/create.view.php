<main class="main">
    <h1 class="main__title"><?= $heading ?></h1>
    <form class="form" method="POST" action="/notes">
        <div class="form__group">
            <label for="body" class="form__label">Body</label>
            <textarea id="body" name="body" class="form__textarea"
                      placeholder="you@example.com"><?= $_POST['body'] ?? '' ?></textarea>
            <?php if (isset($errors['body'])) : ?>
                <p class="input__error"><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>
        <button type="submit" class="form__button">Save</button>
    </form>
</main>