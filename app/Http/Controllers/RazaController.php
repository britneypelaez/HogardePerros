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

        $result = Raza::where('especie', 'like', "%$especie%")->get();

        return response()->json($result);
    }
}
