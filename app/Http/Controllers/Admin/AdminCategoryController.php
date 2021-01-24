<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('translations')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        $maxOrder = Category::max('order');
        Category::create([
            "order" => $maxOrder+1,
            "en" => ["title" => $request->title['en']],
            "ru" => ["title" => $request->title['ru']],
            "am" => ["title" => $request->title['am']]
        ]);

        return redirect()->route('admin-dashboard.categories.index');
    }

    public function edit($locale, $cateogryId)
    {
        $category = Category::findOrFail($cateogryId);
        return view('admin.categories.edit', compact('category'));
    }

    public function update($locale, $cateogryId, StoreCategoryRequest $request)
    {
        $category = Category::findOrFail($cateogryId);
        $category->update(
            ["en" => ["title" => $request->title['en']],
            "ru" => ["title" => $request->title['ru']],
            "am" => ["title" => $request->title['am']]]
        );

        return back();
    }

    public function delete($locale, $cateogryId)
    {
        $category = Category::findOrFail($cateogryId);
        $category->delete();
        return back();
    }
}
