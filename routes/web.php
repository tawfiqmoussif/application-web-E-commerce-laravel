<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact','CategorieController@Contact');


//Route::post('register','UserController@store');
//Route::get('login','CategorieController@Register');

//Route::get('/','CategorieController@Accueil');

//Route::get('product_summary','CategorieController@Product_summary');

Route::get('product_detail/{produit}','Controller@Product_detail');
Route::get('apropos', 'CategorieController@Apropos');



//Route::get('add_categorie','CategorieController@store');

/*
Route::get('add_product',[
	'uses'=> 'ProduitController@create',
	'as'=>'esp_fournisseur.add_product',
	'middleware'=>'roles',
	'roles'=>['admin','fournisseur']
]);*/
//**********************imp
Route::post('espace_client', 'UserController@check');



/*
Route::get('product',[
	'uses'=> 'ProduitController@index',
	'as'=>'esp_fournisseur.product',
	'middleware'=>'roles',
	'roles'=>['admin','fournisseur']
]);*/

//teeeeeeeeest

Route::group(['middleware'=>'roles','roles' => ['admin']],function(){
	Route::get('add_categorie','PagesController@add_categorie');
	Route::post('add_categorie','CategorieController@store');
	Route::get('admin','PagesController@admin');
	Route::post('/add_role','PagesController@add_role');
});

Route::group(['middleware'=>'roles','roles' => ['admin','fournisseur']],function(){
	Route::get('product','ProduitController@index');
	Route::get('add_product','ProduitController@create');
	Route::get('produit/{produit}','Controller@Produit');
	Route::get('product/{id}/edit', 'ProduitController@edit');
Route::put('product/{id}', 'ProduitController@update');
Route::delete('product/{id}', 'ProduitController@destroy');
Route::post('add_product', 'ProduitController@store');
});

Route::group(['middleware'=>'roles','roles' => ['admin','fournisseur','client']],function(){
	Route::get('/jaime','PagesController@jaime')->name('jaime');
	Route::post('product_detail/{produit}/store','CommentaireController@store');

	Route::resource('adresse','AdresseController');
	Route::post('adressestore','AdresseController@adressestore');
	Route::get('payment','CartController@payment');


});
Route::get('search','PagesController@search');

//// panier
Route::resource('/cart','CartController');
	Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::get('adresse','ProduitController@adresse');
/*Route::get('add_categorie',[
	'uses'=> 'PagesController@add_categorie',
	'as'=>'esp_admin.add_categorie',
	'middleware'=>'roles',
	'roles'=>['admin']

]);

Route::get('admin',[
	'uses'=> 'PagesController@admin',
	'as'=>'esp_admin.admin',
	'middleware'=>'roles',
	'roles'=>['admin']

]);

Route::post('/add_role',[
	'uses'=> 'PagesController@add_role',
	'as'=>'esp_admin.admin',
	'middleware'=>'roles',
	'roles'=>['admin']

]);*/


