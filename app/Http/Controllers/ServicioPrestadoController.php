<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ServicioPrestado;

class ServicioPrestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ServiciosPrestados = ServicioPrestado::paginate(5);
        $usuarios = User::all();
        return view('HomeFundacion.ServiciosPrestados.index', compact('ServiciosPrestados', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('HomeFundacion.ServiciosPrestados.crear', compact('usuarios'));
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
            'nombre_servicio' => 'required',
            'nombre_cliente' => 'required',
            'id_cliente' => 'required',
            'descripcion' => 'required|max:255',
            'fecha' => 'required',
        ]);

        $servicioPrestado = new ServicioPrestado();
        $servicioPrestado->nombre_servicio = request()->nombre_servicio;
        $servicioPrestado->nombre_cliente = request()->nombre_cliente;
        $servicioPrestado->id_cliente = request()->id_cliente;
        $servicioPrestado->descripcion = request()->descripcion;
        $servicioPrestado->fecha = request()->fecha;
        $servicioPrestado->id_fundacion = 1;
        $servicioPrestado->save();
        return redirect()->route('ServiciosPrestados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicioPrestado  $servicioPrestado
     * @return \Illuminate\Http\Response
     */
    public function show(ServicioPrestado $servicioPrestado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicioPrestado  $servicioPrestado
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicioPrestado $ServiciosPrestado)
    {
        $usuarios = User::all();
        return view('HomeFundacion.ServiciosPrestados.editar', compact('ServiciosPrestado', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicioPrestado  $servicioPrestado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicioPrestado $ServiciosPrestado)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_servicio' => 'required',
            'nombre_cliente' => 'required',
            'id_cliente' => 'required',
            'descripcion' => 'required|max:255',
            'fecha' => 'required',
        ]);
        $ServiciosPrestado->nombre_servicio = $request->has('nombre_servicio') ?  $request->nombre_servicio : $ServiciosPrestado->nombre_servicio;
        $ServiciosPrestado->nombre_cliente = $request->has('nombre_cliente') ?  $request->nombre_cliente : $ServiciosPrestado->nombre_cliente;
        $ServiciosPrestado->id_cliente = $request->has('id_cliente') ?  $request->id_cliente : $ServiciosPrestado->id_cliente;
        $ServiciosPrestado->descripcion = $request->has('descripcion') ?  $request->descripcion : $ServiciosPrestado->descripcion;
        $ServiciosPrestado->fecha = $request->has('fecha') ?  $request->fecha : $ServiciosPrestado->fecha;
        $ServiciosPrestado->save();

        return redirect()->route('ServiciosPrestados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicioPrestado  $servicioPrestado
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicioPrestado $ServiciosPrestado)
    {
        $ServiciosPrestado->delete();
        return redirect()->route('ServiciosPrestados.index');
    }
}
