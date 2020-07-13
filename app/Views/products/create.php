<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/product/create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name"/><br/>

    <label for="description">Description</label>
    <textarea name="description"></textarea><br/>

    <input type="submit" name="submit" value="Create" />

</form>