<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        $categories = $this->categoryService->all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $parent, ?string $child = null)
    {
//        // Найти родительскую категорию
//        $parentCategory = Category::where('slug', $parent)->firstOrFail();
//
//        if ($child) {
//            $childCategory = Category::where('slug', $child)
//                ->where('parent_id', $parentCategory->id)
//                ->firstOrFail();
//
//            // Показать подкатегорию
//            return view('categories.show', compact('childCategory'));
//        }
//
//        // Показать родительскую категорию
//        return view('categories.show', compact('parentCategory'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
