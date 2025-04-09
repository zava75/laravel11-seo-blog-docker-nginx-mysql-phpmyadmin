<?php

declare(strict_types=1);

namespace App\Repositories\Interface;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CategoryRepositoryInterface
{
    public function all(): LengthAwarePaginator;

    public function create(array $data): ?Category;

    public function update(array $data, int $id): int;

    public function delete(int $id): bool;

    public function find(int $id): ?Category;

    public function findBySlug(string $slug): ?Category;

    public function findParent(Category $category): ?Category;

    public function getSubcategories(Category $category);

}
