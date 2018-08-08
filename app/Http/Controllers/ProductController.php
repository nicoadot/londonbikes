<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Producto;
use  App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Producto::all();
      $view = view('productos');
      return $view->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->sortBy("descripcion");
        return view('productos/create')->with('categorias',$categorias);
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
          'descripcion' => 'required|max:255',
          'preciounitario' => 'required|integer|min:0',
          'avatar' => 'required|max:255',
       ]);

        $producto = new Producto;
        $producto->descripcion = $request->input('descripcion');
        $producto->preciounitario = $request->input('preciounitario');
        $producto->idcategoria = $request->input('idcategoria');
        $folder = "productos";
        $file = $request->file("avatar");
        $name = $request->input('descripcion') . "." . $file->extension();
        $ruta = $file->storeAs($folder,$name);
        $producto->avatar = $ruta;
        $producto->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categoria::all()->sortBy("descripcion");
        $producto = DB::table('productos')->where('id', $id)->first();
        return view('productos.show')->with('producto',$producto)->with('categorias',$categorias);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all()->sortBy("descripcion");
        $producto = DB::table('productos')->where('id', $id)->first();
        return view('productos.edit')->with('producto',$producto)->with('categorias',$categorias);
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
        $this->validate($request, [
            'descripcion' => 'required|max:255',
            'preciounitario' => 'required|integer|min:0',
            'avatar' => 'required|max:255',
          ]);

        $folder = "productos";
        $file = $request->file("avatar");
        $name = $id.".".$file->extension();
        $ruta = $request->file("avatar")->storeAs($folder,$name,'public');
        $producto = Producto::where('id', $id)->first();
        $producto->descripcion = $request->input('descripcion');
        $producto->preciounitario = $request->input('preciounitario');
        $producto ->idcategoria = $request->input('idcategoria');
        $producto->avatar = $ruta;
        $producto ->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::where('id', $id)->first();
        $producto->delete();
        return redirect('/productos');
    }
}
