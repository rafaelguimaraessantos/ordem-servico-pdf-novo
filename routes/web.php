<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdemServicoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-wkhtmltopdf', function () {
    try {
        $pdf = App::make('snappy.pdf.wrapper');
        $version = shell_exec('wkhtmltopdf --version');
        return 'wkhtmltopdf version: ' . $version;
    } catch (\Exception $e) {
        return 'Erro: ' . $e->getMessage();
    }
});
Route::get('/os/pdf', [OrdemServicoController::class, 'gerarPdf']);