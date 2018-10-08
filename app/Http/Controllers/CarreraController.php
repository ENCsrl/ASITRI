<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proyecto;
use App\Carrera;
use App\Estudiante;
use App\Area;
use App\Modalidad;
use App\Proyecto_has_area;
use App\Proyecto_estudiante;
use App\Docente;
use App\Asignacion;
use App\Renuncia;
use DB;
use App\Http\Requests;

class CarreraController extends Controller
{
    //
    public function index()
    {
        //return view ('proyectos.mainproyecto');
        //$carreras = Carrera::orderBy('idCarrera', 'des')->paginate(500);
        //return view('carreras.createcarrera',compact('carreras'));
        $carreras_v =Carrera::orderBy('nombreCarrera','des')
        ->where('nombreCarrera')
        ->get();
        return view(carreras.createcarrera);
    }
    public function create()
    {
        $estudiantes = Estudiante::orderBy('apellidoEst', 'asc')->paginate(500);
        $docentes = Docente::orderBy('apePaternoDoc', 'asc')->paginate(500);
        $areas = Area::orderby('nombreArea','asc')
        ->where('clasificacion','area')
        ->get();
        $carreras = Carrera::orderby('idCarrera','asc')
       // ->where('clasificacion','area')
        ->get();
        $subareas = Area::orderby('nombreArea','asc')
        ->where('clasificacion','subarea')
        ->get();
        $modalidades = Modalidad::orderby('nombreMod','asc')->paginate(500);
        

        $res[0]=$estudiantes;
        $res[1]=$docentes;
        $res[2]=$areas;
        $res[3]=$modalidades;
        $res[4]=$subareas;
        $res[5]=$carreras;
        return view('carreras.createcarrera', compact('res'));
    }
    // public function store(Request $request)
    // {

    //     $mytime = \Carbon\Carbon::now();



    //     $this->validate($request, [
    //         'titulo' => 'required|string',
    //         'objetivos' => 'required|string',
    //         'descripcion' => 'required|string',
    //         'periodo' => 'required|string',
    //         'idModalidad' => 'required|integer',

        
    //     ]);
    // }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nombreCarrera' => 'required|string',
            // 'nombreEst' => 'required|string',
            // 'apellidoEst' => 'required|string',
            // 'emailEst' => 'required|email',
            // 'telefono' => 'required|integer',
        ]);
        Carrera::create([
            'nombreCarrera' => $request['nombreCarrera'],
            // 'nombreEst' => $request['nombreEst'],
            // 'apellidoEst' => $request['apellidoEst'],
            // 'emailEst' => $request['emailEst'],
            // 'telefono' => $request['telefono'],
            // 'idCarrera' => $request['idCarrera'],
        ]);
        return response()->json([
            'message' => 'Se agrego correctamente!',
        ]);   

    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*return response()->json([
            'message' => $id,
        ]);*/
        $this->validate($request, [
            'nombreCarrera' => 'required|string',
        ]);
        Carrera::where('idCarrera', $id)->update(
            array(
                'nombreCarrera' => $request->nombreCarrera,
                // 'nombreEst' => $request->nombreEst,
                // 'apellidoEst' => $request->apellidoEst,
                // 'emailEst' => $request->emailEst,
                // 'telefono' => $request->telefono,
                // 'idCarrera' => $request->idCarrera,
            )
        );
        return response()->json([
            'message' => 'Se modifico correctamente!',
        ]);
    }
}