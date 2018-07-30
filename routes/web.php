<?php


Route::get('/', function () {
    return view('home/home');
}) -> name('pagina_inicial');


Route::get('/despeza', function () {
    return view('NotaseReceitas/NotaseReceitas');
}) -> name('pagina_notasedespeza');


Route::get('/despeza/novadespeza', function () {
    return view('NotaseReceitas/newNotaseReceitas');
}) -> name('pagina_newNotaseReceitas');


Route::get('/receita', function () {
    return view('RelacaoDeAssociados/RelacaoDeAssociados');
}) -> name('associados');

Route::get('/receita/newassociado', function () {
    return view('RelacaoDeAssociados/newAssociado');
}) -> name('newassociados');