<?php

include "./vendor/autoload.php";

use App\Http\Controllers\LoginController;
use Pripml\SimpleRoute\Core\Routes\Route;

Route::get("login", [LoginController::class, "index"]);

?>
