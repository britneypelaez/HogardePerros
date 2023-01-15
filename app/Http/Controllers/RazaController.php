<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;

class RazaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function search(Request $request)
    {
        $especie = $request->especie;

        if($especie == 0){
            $result = Raza::all();
        }else{
            $result = Raza::where('especie', 'like', "%$especie%")->get();
        }

        return response()->json($result);
    }
}
