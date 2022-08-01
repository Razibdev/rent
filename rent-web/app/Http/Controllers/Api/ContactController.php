<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        if($request->isMethod('post')){
            $contact = new Contact();
            $contact->username = $request->username;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            return response()->json(['message' => 'Contact done now']);
        }

    }

    public function subscription(Request $request){
        if($request->isMethod('post')){
            $check = Subscription::where('email',$request->email)->count();
            if($check){
                return response()->json(['message' => 'You are already member!', 'type'=> 'error']);
            }else{
                $subscription = new Subscription();
                $subscription->name = $request->name;
                $subscription->email = $request->email;
                $subscription->save();
                return response()->json(['message' => 'Subscription Done', 'type' => 'success']);
            }

        }

    }
}
