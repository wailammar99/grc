<?php

use App\Http\Controllers\clientsController;
use App\Models\clients;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProspectController;
use Illuminate\Support\Facades\Auth ;
USE App\Models\contacts;
USE App\Models\Opportunités ;
USE App\Models\produits;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\rendezvousController ;
use App\Http\Controllers\contactauth ;
use App\Http\Controllers\LogincontactController;
use App\Http\Controllers\OppertuniteController;
use App\Http\Controllers\templateController;
use App\Models\logincontact;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Auth\LoginController ;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
route::get('/','templateController@index');




Auth::routes();{

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

}
Route::prefix('admin')->middleware('auth')->group(function ()
{
    Route::get('/home',function ()
    {
        return view('home');
    });
});


Route::get('/dashboard',function ()
{
    return view('home');
});

Route::get('home/clients','clientsController@clients');


Route::get('home/prospect',function ()
{
    return view('prospect');
});

Route::get('home/opportunites',function ()
{
    return view('oppertunite');
});
Route::get('home/prospect','ProspectController@listeprospect');
Route::get('home/contact','ContactController@listecontact');
Route::get('home/opportunite','OppertuniteController@listeoppertunite');
Route::get('client.show',function ()
{
    return view('clientshow');
});
//client 
Route::get('home/clients/{id}/edit', 'clientsController@edit');
Route::put('home/client/{id}', 'clientsController@update');
Route::get('home/clients/{id}', 'clientsController@show');
Route::delete('home/clients/{id}', 'clientsController@destroy');
Route::get('client/create', ' clientsController@create');
Route::post('client', ' clientsController@store');
//prospect 
Route::delete('home/prospect/{id}', 'ProspectController@destroy');
Route::get('home/prospect/{id}/edit', 'ProspectController@edit');
Route::put('home/prospect/{id}', 'ProspectController@update');
Route::get('home/prospect/{id}','ProspectController@show');


//contact
Route::delete('home/contact/{id}', 'ContactController@destroy');
Route::get('home/contact/{id}/edit', 'ContactController@edit');
Route::put('home/contact/{id}', 'ContactController@update');
Route::get('home/contact/create', 'ContactController@create');
Route::post('contact', 'ContactController@store');
//oppertunite 
Route::delete('home/opportunite/{id}', 'oppertuniteController@destroy');
Route::get('home/opportunite/{id}/edit', 'oppertuniteController@edit');
Route::put('home/opportunite/{id}', 'oppertuniteController@update');
Route::get('home/opportunite/create', 'oppertuniteController@create');
Route::post('opportunite', 'oppertuniteController@store');
Route::get('home/opportunite/{id}', 'oppertuniteController@show');
//produits
Route::get('home/oppertunite/{id}/afficher','ProduitsController@show');
//transofrmer to prospect to client

Route::post('home/prospect/transformetoclient/{id}','ProspectController@transformertoclient');
Route::post('home/prospect/transforme/{id}','ProspectController@transformertocontact');


//produits 
Route::get('home/oppertunite/{id}','ProduitsController@listeproduits');
Route::get('produits/create', ' ProduitsController@create');
Route::delete('home/produits/{id}', 'ProduitsController@destroy');
Route::put('home/produits/{id}', 'ProduitsController@update');
Route::get('home/prosduits/{id}/edit', 'ProduitsController@edit');
Route::get('home/produits/create', 'ProduitsController@create');
Route::post('produits', 'ProduitsController@store');

//rendezzz vous 
Route::delete('home/rendezvous/{id}', 'rendezvousController@destroy');
Route::get('home/rendezvous/{id}/edit', 'rendezvousController@edit');
Route::put('home/rendezvous/{id}', 'rendezvousController@update');
Route::get('home/rendezvous/create', 'rendezvousController@create');
Route::post('home/rendezvous/create', 'rendezvousController@store');

//login contact 
Route::get('/contact',[LogincontactController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/contact',[LogincontactController::class,'adminLogin'])->name('admin.login');


Route::get('/contact/home', [App\Http\Controllers\HomeController::class, 'index2'])->name('home');
Route::get('/contact/dashboard',function(){
    return view('contact');
})->middleware('auth:contact');