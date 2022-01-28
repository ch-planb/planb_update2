<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function ContactStore(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

    }

    public function getData(){
        $contacts_list = Contact::latest()->get();
        return response()->json($contacts_list);
    }
    
    public function ContactsList(){

        return view('admin.pages.contact.contact_list');
    }
    

    public function ContactDelete($id){

        $contact = Contact::find($id);

        $contact->delete();
        return redirect()->back();
    }
}
