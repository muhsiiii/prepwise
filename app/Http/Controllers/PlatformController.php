<?php

namespace App\Http\Controllers;

use App\Models\Platforms;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function PlatList()
    {
        $Platforms=Platforms::all();
        return view('admin.platform_list',compact('Platforms'));
    }

    public function PlatForm($id)
    {
        return view('admin.platform_update',compact('id'));
    }

    public function PlatFormUpdate(Request $request)
    {

        $image1 = $request->file('image');
        $new_name = "platform/" . time() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('platform'), $new_name);

        $Platformsupdate=Platforms::where('id',$request->pid)->update([
            'image'=>$new_name,
            'description'=>$request->description,
            'url'=>$request->url
        ]);

        if($Platformsupdate){
            $data['success']='success';
        }else{
            $data['error']='error';
        }

        echo json_encode($data);

    }
}
