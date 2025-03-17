<h1>Ini Kategori</h1>
<ul>
    <?php foreach ($kat as $key => $value): ?>
        <li><a href="<?= $value ?>"><?= $key ?></a></li>
    <?php endforeach; ?>
</ul>