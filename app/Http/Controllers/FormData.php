<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class FormData extends Controller
{
    public function showdata(Request $request){
        request()->validate([
            'rut' => 'required',
            'pain' => 'required',
            'satisfaction' => 'required',
            'experience' => 'required',
            'friend' => 'required',
            'comment' => 'nullable'
        ]);
        dd($request->all()); 
    }
}