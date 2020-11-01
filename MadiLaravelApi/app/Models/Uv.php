<?php

namespace App;
 
 
use Illuminate\Database\Eloquent\Model;


class Uv extends Model
{ 
    protected $table = "Uv"; 
    protected $primaryKey = 'id';

 
    protected $fillable = [
        'admin_id','video_name','video_path','video_verified_at','video_playlist_categori_id','remember_token','created_at','updated_at'	
    ];
    
    



}