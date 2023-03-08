<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CsCare;

class CustomerCare_Controller extends Controller
{
    public function postCus(){
        return view('post');
    }

    public function postDataCus(Request $request){
        $input = $request->all();
        CsCare::create($input);
        dd('Post Created Succesfully.');
    }
}
