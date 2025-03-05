<?php include_once __DIR__ . "/components/header.php"; ?>
<?php include_once __DIR__ . "/components/menu.php"; ?>

<main class="animated fadeIn">
    <?= $content ?>
    <!-- Música oculta -->
    <audio id="backgroundMusic" autoplay loop style="display: none;">
        <source src="assets/music/26. Hollow Knight.mp3" type="audio/mpeg">
        Tu navegador no soporta la etiqueta de audio.
    </audio>
</main>

<?php include_once __DIR__ . "/components/footer.php"; ?>