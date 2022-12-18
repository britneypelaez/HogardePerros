<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Especie;
use App\Models\Estado;
use App\Models\Mascota;
use App\Models\Raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdopcionCliente()
    {
        $Mascotas = Mascota::paginate(12);
        return view('Home.Adopcion', compact('Mascotas'));
    }

    public function indexHome()
    {
        $Mascotas = Mascota::inRandomOrder()->limit(6)->get();
        return view('welcome', compact('Mascotas'));
    }

    public function index()
    {
        $mascotas = Mascota::paginate(5);
        return view('HomeFundacion.Mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $razas = Raza::all();
        $colores = Color::all();
        $especies = Especie::all();
        return view('HomeFundacion.Mascotas.crear', compact('razas', 'colores', 'especies'));
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
            'nombre_mascota' => 'required',
            'descripcion' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'tamanio' => 'required',
            'especie' => 'required',
            'edad' => 'required',
            'imagen_mascota' => 'required',
        ]);
        $profileImage = time() . '.' . $request->file('imagen_mascota')->getClientOriginalExtension();
        Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_mascota')->getPathName()) );
        $mascota = new Mascota();
        $mascota->nombre_mascota = request()->nombre_mascota;
        $mascota->descripcion = request()->descripcion;
        $mascota->raza = request()->raza;
        $mascota->color = request()->color;
        $mascota->estado = 2;
        $mascota->tamanio = request()->tamanio;
        $mascota->especie = request()->especie;
        $mascota->edad = request()->edad;
        $mascota->imagen_mascota = $profileImage;
        $mascota->id_fundacion = 1;
        $mascota->save();
        return redirect()->route('Mascotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $Mascota)
    {
        $razas = Raza::all();
        $colores = Color::all();
        $estados = Estado::all();
        $especies = Especie::all();

        return view('HomeFundacion.Mascotas.editar', compact('Mascota', 'razas', 'colores', 'estados', 'especies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $Mascota)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_mascota' => 'required',
            'descripcion' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'tamanio' => 'required',
            'especie' => 'required',
            'edad' => 'required',
            'estado' => 'required'
        ]);
        //Recibiendo un archivo de tipo imagen y tranformadolo en una ruta para así guardarlo en la base de datos
        if ($request->has('imagen_mascota')){
            $profileImage = time() . '.' . $request->file('imagen_mascota')->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_mascota')->getPathName()) );
            $Mascota->imagen_mascota = $profileImage;
        }
        //operador ternario, siempre preguntará si le llega algo de ese dato, de ser así reemplacelo, sino, deje el anterior
        $Mascota->nombre_mascota = $request->has('nombre_mascota') ?  $request->nombre_mascota : $Mascota->nombre_mascota;
        $Mascota->descripcion = $request->has('descripcion') ?  $request->descripcion : $Mascota->descripcion;
        $Mascota->raza = $request->has('raza') ?  $request->raza : $Mascota->raza;
        $Mascota->color = $request->has('color') ?  $request->color : $Mascota->color;
        $Mascota->estado = $request->has('estado') ?  $request->estado : $Mascota->estado;
        $Mascota->tamanio = $request->has('tamanio') ?  $request->tamanio : $Mascota->tamanio;
        $Mascota->especie = $request->has('especie') ?  $request->especie : $Mascota->especie;
        $Mascota->edad = $request->has('edad') ?  $request->edad : $Mascota->edad;
        //$mascota->id_fundacion = $request->has('id_fundacion') ?  $request->id_fundacion : $mascota->id_fundacion;
        $Mascota->save();

        return redirect()->route('Mascotas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $Mascota)
    {
        $Mascota->delete();
        return redirect()->route('Mascotas.index');
    }
}
