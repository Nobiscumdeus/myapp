<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class myusers extends Controller
{
    //
    public function show(){
    
        $data=member::all();
        return view("list",['members'=>data]);
      //  return view('list');
    }
}
