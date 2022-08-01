<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AgentController extends Controller
{
    public function index(){
        $agents = Agent::orderByDesc('id')->get();

     return view('admin.agent.view_agent', compact('agents'));
    }

    public function addAgent(Request $request){

        if ($request->isMethod('post')){
            $agents = new Agent();
            $agents->name = $request->name;
            $agents->email = $request->email;
            $agents->phone = $request->phone;
            $agents->link_in = $request->link_in;
            $agents->save();


            if($request->image){
                $file = $request->file('image');

                $ogImage = Image::make($file);
                $originalPath = 'property/agent/';
                $ogImage =  $ogImage->save($originalPath.time().$file->getClientOriginalName());

                $agents->image = $originalPath.time().$file->getClientOriginalName();
                $agents->save();
            }

            return  redirect()->route('admin.view.agent');
        }

        return view('admin.agent.add_agent');
    }


    public function agentDelete($id){
        Agent::where('id', $id)->delete();
        return redirect()->back();
    }
}
