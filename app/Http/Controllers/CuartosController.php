<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Cuarto;

class CuartosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuartos = Cuarto::orderBy('id', 'DESC')->paginate(5);
        $num  = 1;

        return view('listarCuartos', compact('cuartos', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrarCuartos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuartos = new Cuarto;
        if( $request->file('file') ){
            $ruta = Storage::disk('public')->put('Image', $request->file('file'));
        }

        $cuartos->numero = $request->numero;
        $cuartos->descripcion = $request->descripcion;
        $cuartos->foto = $ruta;

        $cuartos->save();

        return redirect()->route('cuartos.index')->with('info', 'Nueva habitación añadida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuartos = Cuarto::find($id);

        return view('verCuarto', compact('cuartos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuartos = Cuarto::find($id);

        return view('editarCuarto', compact('cuartos'));
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

        $cuartos = Cuarto::find($id);

        if( $request->file('file') ){
            $ruta = Storage::disk('public')->put('Image', $request->file('file'));
        }

        $cuartos->numero = $request->numero;
        $cuartos->descripcion = $request->descripcion;
        $cuartos->foto = $ruta;
        $cuartos->save();

        return redirect()->route('cuartos.index')->with('info', 'La habitación fue editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuartos = Cuarto::find($id);
        $cuartos->delete();

        return back()->with('info', 'La habitación fue eliminada');
    }
}
