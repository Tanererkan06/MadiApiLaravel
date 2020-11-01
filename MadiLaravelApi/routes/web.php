<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserVideoPlaylistsController;
use App\Http\Controllers\Controller;
 

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


Route::prefix('user')->group(function(){
Route::get('/VideoplaylistAll','UserVideoPlaylistsController@index');
Route::get('/VideoplaylistSelect/{admin_id}{user_id}{video_playlist_id}','UserVideoPlaylistsController@show'); 

}); 
 





/*$router->get('/uservideoAll','UvController@uservideoall');
    $router->get('/uservideo/{id}','UvController@uservideo');
    $router->post('/uservideosave','UvController@uservideosave');
    $router->put('/uservideoupdate/{id}','UvController@uservideoupdate');
    $router->delete('/uservideodelete/{id}','UvController@uservideodelete');

    //playlist
    $router->get('/VideoplaylistAll/{admin_id}{user_id}{video_playlist_id}','UserVideoPlaylistsController@index');
    $router->get('/VideoplaylistSelect/{admin_id}{user_id}{video_playlist_id}','UserVideoPlaylistsController@show');
    
    $router->post('/videoplaylistsave','UserVideoPlaylistsController@Videoplaylistsave');
    $router->put('/videoplaylistupdate/{id}','UserVideoPlaylistsController@Videoplaylistupdate');
    $router->delete('/videoplaylistdelete/{id}','UserVideoPlaylistsController@Videoplaylistdelete');

  //image
  $router->get('/imageshowall','ImageController@ImageShow');
  $router->get('/imageselect/{id}','ImageController@ImageSelect');
  $router->post('/imagesave','ImageController@Imagesave');
  $router->put('/imageupdate/{id}','ImageController@Imageupdate');
  $router->delete('/imagedelete/{id}','ImageController@Imagedelete'); 

    $router->post('/login', 'UserController@login');
    $router->get('/view-profile','UserController@viewProfile');
    $router->get('/logout','UserController@logout');
    $router->post('/refresh-token','UserController@refreshToken');
    */