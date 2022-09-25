<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Store;

class ProductController extends Controller
{

    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //dd('OI');
       $product = \App\Product::paginate(10);
       return view ('admin.products.index', compact('product'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = \App\Store::all(['id','name']); 
        
        return view('admin.products.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $verificaExisteProduto = \App\Product::where('name',$data['name'])->where('stores_id',$data['stores_id'])->exists();
        if($verificaExisteProduto ){
            return redirect()->route('index');
        }
        //dd($data);
         $stores = \App\Product::create($data);
        if(!$stores){
            return redirect()->route('index');
        }
        
        flash('Cadastro de Produto com Sucesso')->success();
        return redirect()->route('index');
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
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = $this->product->findOrFail($product);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $data = $request->all();
        $product = $this->product->find($product);
        $product->update($data);

        flash('Produto Atualizado com Sucesso!')->success();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $excluir = \App\Product::find($product);
        $excluir->delete();
        
        flash('Produto Excluido com Sucesso')->success();
        return redirect()->route('index');
        //return $product;
    }
}
