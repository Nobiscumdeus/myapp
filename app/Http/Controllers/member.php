<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class member extends Controller
{
    //
    function addMember(Request $req){
        $data=$req->input('username');
        $req->session()->flash('user',$data);
        return redirect('add');
    }
}
