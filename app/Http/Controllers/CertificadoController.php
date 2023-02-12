<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Certificado;
use App\Models\Fundacion;
use Illuminate\Http\Request;
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
            Log::info($template);
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
            return [false, $e->getMessage() . ' - ' . $e->getLine() . ' - ' . $e->getFile()];
        }

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
