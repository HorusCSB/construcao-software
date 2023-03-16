<?php
    $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
        $r->addRoute(['GET', 'POST'], '/', [HomeController::class, 'index']);
        $r->addRoute(['GET', 'POST'], '/denunciar-anuncio', [DenunciaControl::class, 'create']);
    });
?>