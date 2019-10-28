<?php
/* estos metodos mos ayudara para hace las 
instrucciones e interactuar los datos de 
la base de datos */
namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lis_proyectos = Proyecto::get();//select * from table 
        //dd($lis_proyectos);// saber que volor tiene essa variable
        //pritf log
        return view('proyecto.index',compact('lis_proyectos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());

        $proy = new Proyecto;
        $proy->titu_proy = $request->titu_proy;
        $proy->justi_proy = $request->justi_proy;
        $proy->ambi_proy = $request->ambi_proy;
        $proy->pobla_proy = $request->pobla_proy;
        $proy->dirig_proy = $request->dirig_proy;
        $proy->doc_val_proy = $request->doc_val_proy;
        $proy->presu_proy = $request->presu_proy;
        $proy->metod_proy = $request->metod_proy;
        $proy->eje_proy = $request->eje_proy ;
        $proy->fe_ini_proy = $request->fe_ini_proy;
        $proy->fe_fin_proy = $request->fe_fin_proy;
        $proy->diag_proy = $request->diag_proy;
        $proy->resul_proy = $request->resul_proy;
        

        $proy->save();
        // $datosProyecto=request()->all();
      // $this->validate;  
      // $datosProyecto=request()->except("_token");
       // Proyecto::insert($datosProyecto);

        //return response()->json($datosProyecto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        
        return view('Proyecto.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
