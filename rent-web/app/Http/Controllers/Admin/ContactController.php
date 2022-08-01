<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscription;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderByDesc('id')->get();
        return view('admin.contact.contact', compact('contacts'));
    }

    public function destroy($id){
        Contact::where('id', $id)->delete();
        Toastr::error('Contact Information one delete sucessfully', 'Contact Info');
        return redirect()->back();
    }





    public function subscriber(){
        $subscription = Subscription::orderByDesc('id')->get();
        return view('admin.subscriber.subscriber', compact('subscription'));
    }


    public function subscriberDelete($id){
        Subscription::where('id', $id)->delete();
        Toastr::error('Subscription Information one delete sucessfully', 'Subscription Info');
        return redirect()->back();
    }











}
