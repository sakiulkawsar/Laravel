<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\produdct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProdudctController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $data = produdct::all();
        return view('backend.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $data = Category::all();
        return view('backend.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                 $request->validate(
        [
            'porduct_name' => 'required|max:303|min:3', //validation rule
             'price' => 'required',
             'stock' => 'required',
             'category' => 'required',
             'sku' => 'required',
             'photo' => 'image|mimes:jpeg,pnp,jpg|max:2048',



        ]
          );
          $product_img = '';
          if($request->photo==null){
            $product_img = 'product_photo/nophoto.jpg';
          }
          else{
            $product_img =request()->photo->move
            ('product_photo',$request->photo->getClientOriginalName());
          
           
        }

        //data
        $data = [
            'name' => $request->porduct_name,
            'details' => $request->details,
            'sku' => $request->sku,
            'stock' => $request->stock,
            'price' => $request->price,
            'image' => $product_img,
            'category_id' => $request->category,
            
           
        ];
       produdct::create($data);
        return redirect()->route('product.index')->with('success', 'Product created successfully');
     
  
    }

    /**
     * Display the specified resource.
     */
    public function show(produdct $produdct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produdct $produdct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produdct $produdct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produdct $product)

    {
        // $product_img;
$imagePath = public_path($product->image);

if (file_exists($imagePath)) {
    unlink($imagePath);
}

$product->delete();

return redirect()->route('product.index')
    ->with('success', 'Successfully deleted');

    }
}
