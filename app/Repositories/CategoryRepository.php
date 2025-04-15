<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryRepository
{

    public function all(): LengthAwarePaginator
    {

        return Category::select('id', 'name', 'parent_id', 'is_active', 'title', 'description')
            ->with(['children' => function ($query) {
                $query->select('id', 'name', 'parent_id', 'is_active', 'title', 'description');
            }])
            ->whereNull('parent_id')
            ->paginate(20);

    }

    public function create(array $data): ?Category
    {
        return Category::create($data);
    }

    public function update(array $data, int $id): int|bool
    {
        $user = Category::findOrFail($id);

        return $user->update($data);
    }

    public function delete(int $id): bool
    {
        $user = Category::findOrFail($id);

        return $user->delete();
    }

    public function find(int $id): ?Category
    {
        return Category::find($id);
    }

    public function findBySlug(string $slug): ?Category
    {
        return Category::with('children')->where('slug', $slug)->first();
    }

    public function findParent(Category $category): ?Category
    {
        return $category->parent;
    }

    public function getSubcategories(Category $category)
    {
        return $category->children->where('is_active', true);
    }

    public function getForMenu(): Collection
    {
        return Category::select('id', 'name', 'parent_id', 'is_active', 'slug')
            ->with(['children' => function ($query) {
                $query->select('id', 'name', 'parent_id', 'is_active', 'slug');
            }])
            ->where('is_active', true)
            ->whereNull('parent_id')
            ->get();
    }

}
