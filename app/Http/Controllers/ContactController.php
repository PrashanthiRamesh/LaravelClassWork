<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    function validateContacts(Request $request){
        
        $data= array(
            'subject'=> $request->input('subject'),
            'emailMessage'=>$request->input('message')
        );
        $rules = array(
            'subject' => 'required',
            'emailMessage' => 'required'
            );
            
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
           return Redirect::to('contact')->withErrors($validator)->withInput();
        }
        
        // testmcit$4
        \Mail::send('contactEmail', $data, function($message){
                $message->to('rvprashanthi@gmail.com','Laravel Class')
                        ->subject('Laravel Contact Us');
        });

        return "All good!";

    }
}
