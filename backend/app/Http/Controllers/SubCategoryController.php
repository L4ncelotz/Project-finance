<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategoryRequest;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return SubCategory::all();
    }

    public function store(SubCategoryRequest $request)
    {
        $subCategory = SubCategory::create($request->validated());
        return response()->json($subCategory, 201);
    }

    public function show($id)
    {
        return SubCategory::findOrFail($id);
    }

    public function update(SubCategoryRequest $request, $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request->validated());
        return response()->json($subCategory, 200);
    }

    public function destroy($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();
        return response()->json(null, 204);
    }
} 