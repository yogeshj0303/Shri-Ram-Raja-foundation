<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
       
        return view('contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'number'=>'required',
         'subject'=>'required',
         'message' => 'required'
         ]);
         $data = $request->all();
         $result = new Contact;
        
           $result->name = $data['name'];
        $result->email = $data['email'];
        $result->subject = $data['subject'];
        $result->number = $data['number'];
        $result->message = $data['message'];

          $result->save();
        return back()->with('message', 'Thanks for contacting us!');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function contactdestroy($id)
    {
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }
    public function admincontactindex()
  {
        $contact = Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact', compact('contact'));
    }  
}
