<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    function search(Request $request)
    {
        $name = $request->input('title');
        if(strlen($name) >= 4)
        {
            $val = DB::table('title')->where('name',$name)->orWhere('name', 'like', '%' . $name . '%')->get();
            return view('main.table')->with('val',$val);
        }
        else{
            return "Enter text field greater than 4";
        }
        
    }

    // function description(Request $request)
    // {
    //     return "hello";
    // }
}
