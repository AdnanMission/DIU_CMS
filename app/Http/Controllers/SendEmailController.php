<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'student_id'     =>  'required',
      'description_of_complaint' =>  'required',
      'email'          =>  'required|email'
     ]);

        $data = array(
            'student_id'                 =>  $request->student_id,
            'description_of_complaint'   =>  $request->description_of_complaint
        );

     Mail::to('adnanshahriar016@gmail.com ')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

?>
