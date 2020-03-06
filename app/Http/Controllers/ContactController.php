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
            'message'=>$request->input('message')
        );
        $rules = array(
            'subject' => 'required',
            'message' => 'required'
            );
            
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
           return Redirect::to('contact')->withErrors($validator)->withInput();
        }
        return "All good";
    }
}
