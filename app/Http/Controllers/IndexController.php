<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
     /**
     * Display pagina. a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()

    {
        return view('index');
    }

        public function store(Request $request)
    {

       /* request()->validate([
        	'document' => 'required|numeric',
        	'name' => 'required|alpha',
        	'lastname' => 'required|alpha',
            'email' => 'required|email',
            'phone'=>'required|numeric',
            'id_depeartament'=>'required',
            'id_city'=>'required',
        ]);
        $draw = Draw::where('status','like','Activo')->first();;
      
        return redirect()->route('draws.index')
                        ->with('success','Concursante almacenado Exitosamente. '.$text);*/
    }
}
