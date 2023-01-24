<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Certificado;
use App\Models\Fundacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpWord\TemplateProcessor;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificados = Certificado::paginate(10);
        return view('HomeFundacion.Certificados.index', compact('certificados'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HomeFundacion.Certificados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //Validaciendo de los campos enviados desde la vista crear
            request()->validate([
                'nombre' => 'required',
                'identificacion' => 'required|numeric',
                'fecha' => 'required',
                'monto' => 'required|numeric',
            ]);
            $template = storage_path() . '/app/public/template/certificado/formulario_certificado.docx';
            $directoryDocument = storage_path() . '/app/public/document/certifications/';
            $nomPDF = Carbon::now();
            $nomPDF = str_replace(' ', '', $nomPDF);
            $nomPDF = str_replace(':', '', $nomPDF);
            $nomPDF = str_replace('-', '', $nomPDF);
            $nombre_fundacion = Fundacion::find(Auth::user()->id_fundacion);
            $templateWord = new TemplateProcessor($template);
            foreach ($templateWord->getVariables() as $variable) {
                switch ($variable) {
                    case 'nombre_duenio':
                        $templateWord->setValue($variable, Auth::user()->name);
                        break;
                    case 'nombre_fundacion':
                        $templateWord->setValue($variable, $nombre_fundacion->nombre);
                        break;
                    case 'nombre_donante':
                        $templateWord->setValue($variable, request()->nombre);
                        break;
                    case 'identificacion':
                        $templateWord->setValue($variable, request()->identificacion);
                        break;
                    case 'fecha':
                        $templateWord->setValue($variable, request()->fecha);
                        break;
                    case 'monto':
                        $templateWord->setValue($variable, request()->monto);
                        break;
                }
            }
            $templateWord->saveAs($directoryDocument . $nomPDF . '.docx');
            $nombre_documento = $nomPDF . '.docx';
            $certificado = new Certificado();
            $certificado->nombre = request()->nombre;
            $certificado->id_fundacion = Auth::user()->id_fundacion;
            $certificado->identificacion = request()->identificacion;
            $certificado->fecha = request()->fecha;
            $certificado->monto = request()->monto;
            $certificado->documento = $nombre_documento;
            $certificado->save();
            return redirect()->route('Certificados.index');
        } catch (\ErrorException $e) {
            Log::error($e->getMessage() . ' - ' . $e->getLine() . ' - ' . $e->getFile());
            return [false, $e];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Campania $Campania)
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
    /*public function update(Request $request, Campania $Campania)
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
    public function destroy(Certificado $Certificado)
    {
        $Certificado->delete();
        return redirect()->route('Certificados.index');
    }
}
