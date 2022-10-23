<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Product::orderBy('name','asc')->get();

        return response()->json(
            [
                'status' => true,
                'data' => $category,
                'message' => 'Data Product List berhasil ditampilkan'
            ]
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $product = Product::make($request->all(), [
            // 'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        //  ]);
        // // $this->validate($request, [
        // //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // // ]);
        // // $image_path = $request->file('image')->store('image', 'public');
        // $uploadFolder = 'users';
        // $image = $request->file('image');
        // $image_uploaded_path = $image->store($uploadFolder, 'public');
        // $uploadedImageResponse = array(
        //     "image_name" => basename($image_uploaded_path),
        //     "image_url" => Storage::disk('public')->url($image_uploaded_path),
        //     "mime" => $image->getClientMimeType()
        //  );
        // $product = Product::create([
        //     'image' => $image_path,
        // ]);
        $input = $request->all();

        $product = Product::create($input);
        return response()->json(
            [
                'status' => true,
                'data' => $product,
                'message' => 'Data Product berhasil disimpan'
            ]
            );

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
            return response()->json(
                [
                    'status' => true,
                    'data' => $product,
                    'message' => 'Data berhasil ditampilkan'
                ]
                );
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
        $input = $request->all();
        // $category->nama = $input['nama'];
        // $category->slug = $input['slug'];
        // $category->description = $input['description'];
        // $category->user_id = $input['user_id'];
        // $category->save();
        $product->update($input);

        return response()->json(
            [
                'status' => true,
                'data' => $product,
                'message' => 'Data Product berhasil diupdate'
            ]
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            "success" => true,
            "data" => $product,
            "message" => "Product deleted successfully."
            
        ]);
    }
}
