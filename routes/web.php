<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

# Home
$router->get('/'							, ['as'=> 'home'			, 'uses' => 'HomeController@index'	   	  	 ]);

# Agências
$router->get('/agencias'					,['as'=> 'agencias.index'  , 'uses' => 'AgenciesController@index'  	  	 ]);
$router->get('/agencias/create'				,['as'=> 'agencias.create' , 'uses' => 'AgenciesController@create' 	  	 ]);
$router->post('/agencias/store'				,['as'=> 'agencias.store'  , 'uses' => 'AgenciesController@store'  	  	 ]);
$router->get('/agencias/edit/{id}'			,['as'=> 'agencias.edit'   , 'uses' => 'AgenciesController@edit'   	  	 ]);
$router->post('/agencias/update/{id}'		,['as'=> 'agencias.update' , 'uses' => 'AgenciesController@update' 	  	 ]);
$router->get('/agencias/destroy/{id}'		,['as'=> 'agencias.destroy', 'uses' => 'AgenciesController@destroy'	  	 ]);

# Clientes
$router->get('/clientes'			 		,['as'=> 'clientes.index'	, 'uses' => 'CustomersController@index'   	 ]);
$router->get('/clientes/create'		 		,['as'=> 'clientes.create' , 'uses' => 'CustomersController@create'   	 ]);
$router->post('/clientes/store'		 		,['as'=> 'clientes.store'  , 'uses' => 'CustomersController@store'    	 ]);
$router->get('/clientes/edit/{id}'	 		,['as'=> 'clientes.edit'   , 'uses' => 'CustomersController@edit'     	 ]);
$router->post('/clientes/update/{id}'		,['as'=> 'clientes.update' , 'uses' => 'CustomersController@update'   	 ]);
$router->get('/clientes/destroy/{id}'		,['as'=> 'clientes.destroy', 'uses' => 'CustomersController@destroy'  	 ]);

# Tipos de Clientes
$router->get('/atipos'			 	 		,['as'=> 'atipos.index'  , 'uses' => 'AccountTypesController@index'   	 ]);
$router->get('/atipos/create'		 		,['as'=> 'atipos.create' , 'uses' => 'AccountTypesController@create'  	 ]);
$router->post('/atipos/store'		 		,['as'=> 'atipos.store'  , 'uses' => 'AccountTypesController@store'   	 ]);
$router->get('/atipos/edit/{id}'	 		,['as'=> 'atipos.edit'   , 'uses' => 'AccountTypesController@edit'    	 ]);
$router->post('/atipos/update/{id}'	 		,['as'=> 'atipos.update' , 'uses' => 'AccountTypesController@update'  	 ]);
$router->get('/atipos/destroy/{id}'	 		,['as'=> 'atipos.destroy', 'uses' => 'AccountTypesController@destroy' 	 ]);

# Contas
$router->get('/contas'				 		,['as'=> 'contas.index'  , 'uses' => 'AccountsController@index'  	   	 ]);
$router->get('/contas/create'		 		,['as'=> 'contas.create' , 'uses' => 'AccountsController@create' 	   	 ]);
$router->post('/contas/store'		 		,['as'=> 'contas.store'  , 'uses' => 'AccountsController@store'  	   	 ]);
$router->get('/contas/edit/{id}'	 		,['as'=> 'contas.edit'   , 'uses' => 'AccountsController@edit'   	   	 ]);
$router->post('/contas/update/{id}'	 		,['as'=> 'contas.update' , 'uses' => 'AccountsController@update' 	   	 ]);
$router->get('/contas/destroy/{id}'	 		,['as'=> 'contas.destroy', 'uses' => 'AccountsController@destroy'	   	 ]);

# Tipos de Movimentações
$router->get('/mtipos'			 	 		,['as'=> 'mtipos.index'  , 'uses' => 'MovementTypesController@index'  	 ]);
$router->get('/mtipos/create'		 		,['as'=> 'mtipos.create' , 'uses' => 'MovementTypesController@create' 	 ]);
$router->post('/mtipos/store'		 		,['as'=> 'mtipos.store'  , 'uses' => 'MovementTypesController@store'  	 ]);
$router->get('/mtipos/edit/{id}'	 		,['as'=> 'mtipos.edit'   , 'uses' => 'MovementTypesController@edit'   	 ]);
$router->post('/mtipos/update/{id}'	 		,['as'=> 'mtipos.update' , 'uses' => 'MovementTypesController@update' 	 ]);
$router->get('/mtipos/destroy/{id}'	 		,['as'=> 'mtipos.destroy', 'uses' => 'MovementTypesController@destroy'	 ]);

# Movimentações
$router->get('/movimentacoes'				,['as'=> 'movimentacoes.index'  , 'uses' => 'MovementsController@index'  ]);
$router->get('/movimentacoes/create'		,['as'=> 'movimentacoes.create' , 'uses' => 'MovementsController@create' ]);
$router->post('/movimentacoes/store'		,['as'=> 'movimentacoes.store'  , 'uses' => 'MovementsController@store'  ]);
$router->get('/movimentacoes/edit/{id}'		,['as'=> 'movimentacoes.edit'   , 'uses' => 'MovementsController@edit'	 ]);
$router->post('/movimentacoes/update/{id}'	,['as'=> 'movimentacoes.update' , 'uses' => 'MovementsController@update' ]);
$router->get('/movimentacoes/destroy/{id}'	,['as'=> 'movimentacoes.destroy', 'uses' => 'MovementsController@destroy']);