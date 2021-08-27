<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    private function validateRequest(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0.01',
            'spice' => 'nullable|numeric|min:0|max:5',
            'vegan' => 'nullable',
            'gluten' => 'nullable',
            'images' => 'image|max:5120',
        ]);
    }

    public function index() {
        return ProductResource::collection(Product::all());
    }

    public function read($id) {
        return new ProductResource(Product::findOrFail($id));
    }

    public function delete($id) {
        if ($product = Product::find($id)) {
            $product->delete();

            return response()->json([
                'status' => 'ok',
                'data' => array()
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'data' => 'delete unsuccessful',
        ], 400);
    }

    public function store(Request $request) {
        $this->validateRequest($request);

        $product = new Product();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->spice = $request->spice;
        $product->vegan = $request->vegan;
        $product->gluten = $request->gluten;

        $product->save();

        foreach ($request->images as $uploaded_image) {
            $image = new Image();

            $image->path = url('/storage/') . '/' . $uploaded_image->store('images', 'public');
            $image->product_id = $product->id;

            $image->save();
        }

        return response()->json([
            'status' => 'ok',
            'data' => $product
        ], 200);
    }

    public function update(Request $request, $id) {
        $this->validateRequest($request);

        $product = Product::findOrFail($id);

        $product->fill($request->all());

        $product->save();

        return response()->json([
            'status' => 'ok',
            'data' => $product
        ], 200);
    }
}
