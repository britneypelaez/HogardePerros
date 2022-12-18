<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::paginate(5);
        return view('HomeFundacion.Servicios.index', compact('servicios'));
    }

    public function indexServicioCliente()
    {
        $Servicios=Servicio::all();
        return view('Home.ServiciosVeterinario',compact('Servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HomeFundacion.Servicios.crear');
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
            'nombre_serviciio' => 'required',
            'descripcion' => 'required',
            'imagen_servicio' => 'required',
        ]);
        $profileImage = time() . '.' . $request->file('imagen_servicio')->getClientOriginalExtension();
        Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_servicio')->getPathName()) );
        $servicio = new Servicio();
        $servicio->nombre_serviciio = request()->nombre_serviciio;
        $servicio->descripcion = request()->descripcion;
        $servicio->imagen_servicio = $profileImage;
        $servicio->id_fundacion = 1;
        $servicio->save();
        return redirect()->route('Servicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $Servicio)
    {
        return view('HomeFundacion.Servicios.editar', compact('Servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $Servicio)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_serviciio' => 'required',
            'descripcion' => 'required',
        ]);
        //Recibiendo un archivo de tipo imagen y tranformadolo en una ruta para así guardarlo en la base de datos
        if ($request->has('imagen_servicio')){
            $profileImage = time() . '.' . $request->file('imagen_servicio')->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_servicio')->getPathName()) );
            $Servicio->imagen_servicio = $profileImage;
        }
        //operador ternario, siempre preguntará si le llega algo de ese dato, de ser así reemplacelo, sino, deje el anterior
        $Servicio->nombre_serviciio = $request->has('nombre_serviciio') ? $request->nombre_serviciio : $Servicio->nombre_serviciio;
        $Servicio->descripcion = $request->has('descripcion') ? $request->descripcion : $Servicio->descripcion;
        $Servicio->save();

        return redirect()->route('Servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $Servicio)
    {
        $Servicio->delete();
        return redirect()->route('Servicios.index');
    }
}
