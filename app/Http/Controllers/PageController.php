<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected PageService $pageService;
    protected CategoryService $categoryService;

    public function __construct(PageService $pageService, CategoryService $categoryService)
    {
        $this->pageService = $pageService;
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        $pages = $this->pageService->all();
        return view('blog.index', compact('pages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
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

    public function home()
    {
        $categories = $this->categoryService->getMenuCategories();
        $page = $this->pageService->findBySlug('home');
        return view('blog.index', compact('page','categories'));
    }
}
