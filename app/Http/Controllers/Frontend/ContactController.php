<?php

namespace App\Http\Controllers\Frontend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Brian2694\Toastr\Toastr as ToastrToastr;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'email' => 'required',
            'fdireccion' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

            $contact = new Contact();
            $contact->name = $request->fname;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->direction = $request->fdireccion;
            $contact->message = $request->message;

            $contact->save();

            Toastr::success('Mensaje Enviado','Success',["positionClass"=>"toast-top-left"]);
            return redirect()->back();



    }
}
