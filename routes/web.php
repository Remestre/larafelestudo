<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'ola';
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'login'; })->name('site.login');

route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos'; })->name('app.produtos');
});

route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

route::fallback(function(){
    echo 'a rota acessada não existe. <a href="'.route('site.index').'">clique aqui<a> para ir para pagina inicial';
});

/*
route::get('/rota2', function() { 
    return redirect()->route('site.rota1'); 
} )->name('site.rota2');
*/

//route::redirect('/rota2', 'rota1');

/*
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome='desconhecido', 
        int $categoria_id = 1,
        ){
        echo "estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/
