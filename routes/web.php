<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sales-reports', function () {
    $saleReports = new \App\Solid\UserReport();
    $pdfExport = new \App\Solid\Export\PdfExport();

    return $pdfExport->export($saleReports->between('1-10-2023', '2-10-2023'));
});
