<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductModel::all();
        return view('admin.product.v_product', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.v_createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'colour' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
        ]);
        if ($request->hasFile('image')) {
            $image_file = $request->file('image');
            $image_extension = $image_file->extension();
            $image_name = $request->title . "." . $image_extension;
            $path = $request->file('image')->storeAs('image_admin/product', $image_name);

        $product = new ProductModel([
            'title' => $request->title,
            'type' => $request->type,
            'weight' => $request->weight,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'colour' => $request->colour,
            'image' => $image_name,
        ]);
        $product->save();
        }
        return redirect()->route('product')->with('pesan', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_product)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        $product = ProductModel::findOrFail($id_product);
        if($request->hasFile('image')){
            if (File::exists('storage/image_admin/product'. '/' . $product->image) ) {
                File::delete('storage/image_admin/product'. '/' . $product->image);
            }
            $image_file = $request->file('image');
            $image_extension = $image_file->extension();
            $image_name = $request->title . "." . $image_extension;
            $path = $request->file('image')->storeAs('image_admin/product', $image_name);
            
            $product->update([
                'title' => $request->title,
                'type' => $request->type,
                'weight' => $request->weight,
                'length' => $request->length,
                'width' => $request->width,
                'height' => $request->height,
                'colour' => $request->colour,
                'image' => $image_name,
            ]);
        } else {
            $product->update([
                'title' => $request->title,
                'type' => $request->type,
                'weight' => $request->weight,
                'length' => $request->length,
                'width' => $request->width,
                'height' => $request->height,
                'colour' => $request->colour,
            ]);
        }
        return redirect()->route('product')->with('pesan', 'Data update successfully');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product)
    {
        $product = ProductModel::findOrFail($id_product);
        if (File::exists('storage/image_admin/product'. '/' . $product->image) ) {
            File::delete('storage/image_admin/product'. '/' . $product->image);
            $product->delete();
        }
        
        return redirect()->route('product')->with('pesan', 'Data Deleted Successfully');
    }
}
