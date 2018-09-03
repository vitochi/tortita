<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras=Compra::orderBy('id','DESC')->paginate(3);
        return view('compra.index',compact('compras')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'fecha'=>'required', 'proveedor'=>'required', 'total'=>'required']);
        Compra::create($request->all());
        return redirect()->route('compra.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compras=Compra::find($id);
        return  view('compra.show',compact('compras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $compra=Compra::find($id);
        return view('compra.edit',compact('compra'));
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
        $this->validate($request,[ 'fecha'=>'required', 'proveedor'=>'required', 'total'=>'required']);
 
        Compra::find($id)->update($request->all());
        return redirect()->route('compra.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compra::find($id)->delete();
        return redirect()->route('compra.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
