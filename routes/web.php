<?php

use Ezadev\PHPInfo\Http\Controllers\PHPInfoController;

Route::get('phpinfo', PHPInfoController::class.'@index');