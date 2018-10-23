<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Carbon\Carbon;
use Validator;


class ContactController extends Controller
{
    public function index(){

        return view('pages.contact')->with('title','Contact');

    }

    public function sendMail(Request $request){


    // Validation $rules
      $rules = [
        'firstName'=>'required|alpha_dash|min:2',
        'surname'=>'required|alpha_dash|min:2',
        'email'=>'required|email|same:confirmEmail',
        'confirmEmail'=>'required|email|same:email',
        'phone'=> ['nullable','min:10'],
        'message'=>'required|min:5|max:500',
      ];

      $validator = Validator::make($request->all(), $rules);



        if ($validator->fails()) {

            return redirect('/contact')
                        ->withErrors($validator)
                        ->with('status','failed')
                        ->withInput();

        }

      else {

      $stamp = Carbon::now()->toRfc7231String();

      // Create new instance of Contact
      $mail = new Contact();


      $mail->content = array_add($request ,'stamp',$stamp);

      
      //Pass the object intot he mail call
      Mail::to(ENV('MAIL_TO_ADDRESS'))->send($mail);

      return redirect('/contact')
                    ->with('status','success');



      }
    }
}
