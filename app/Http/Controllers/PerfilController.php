<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;
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
class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('perfiles.index');
        $estudiantes = Estudiante::orderBy('apellidoEst', 'asc')->paginate(500);
        $docentes = Docente::orderBy('apePaternoDoc', 'asc')->paginate(500);
        $areas = Area::orderby('nombreArea','asc')
        ->where('clasificacion','area')
        ->get();
        $carreras = Carrera::orderby('idCarrera','asc')
        //$carreras = Carrera::all();
       // dd($carreras);
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
        return view('perfiles.index', compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rules = [
            'idPerfil' => 'required|integer',
            'nombreCarr' => 'required|string',
            'objetivoGen' => 'required|string',
            'objetivoEsp' => 'required|string',
            'modalidad' => 'required|string',
            'area' => 'required|string',
            'subarea' => 'required|string',
            'tutor' => 'required|string',
        ];

        $messages =[
            'name.required' => 'Es necesario ingresar el nombre del usuario.',
            'name.max' => 'El nombre es demasiado extenso.',
            'email.required' => 'Es indispensable ingresar el e-mail del usuario.',
            'email.email' => 'El e-mail ingresado no es valido.',
            'email.max' => 'El e-mail es demasiado extenso.',
            'email.unique' => 'Este e-mail ya se encuentra en uso.',
            'password.required' => 'olvido ingresar una contraseña.',
            'password.min' => 'La contraseña debe presentar al menos 6 caracteres.'
        ];
        $this->validate($request, $rules);

        $user = new Perfils();
        $user->name = $request->input('idPerfil');
        $user->nombreCarr = $request->input('nombreCarr');
        $user->objetivoGen = $request->input('objetivoGen');
        $user->objetivoEsp = $request->input('objetivoEsp');
        $user->modalidad = $request->input('modalidad');
        $user->area = $request->input('area');
        $user->subarea = $request->input('subarea');
        $user->tutor = $request->input('tutor');
        $user->save();
        return back()->with('notification', 'Usuario registrado exitosamente.');
        // dd($request->all());
        // return back();
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
