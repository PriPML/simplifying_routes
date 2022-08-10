<?php

include "vendor/autoload.php";

use Pripml\SimpleRoute\Core\Requests\Request;

$request = new Request();
print_r('<pre>');
print_r($request->server());

?>



