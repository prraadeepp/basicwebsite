<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagecontroller extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
      	 'name'=>'required',
      	 'email'=>'required'

      ]);

      return "success";

    }
}
