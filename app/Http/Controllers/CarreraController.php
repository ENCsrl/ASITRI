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
use App\User;
class CarreraController extends Controller
{
    //
    public function index(Request $request)
    {
        // $carreras = Carrera::all();
        $carreras = Carrera::name($request->get('name'))->orderBy('nombreCarrera','DESC')->paginate();
        return view('carreras.createcarrera',compact('carreras'));
    }
    //se aumento una s a creates 
    public function create()
    {
        return view('carreras.create');
    }
    public function guardar(Request $request)
    {
        $this->validate($request,[
            'nombreCarrera' => 'required'
        ]);
        Carrera::create($request->all());
        //dd($request->all());
       return back();
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nombreCarrera' => 'required|string',
        ]);
        // Carrera::create([
        //     'nombreCarrera' => $request['nombreCarrera'],
        // ]);
        $carrera = new Carrera();
        $carrera->nombreCarrera = $request->nombreCarrera;
        
        if($carrera->save()){
            return back()->with('msj','Datos guardados');
        }else{
            return back()->with('nmsj','Los datos no se guardaron');
        }
       
        // return back()->with('msj','Se guardaro datos correctaente');

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