<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function __invoke()
  {
      return view('contact');
  }

  public function postcontact(Request $request)
  {
    $this->validate($request, [
      'firstname' => 'required',
      'lastname' => 'required',
      'email' => 'required|email',
      'subject' => 'required|min:5',
      'message' => 'required|min:10']);
    $data = array(
      'firstname' => $request->firstname,
      'lastname' => $request->lastname,
      'email' => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message
      );
    Mail::send('emails.contact', $data, function($message) use ($data) {
        $message->from($data['email']);
        $message->to('jordantsap@hotmail.gr');
        $message->subject($data['subject']);
      });

    $notification = array(
        'message' => 'Ευχαριστούμε, το μύνημα σας εστάλη!',
        'alert-type' => 'success'
        );
    return redirect(url('contact'))->with($notification);
  }
}
