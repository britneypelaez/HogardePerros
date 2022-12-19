<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Especie;
use App\Models\Estado;
use App\Models\MascotaPerdida;
use App\Models\Mascota;
use App\Models\Raza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MascotaPerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MascotasPerdidas = MascotaPerdida::paginate(5);
        return view('HomeFundacion.MascotasPerdidas.index', compact('MascotasPerdidas'));
    }

    public function indexEncuentrameCliente()
    {
        $Mascotas = Mascota::paginate(12);
        $Colores = Color::all();
        $Especies = Especie::all();
        return view('Home.Adopcion', compact('Mascotas', 'Colores', 'Especies'));
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
        return view('HomeFundacion.MascotasPerdidas.crear', compact('razas', 'colores', 'especies'));
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
            'imagen_mascota' => 'required',
        ]);
        $profileImage = time() . '.' . $request->file('imagen_mascota')->getClientOriginalExtension();
        Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_mascota')->getPathName()) );
        $mascota = new MascotaPerdida();
        $mascota->nombre_mascota = request()->nombre_mascota;
        $mascota->descripcion = request()->descripcion;
        $mascota->raza = request()->raza;
        $mascota->color = request()->color;
        $mascota->estado = 4;
        $mascota->tamanio = request()->tamanio;
        $mascota->especie = request()->especie;
        $mascota->imagen_mascota = $profileImage;
        $mascota->id_user = Auth::user()->id;
        $mascota->save();
        return redirect()->route('MascotasPerdidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MascotaPerdida  $mascotaPerdida
     * @return \Illuminate\Http\Response
     */
    public function show(MascotaPerdida $mascotaPerdida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MascotaPerdida  $mascotaPerdida
     * @return \Illuminate\Http\Response
     */
    public function edit(MascotaPerdida $MascotasPerdida)
    {
        $razas = Raza::all();
        $colores = Color::all();
        $estados = Estado::all();
        $especies = Especie::all();

        return view('HomeFundacion.MascotasPerdidas.editar', compact('MascotasPerdida', 'razas', 'colores', 'estados', 'especies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MascotaPerdida  $mascotaPerdida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MascotaPerdida $MascotasPerdida)
    {
        //Validaciendo de los campos enviados desde la vista crear
        request()->validate([
            'nombre_mascota' => 'required',
            'descripcion' => 'required',
            'raza' => 'required',
            'color' => 'required',
            'tamanio' => 'required',
            'especie' => 'required',
        ]);
        //Recibiendo un archivo de tipo imagen y tranformadolo en una ruta para así guardarlo en la base de datos
        if ($request->has('imagen_mascota')){
            $profileImage = time() . '.' . $request->file('imagen_mascota')->getClientOriginalExtension();
            Storage::disk('public')->put($profileImage,file_get_contents($request->file('imagen_mascota')->getPathName()) );
            $MascotasPerdida->imagen_mascota = $profileImage;
        }
        //operador ternario, siempre preguntará si le llega algo de ese dato, de ser así reemplacelo, sino, deje el anterior
        $MascotasPerdida->nombre_mascota = $request->has('nombre_mascota') ?  $request->nombre_mascota : $MascotasPerdida->nombre_mascota;
        $MascotasPerdida->descripcion = $request->has('descripcion') ?  $request->descripcion : $MascotasPerdida->descripcion;
        $MascotasPerdida->raza = $request->has('raza') ?  $request->raza : $MascotasPerdida->raza;
        $MascotasPerdida->color = $request->has('color') ?  $request->color : $MascotasPerdida->color;
        $MascotasPerdida->estado = $request->has('estado') ?  $request->estado : $MascotasPerdida->estado;
        $MascotasPerdida->tamanio = $request->has('tamanio') ?  $request->tamanio : $MascotasPerdida->tamanio;
        $MascotasPerdida->especie = $request->has('especie') ?  $request->especie : $MascotasPerdida->especie;
        $MascotasPerdida->save();

        return redirect()->route('MascotasPerdidas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MascotaPerdida  $mascotaPerdida
     * @return \Illuminate\Http\Response
     */
    public function destroy(MascotaPerdida $MascotasPerdida)
    {
        $MascotasPerdida->delete();
        return redirect()->route('MascotasPerdidas.index');
    }

    public function search(Request $request)
    {
        $especie = $request->especie;
        $raza = $request->raza;
        $color = $request->color;
        $tamaño = $request->tamaño;
        //trae todas las mascotas
        if ($especie == '0' && $raza == '0' && $color == '0' && $tamaño == '0') {
            $result = MascotaPerdida::paginate(12);
        }
        //filtra las Mascotas Perdidas solo por especie
        if ($especie != '0' && $raza == '0' && $color == '0' && $tamaño == '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->paginate(12);
        }
        //filtra las Mascotas Perdidas solo por color
        if ($especie == '0' && $raza == '0' && $color != '0' && $tamaño == '0') {
            $result = MascotaPerdida::where('color', 'like', "%$color%")->paginate(12);
        }
        //filtra las Mascotas Perdidas solo por tamaño
        if ($especie == '0' && $raza == '0' && $color == '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie y raza
        if ($especie != '0' && $raza != '0' && $color == '0' && $tamaño == '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('raza', 'like', "%$raza%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie y color
        if ($especie != '0' && $raza == '0' && $color != '0' && $tamaño == '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('color', 'like', "%$color%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie y tamaño
        if ($especie != '0' && $raza == '0' && $color == '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por color y tamaño
        if ($especie == '0' && $raza == '0' && $color != '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('color', 'like', "%$raza%")->where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie,raza y color
        if ($especie != '0' && $raza != '0' && $color != '0' && $tamaño == '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('raza', 'like', "%$raza%")->where('color', 'like', "%$color%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie,raza y tamaño
        if ($especie != '0' && $raza != '0' && $color == '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('raza', 'like', "%$raza%")->where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie,color y tamaño
        if ($especie != '0' && $raza == '0' && $color != '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('color', 'like', "%$color%")->where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }
        //filtra las Mascotas Perdidas por especie,raza,color y tamaño
        if ($especie != '0' && $raza != '0' && $color != '0' && $tamaño != '0') {
            $result = MascotaPerdida::where('especie', 'like', "%$especie%")->where('raza', 'like', "%$raza%")->where('color', 'like', "%$color%")->where('tamanio', 'like', "%$tamaño%")->paginate(12);
        }

        return response()->json($result);
    }

}
