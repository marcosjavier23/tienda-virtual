<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);

        return view('admin.products.index', compact('products'));
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
      

        return view('admin.products.create', compact('categories'));
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.edit', $product->id)->with('info', 'Producto creado con éxito');
    }
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {
        $product = Product::find($id);
        $category_id = Category::find($id);
        

        return view('admin.products.show', compact('product', 'category_id'));
    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
       
        $product    = Product::find($id);

        return view('admin.products.edit', compact('product', 'categories'));
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
        $product = Product::find($id);

        $product->fill($request->all())->save();

        return redirect()->route('products.edit', $product->id)->with('info', 'Producto actualizado con éxito');
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

}
