<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Area;
use App\User;
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::orderBy('idArea', 'asc')
        ->where('clasificacion', 'area')
        ->get();

        $subareas = Area::orderBy('idArea', 'asc')
        ->where('clasificacion', 'subarea')
        ->get();
        return view('areas.edit', compact(['areas', 'subareas']));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombreArea' => 'required|string',
            'descripcionArea' => 'required|string',
            'clasificacion' => 'required|string',
        ]);
        Area::create([
            'nombreArea' => $request['nombreArea'],
            'descripcionArea' => $request['descripcionArea'],
            'clasificacion' => $request['clasificacion'],
        ]);
        return response()->json([
            'message' => 'Se agrego correctamente!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Area::join('tiene', 'area.idArea','=','tiene.idArea')
        ->where('tiene.idArea','=',$id)
        ->join('docente','tiene.idDoc','=','docente.idDoc')
        ->get();
        return response()->json([
            'area' => Area::where('idArea', $id)->firstOrFail(),
            'docente' => $docente
        ]);
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
