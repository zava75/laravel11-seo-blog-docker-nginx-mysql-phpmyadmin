<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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

    public function create(array $data): Category
    {
        // Можно добавить валидацию данных, если нужно
        return $this->categoryRepository->create($data);
    }

    public function update(int $id, array $data): Category
    {
        $category = $this->categoryRepository->find($id);
        $category->update($data);

        return $category;
    }

    public function delete(int $id): bool
    {
        $category = $this->categoryRepository->find($id);
        return $category->delete();
    }

    public function findById(int $id): Category
    {
        return $this->categoryRepository->find($id);
    }

    public function getMenuCategories(): Collection
    {
        return $this->categoryRepository->getForMenu();
    }

}
