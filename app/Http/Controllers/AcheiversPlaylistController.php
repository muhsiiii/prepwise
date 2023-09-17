<?php

namespace App\Http\Controllers;

use App\Models\AcheiversPlaylist;
use App\Models\Achievers;
use Illuminate\Http\Request;

class AcheiversPlaylistController extends Controller
{
    public function AcheiversPlaylist()
    {
        $Playlists=AcheiversPlaylist::where('status',1)->paginate(10);
        return view('admin.achievers_playlist',compact('Playlists'));
    }

    public function AcheiversPlaylistSave(Request $request)
    {
        $Playlistsave=AcheiversPlaylist::create([
            'playlist'=>$request->playlist
        ]);

        if($Playlistsave){
            $data['success']='success';
        }else{
            $data['error']='error';
        }

        echo json_encode($data);

    }

    public function AcheiversPlaylistUpdate(Request $request)
    {
        $Playlistupdate=AcheiversPlaylist::where('id',$request->pid)->update([
            'playlist'=>$request->playlist
        ]);

        if($Playlistupdate){
            $data['success']='success';
        }else{
            $data['error']='error';
        }

        echo json_encode($data);
    }

    public function AcheiversPlaylistDelete(Request $request)
    {
        AcheiversPlaylist::where('id',$request->pid)->update([
            'status'=>0
        ]);

        Achievers::where('playlist',$request->pid)->update([
            'status'=>0
        ]);

        $data['success']='success';
        echo json_encode($data);
    }
}
