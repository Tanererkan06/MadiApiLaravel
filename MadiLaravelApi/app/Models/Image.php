<?php

namespace App;
 
 
use Illuminate\Database\Eloquent\Model;


class Image extends Model
{ 
    protected $table = "Gorsel"; 
 
    protected $fillable = [
        'user_id','video_name','video_path','video_verified_at','video_playlist_categori_id','remember_token','created_at','updated_at'	
    ];
    

}