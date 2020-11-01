<?php

namespace App\Models;
 
 
use Illuminate\Database\Eloquent\Model;

// DB::table('uservideoplaylists')->get()
//// DB::table('uservideoplaylists')->count()

//>php artisan make:controller UserVideoPlaylistsController --api --model=UserVideoPlaylists
//php artisan make:controller ImageController --api --model=Image     

//vendor-lumen-framework-auth
class UserVideoPlaylists extends Model
{ 
   protected $table = "UserVideoPlaylists"; 
 
    protected $fillable = [
       'admin_id','video_name','video_path','video_verified_at','video_playlist_categori_id',
       'remember_token','created_at','updated_at'	
    ];
     /* 
       public function category()
    {
        return $this->hasOne("App\Uv","admin_id","admin_id");  
    }    */
}