<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
                
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));//listado

    }

    public function create()
    {
        return view('admin.products.create');//lformulario
        
    }

    public function store(Request $request)
    {
    
        //registrar new product
        $message =[

            'name.required' => 'Ingrese un nombre de producto.',
            'name.min' => 'Nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'Ingrese una descripcion corta de producto.',
            'description.min' => 'La descripcion corta del producto solo admite 200 caracteres.',
            'price.required' => 'Ingrese un precio de producto.',
            'price.numerico' => 'Ingrese precio valido.',
            'price.min' => 'No numeros negativos'
        ];

        //validacion
        $rules = [
            'name'=> 'required|min:3', 
            'description'=> 'required|max:200',
            'price'=> 'required|numeric|min:0',
        ];

        $this->validate($request, $rules, $message);

        //dd($request->all());
    
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save();
    
        return redirect('/admin/products');
    }

    public function edit($id)
    {
       
        $product = Product::find($id);
        return view('admin.products.edit')->with(compact('product'));//lformulario
        
    }

    public function update(Request $request, $id)
    {
    
        //registrar new product
        $message =[

            'name.required' => 'Ingrese un nombre de producto.',
            'name.min' => 'Nombre del producto debe tener al menos 3 caracteres.',
            'description.required' => 'Ingrese una descripcion corta de producto.',
            'description.min' => 'La descripcion corta del producto solo admite 200 caracteres.',
            'price.required' => 'Ingrese un precio de producto.',
            'price.numerico' => 'Ingrese precio valido.',
            'price.min' => 'No numeros negativos'
        ];

        //validacion
        $rules = [
            'name'=> 'required|min:3', 
            'description'=> 'required|max:200',
            'price'=> 'required|numeric|min:0',
        ];

        $this->validate($request, $rules, $message);
        //dd($request->all());
    
        $product =  Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->long_description = $request->input('long_description');
        $product->save();
        
        return redirect('/admin/products');
    }

    
    public function destroy(Request $request, $id)
    {
    
        //registrar new product

        //dd($request->all());
    
        $product =  Product::find($id);
        $product->delete();
        
        return back();
    }

}
