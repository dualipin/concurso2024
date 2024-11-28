<?php
ob_start();
?>
<div class="container">
    <div class="row">
        <div class="flex flex-col">
            <h1>Valores estadísticos clave</h1>
            <p>Para generar los números, haga clic en el botón "Generar 5000 números".</p>
            <a href="index.php?action=generar" class="bg-blue-300 p-2 rounded-md mx-auto hover:bg-blue-400">Generar 5000
                números</a>
            <a href="index.php?action=consultar" class="btn btn-primary">Consultar estadísticas</a>
        </div>
    </div>
    <?php
    $contenido = ob_get_clean();
    require_once BASE_TEMPLATE . 'base.php';