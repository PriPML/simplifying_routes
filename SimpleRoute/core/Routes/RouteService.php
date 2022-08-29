<?php

namespace Pripml\SimpleRoute\Core\Routes;

use Pripml\SimpleRoute\Core\Helpers\StringHelper;

class RouteService
{

    static function getRouteParams($route)
    {

        // indentificador de rota = edit-register/{id}
        //rota chamada = edit-register/10

    }

    static function checkIfRouteParams(string $route)
    {
        return \stripos($route, "{");
    }

    static function extractRoute(string $route): string
    {        
        return StringHelper::explodeStringAndCleanArray($route)[0];
    }
}