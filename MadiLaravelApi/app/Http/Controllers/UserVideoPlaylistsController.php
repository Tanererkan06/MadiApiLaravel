<?php

namespace App\Http\Controllers;

use App\Models\UserVideoPlaylists;
use Illuminate\Http\Request;
///use App\Http\Controllers\Controller;


class UserVideoPlaylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        return UserVideoPlaylists::all();
        /* return  UserVideoPlaylists::where('admin_id',$admin_id)
               ->get(); */
               
                /* return  UserVideoPlaylists::where('admin_id',$admin_id)->where('user_id',$user_id)->where('video_playlist_id',$video_playlist_id)
             
               ->get(); */ 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserVideoPlaylists  $userVideoPlaylists
     * @return \Illuminate\Http\Response
     */
    public function show($admin_id,$user_id,$video_playlist_id)
    {
        return UserVideoPlaylists::find([$admin_id,$user_id,$video_playlist_id]);

      
          UserVideoPlaylists::where('admin_id', $admin_id)->where('user_id', $user_id)->where('video_playlist_id', $video_playlist_id)->get();
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserVideoPlaylists  $userVideoPlaylists
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVideoPlaylists $userVideoPlaylists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserVideoPlaylists  $userVideoPlaylists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserVideoPlaylists $userVideoPlaylists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserVideoPlaylists  $userVideoPlaylists
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserVideoPlaylists $userVideoPlaylists)
    {
        //
    }
}
