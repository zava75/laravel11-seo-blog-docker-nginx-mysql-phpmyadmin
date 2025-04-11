<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class PageService
{

    protected PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function all(): LengthAwarePaginator
    {
        return $this->pageRepository->all();
    }

    public function create(array $data): Page
    {
        // Можно добавить валидацию данных, если нужно
        return $this->pageRepository->create($data);
    }

    public function update(int $id, array $data): Page
    {
        $category = $this->pageRepository->find($id);
        $category->update($data);

        return $category;
    }

    public function delete(int $id): bool
    {
        $category = $this->pageRepository->find($id);
        return $category->delete();
    }

    public function findById(int $id): ?Page
    {
        return $this->pageRepository->find($id);
    }

    public function findBySlug(string $slug): ?Page
    {
        return $this->pageRepository->findBySlug($slug);
    }
}
