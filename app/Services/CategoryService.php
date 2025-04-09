<?php
declare(strict_types=1);

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class CategoryService
{

    protected CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function all(): LengthAwarePaginator
    {
       return $this->categoryRepository->all();
    }

}
