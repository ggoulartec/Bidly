<?php

use App\Http\Controllers\GerencialController;
use App\Http\Controllers\LeilaoController;
use App\Http\Controllers\VistoriaController;
use Illuminate\Support\Facades\Route;


Route::prefix('leiloes')->group(function () {
    Route::get('/', [LeilaoController::class, 'index'])->name('leiloes.index');
    Route::get('/create', [LeilaoController::class, 'create'])->name('leiloes.create');
    Route::get('/agenda-leiloes', [LeilaoController::class, 'agenda'])->name('leiloes.agenda-leiloes');
    Route::get('/acompanhamento', [LeilaoController::class, 'acompanhamento'])->name('leiloes.acompanhamento');
});

Route::prefix('gerencial')->group(function () {
    Route::get('/leiloeiro', [GerencialController::class, 'leiloeiro'])->name('gerencial.leiloeiro.index');
    Route::get('/localidade', [GerencialController::class, 'localidade'])->name('gerencial.localidade.index');
    Route::get('/comitente', [GerencialController::class, 'comitente'])->name('gerencial.comitente.index');
    Route::get('/status', [GerencialController::class, 'status'])->name('gerencial.status.index');
});


Route::prefix('vistoria')->group(function () {
    Route::get('/categoria', [VistoriaController::class, 'categoria'])->name('vistoria.categoria');
    Route::get('/veiculo', [VistoriaController::class, 'veiculo'])->name('vistoria.veiculo.index');
    Route::get('/equipamento', [VistoriaController::class, 'equipamento'])->name('vistoria.equipamento.index');
    Route::get('/imovel', [VistoriaController::class, 'imovel'])->name('vistoria.imovel.index');
});
Route::get('/', fn() => redirect()->route('leiloes.index'));
