<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();
        return response()->json($categories);
    }
    public function store(StoreCategoryRequest $request){
        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();


    }
    public function show($id){

        $category = Category::findOrFail($id);

        return response()->json($category);
    }

    public function destroy($id){
        $category = Category::findOrFail($id);

        $category->delete();

        return response()->json([
            'message' => "Category was deleted succesfully"
        ]);
    }

       public function update(UpdateCategoryRequest $request, $id){
        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->update();

        return response()->json([
            'message' => 'user was updated succesfullu'
        ]);
    }
}


