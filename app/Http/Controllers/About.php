<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Maths;
class About extends Controller{
    //
    public function index($user){
        echo $user;
        echo "Hello from Nobiscumdeus";
    }
    function obtainData(){
        return schoolproject::all();
    }
}
?>