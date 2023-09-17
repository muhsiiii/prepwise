<?php

namespace App\Http\Controllers;

use App\Models\ImpPlaylist;
use App\Models\Impression;
use Illuminate\Http\Request;

class ImpressionController extends Controller
{
    public function ImpPlayList()
    {
        $impplaylists=ImpPlaylist::where('status',1)->paginate(10);
        return view('admin.imp_playlist',compact('impplaylists'));
    }

    public function ImpPlayListSave(Request $request)
    {
        $Playlists=ImpPlaylist::create([
            'playlist'=>$request->playlist
          ]);

          if($Playlists){
            $data['success']='success';
          }else{
            $data['error']='error';
          }

          echo json_encode($data);
    }

    public function ImpPlayListUpdate(Request $request)
    {
        $ImpPlaylistUpdate=ImpPlaylist::where('id',$request->pid)->update([
            'playlist'=>$request->playlist
        ]);

        if($ImpPlaylistUpdate){
            $data['success']='success';
        }else{
            $data['error']='error';
        }

        echo json_encode($data);
    }

    public function ImpPlayListDelete(Request $request)
    {
        ImpPlaylist::where('id',$request->pid)->update([
            'status'=>0
        ]);

        Impression::where('playlist',$request->pid)->update([
            'status'=>0
        ]);

        $data['success']='success';
        echo json_encode($data);
    }


    public function ImpressionList()
    {
        $Impressions=Impression::where('status',1)->paginate(10);
        $ImpressionCount=Impression::count();
        return view('admin.impression_list',compact('Impressions','ImpressionCount'));
    }

    public function ImpressionAdd()
    {
        $Playlists=ImpPlaylist::where('status',1)->get();
        return view('admin.impression_add',compact('Playlists'));
    }

    public function ImpressionSave(Request $request)
    {
        Impression::create([
            'playlist'=>$request->playlist,
            'embeded_url'=>$request->embed_url,
            'title'=>$request->video_title,
            'name'=>$request->name,
            'youtube_link'=>$request->youtube_url
        ]);

        $data['success']='success';
        echo json_encode($data);
    }

    public function ImpressionEdit($id)
    {
        $Impression=Impression::find($id);
        $Playlists=ImpPlaylist::where('status',1)->get();
        return view('admin.impression_edit',compact('Impression','Playlists'));
    }

    public function ImpressionUpdate(Request $request)
    {
        $Impression_Id=$request->ignoutube_id;

        Impression::where('id',$Impression_Id)->update([
            'embeded_url'=>$request->embed_url,
            'title'=>$request->video_title,
            'name'=>$request->name,
            'youtube_link'=>$request->youtube_url,
            'playlist'=>$request->playlist
        ]);

        $data['success']='success';
        echo json_encode($data);

    }

    public function ImpressionDelete(Request $request)
    {
        $Imp_ID=$request->imp_Id;

        Impression::where('id',$Imp_ID)->delete();

        $data['success']='success';
        echo json_encode($data);
    }

}
