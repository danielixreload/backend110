<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;

class DenunciaController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-denuncia|crear-denuncia|borrar-denuncia')->only('index');
        $this->middleware('permission:crear-denuncia',['only'=>['create','store']]);
        $this->middleware('permission:editar-denuncia',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-denuncia',['only'=>['destroy']]);
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $denuncias = Denuncia::paginate(5);
       return view('denuncias.index', compact('denuncias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denuncias.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'denunciante' =>'required',
            'fecha_denuncia' =>'required',
            'ubicacion' =>'required',
            'audio',
             'foto', 
             'video', 
             'victima_o_testigo' => 'required',
             'tipo' => 'required',
            
        ]);
        Denuncia::create($request->all());
        return redirect()->route('denuncias.index');
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
    public function edit(Denuncia $denuncia)
    {
        return view('denuncias.editar', compact('denuncia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denuncia $denuncia)
    {
        request()->validate([
            'denunciante' =>'required',
           
            'fecha_denuncia' =>'required',
            'ubicacion' =>'required',
            'audio',
             'foto', 
             'video', 
             'victima_o_testigo' => 'required',
             'tipo' => 'required',
            

        ]);
        $denuncia->update($request->all());
        return redirect()->route('denuncias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Denuncia $denuncia)
    {
        $denuncia->delete();
        return redirect()->route('denuncias.index');
    }
}
