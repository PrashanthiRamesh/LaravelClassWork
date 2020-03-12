<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    function create(Request $request){
        
        $data= array(
            'name'=> $request->input('name'),
           
        );
        $rules = array(
            'name' => 'required',
       
            );
            
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
           return Redirect::to('contact')->withErrors($validator)->withInput();
        }
        
        // testmcit$4
        $flag= Task::create();
        return "creation success";

    }
}
