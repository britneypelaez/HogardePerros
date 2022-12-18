<?php

namespace App\Http\Controllers;

use App\Models\Campania;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanias = Campania::paginate(5);
        return view('HomeFundacion.Campanias.index', compact('campanias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HomeFundacion.Campanias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_campania' => 'required',
            'descripcion' => 'required',
            'meta_donaciones' => 'required|numeric',
            'actual_donado' => 'required|numeric',
            'imagen_campania' => 'required',
        ]);
        $profileImage = time() . '.' . $request->file('imagen_campania')->getClientOriginalExtension();
        Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_campania')->getPathName()) );
        $campania = new Campania();
        $campania->nombre_campania = request()->nombre_campania;
        $campania->descripcion = request()->descripcion;
        $campania->meta_donaciones = request()->meta_donaciones;
        $campania->actual_donado = request()->actual_donado;
        $campania->imagen_campania = $profileImage;
        $campania->id_fundacion = 1;
        $campania->save();
        return redirect()->route('Campanias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Campania $Campania)
    {
        return view('HomeFundacion.Campanias.editar', compact('Campania'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campania $Campania)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_campania' => 'required',
            'descripcion' => 'required',
            'meta_donaciones' => 'required|numeric',
            'actual_donado' => 'required|numeric',
        ]);
        //Recibiendo un archivo de tipo imagen y tranformadolo en una ruta para así guardarlo en la base de datos
        if ($request->has('imagen_campania')){
            $profileImage = time() . '.' . $request->file('imagen_campania')->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_campania')->getPathName()) );
            $Campania->imagen_campania = $profileImage;
        }
        //operador ternario, siempre preguntará si le llega algo de ese dato, de ser así reemplacelo, sino, deje el anterior
        $Campania->nombre_campania = $request->has('nombre_campania') ? $request->nombre_campania : $Campania->nombre_serviciio;
        $Campania->descripcion = $request->has('descripcion') ? $request->descripcion : $Campania->descripcion;
        $Campania->meta_donaciones = $request->has('meta_donaciones') ? $request->meta_donaciones : $Campania->meta_donaciones;
        $Campania->actual_donado = $request->has('actual_donado') ? $request->actual_donado : $Campania->actual_donado;
        $Campania->save();

        return redirect()->route('Campanias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campania $Campania)
    {
        $Campania->delete();
        return redirect()->route('Campanias.index');
    }
}
