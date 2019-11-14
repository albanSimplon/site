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

Route::view('/', 'welcome');

Route::post('/', 'MetabolismeController@calculMetabolisme');

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');

Route::get('/connexion', 'ConnexionController@formulaire');

Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/mon-compte', 'CompteController@acceuil');

Route::get('/mon-compte', 'CompteController@infoPerso');

Route::get('/deconnexion', 'CompteController@deconnexion');

Route::get('/maj-mdp', 'CompteController@formulaireMdp');

Route::post('/modification-mot-de-passe', 'CompteController@modificationMotDePasse');

Route::get('/maj-mb', 'InscriptionController@formulaireMb');

Route::post('/envois-mb', 'InscriptionController@envoisMB');

Route::post('/suivi', 'InscriptionController@envoisSuivi');

Route::post('delete/{id}', 'CompteController@deleteSuivi');

Route::get('/admin', 'CompteController@vue')->middleware('App\Http\Middleware\Auth');

Route::post('admin/{id}', 'CompteController@deleteUser');

Route::get('/musculation', 'MusculationController@acceuil');

Route::get('/musculation', 'MusculationController@infoPerso');

Route::post('/musculation', 'MusculationController@envoisMusculation');

Route::post('/cardio', 'MusculationController@envoisCardio');

Route::post('deletemusculation/{id}', 'MusculationController@deleteMusculation');

Route::post('deletecardio/{id}', 'MusculationController@deleteCardio');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');











