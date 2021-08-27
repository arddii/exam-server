<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    private function validateRequest(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'max:255',
        ]);
    }

    public function index() {
        return CategoryResource::collection(Category::all());
    }

    public function read($id) {
        return new CategoryResource(Category::findOrFail($id));
    }

    public function delete($id) {
        if ($category = Category::find($id)) {
            $category->delete();

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

        $category = new Category();

        $category->title = $request->title;
        $category->description = $request->description;

        $category->save();

        return response()->json([
            'status' => 'ok',
            'data' => $category
        ], 200);
    }

    public function update(Request $request, $id) {
        $this->validateRequest($request);

        $category = Category::findOrFail($id);

        $category->fill($request->all());

        $category->save();

        return response()->json([
            'status' => 'ok',
            'data' => $category
        ], 200);
    }
}
