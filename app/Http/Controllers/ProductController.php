<?php

namespace App\Http\Controllers;
use  App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //OBTENER LISTADO
    public function index()
    {
    $products = Product::All();
    return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //CREAR NUEVO PRODUCTO
    public function store(Request $request)
    {
      $products=new Product();
      $products->name=$request->name;
      $products->description=$request->description;
      $products->amount=$request->amount;
      $products->price =$request->price;
      $products->save();


    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //ACTUALIZAR PRODUCTO
    public function update(Request $request)
    {
        $products= Product::findOrFail($request->id);
        $products->name=$request->name;
        $products->description=$request->description;
        $products->amount=$request->amount;
        $products->price =$request->price;

      $products->save();
      return  $products;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //ELIMINAR PRODUCTO
    public function destroy(Request $request)
    {
     Product::destroy($request->id);
     return $products;
    }
}
