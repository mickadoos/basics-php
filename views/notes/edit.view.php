<main class="main">
    <h1 class="main__title">Edit note</h1>
    <form class="form" method="POST" action="/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <div class="form__group">
            <label for="body" class="form__label">Body</label>
            <textarea id="body" name="body" class="form__textarea"
                      placeholder="Enter your note here"><?= $item['body'] ?? '' ?></textarea>
            <?php if (isset($errors['body'])) : ?>
                <p class="input__error"><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>
        <div class="form__actions">
            <a class="form__button form__button--cancel" href=<?= "/{$tableKey}?id={$item['id']}" ?>>Cancel</a>
            <button class="form__button form__button--save">Update</button>
        </div>
    </form>
    <form class="form" method="POST" action="/note">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <button id="btn-delete" class="form__button form__button--delete">Delete</button>
    </form>
</main>