<?php

namespace Pripml\SimpleRoute\Core\Helpers;

use Pripml\SimpleRoute\Core\Routes\ArrayHelper;

class StringHelper {
    static function explodeStringAndCleanArray(string $string): array
    {
        $explodedString = explode("/", $string);
        $cleanedArray = ArrayHelper::cleanArrayBySearch($explodedString,"");
        return $cleanedArray;
    }
}