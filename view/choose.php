<!-- išrikiuojami visi į prokjektą sukelti failai  -->
<!-- Atsiradus naujiems failas sąrašas automatiškai pasipildo -->

<div class="container">
    <h1>Projekte esamų failų sąrašas:</h1>
    <ul>
        <?php foreach ($data as $fileName): ?>
        <li><a href= <?= URL . 'show/' . $fileName . '>' . $fileName ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>  