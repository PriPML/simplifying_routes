<?php

include "./vendor/autoload.php";

use App\Http\Controllers\LoginController;
use Pripml\SimpleRoute\Core\Routes\Route;

Route::get("/", [LoginController::class, "index"]);
Route::get("register", [LoginController::class, "create"]);
Route::get("", [LoginController::class, "edit"]);
Route::post("save-register", [LoginController::class, "store"]);
Route::put("update-register", [LoginController::class, "update"]);
Route::delete("delete-register", [LoginController::class, "destroy"]);
Route::resource("login", LoginController::class);

?>
