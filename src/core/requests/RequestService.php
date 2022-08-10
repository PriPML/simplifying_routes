<?php

namespace Pripml\SimpleRoute\Core\Requests;

class RequestService {
    static function explodeAccepts($accepts){
        return explode(",", $accepts);
    }
}
