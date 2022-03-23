<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Malahierba\ChileRut\ChileRut;
use Malahierba\ChileRut\Rules\ValidChileanRut;

class FormData extends Controller
{
    public function showdata(Request $request){
        request()->validate([
          //'answer_name' => 'required'
            'rut' => ['required', 'string', new ValidChileanRut(new ChileRut)],
            'pain' => 'required',
            'satisfaction' => 'required',
            'experience' => 'required',
            'friend' => 'required',
            'comment' => 'nullable',
            'gustos' => 'required'
        ]);
    
        dd($request->all()); 
    }
}