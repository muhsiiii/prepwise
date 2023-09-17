<?php

namespace App\Http\Controllers;

use App\Models\AcheiversPlaylist;
use App\Models\Achievers;
use Illuminate\Http\Request;

class AcheiversController extends Controller
{
    public function AcheiversList()
    {
        $Achievers = Achievers::where('status', 1)->paginate(10);
        return view('admin.achievers_list', compact('Achievers'));
    }

    public function AcheiversAdd()
    {
        $Playlists = AcheiversPlaylist::where('status', 1)->get();
        return view('admin.achievers_add', compact('Playlists'));
    }

    public function AcheiverSave(Request $request)
    {
        $image1 = $request->file('image');
        $new_name = "achievers/" . time() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('achievers'), $new_name);

        Achievers::create([
            'image' => $new_name,
            'playlist' => $request->playlist
        ]);

        $data['success'] = 'success';

        echo json_encode($data);
    }

    public function AcheiversEdit($id)
    {
        $Achievers=Achievers::where('id',$id)->first();
        $Playlists=AcheiversPlaylist::where('status',1)->get();
        return view('admin.achievers_edit',compact('Achievers','Playlists'));
    }

    public function AcheiverUpdate(Request $request)
    {
        $Blog=Achievers::where('id',$request->aid)->first();
        $image1 = $request->file('image');


        if($image1=='')
        {
            $new_name1=$Blog->image;
        }
        else{
            $image1 = $request->file('image');
            $new_name1 = "achievers/" . time() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('achievers'), $new_name1);
        }


        Achievers::where('id',$request->aid)->update([
            'image' => $new_name1,
            'playlist' => $request->playlist,
        ]);

        $data['success'] = 'success';
        echo json_encode($data);
    }

    public function AcheiverDelete(Request $request)
    {
        Achievers::where('id',$request->imp_Id)->delete();
        $data['success']='success';
        echo json_encode($data);
    }
}
