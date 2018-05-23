<?php

Route::group(array('prefix' => 'api'), function()
{
  Route::get('/', function () {
      return response()->json(['message' => 'GuardeAqui - APP - API', 'status' 
                                         => 'Connected']);;
  });

  Route::resource('usuarios', 'Usuarios\UsuariosController');
  Route::get('usuariosgeral/{id}', 'Usuarios\UsuariosController@nm_teste');
  Route::resource('anuncios', 'Anuncios\AnunciosController');
  Route::get('anuncios/enderecos/{id}', 'Anuncios\AnunciosController@anunciosporendereco');

});

Route::get('/cadastro_usuarios', function () {
    return view('cadastro_usuarios');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

//Route::get('welcome/app', function () {
//    return redirect('api');
//});
