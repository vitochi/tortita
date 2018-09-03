<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $insumos=Insumo::orderBy('id','DESC')->paginate(10);
        return view('insumo.index',compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insumo.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 'proveedor'=>'required', 'medida'=>'required', 'cantidad'=>'required', 'price'=>'required']);
        Insumo::create($request->all());
        return redirect()->route('insumo.index')->with('success','Registro creado satisfactoriamente');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insumos=Insumo::find($id);
        return  view('insumo.show',compact('insumos'));
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
        $insumo=Insumo::find($id);
        return view('insumo.edit',compact('insumo'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
         $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 'proveedor'=>'required', 'medida'=>'required', 'cantidad'=>'required', 'price'=>'required']);
 
        Insumo::find($id)->update($request->all());
        return redirect()->route('insumo.index')->with('success','Registro actualizado satisfactoriamente');
 
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
         Insumo::find($id)->delete();
        return redirect()->route('insumo.index')->with('success','Registro eliminado satisfactoriamente');
    }
    
}
