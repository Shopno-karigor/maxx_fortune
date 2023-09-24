<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|max:80',
            'email' => 'required|max:80',
            'message' => 'required|max:255',
        ]);
        $data=array(
            'customer_email' => $request->name.' ('.$request->email.')',
            'message' => $request->message,
            'created_at' => date("Y-m-d")." ".date("h:i:s"),
        );

        $result=DB::table('customer_queries')->insert($data);
        if ($result){
            return redirect()->back()->with('success', 'Thank you for reaching us. We will get back to you ASAP');
        }else{
            return redirect()->back()->with('error', 'Submission failed');
        }
    }

    public function show(Contact $contact)
    {
        //
        $response = Contact::find('1');
        throw_if(!$response,GeneralNotFoundExecption::class,'record not found');
        return view('frontend.contact', compact('response'));
    }

}
