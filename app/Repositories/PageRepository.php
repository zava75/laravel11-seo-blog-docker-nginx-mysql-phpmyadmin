<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Page;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class PageRepository
{

    public function all(): LengthAwarePaginator
    {

        return Page::select('id', 'name', 'slug', 'is_active', 'title', 'description','h1')->paginate(20);

    }

    public function create(array $data): ?Page
    {
        return Page::create($data);
    }

    public function update(array $data, int $id): int|bool
    {
        $user = Page::findOrFail($id);

        return $user->update($data);
    }

    public function delete(int $id): bool
    {
        $user = Page::findOrFail($id);

        return $user->delete();
    }

    public function find(int $id): ?Page
    {
        return Page::find($id);
    }

    public function findBySlug(string $slug): ?Page
    {
        return Page::query()->where('slug', $slug)->first();
    }

}
