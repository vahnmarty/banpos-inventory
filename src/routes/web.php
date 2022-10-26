<?php

use Illuminate\Support\Facades\Route;
use Vahnmarty\BanposInventory\Controllers;
use Vahnmarty\BanposInventory\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);