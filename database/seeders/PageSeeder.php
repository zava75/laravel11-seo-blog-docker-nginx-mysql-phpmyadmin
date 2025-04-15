<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {

        Page::create([
            'name' => 'Home Blog Laravel',
            'slug' => 'home',
            'title' => 'Welcome to Home Blog Laravel - Your Ultimate Source for Laravel Insights',
            'h1' => 'Home Blog Laravel - Stay Updated with the Latest Laravel Tips and Tutorials',
            'description' => 'Home Blog Laravel is your go-to platform for all things Laravel. Explore tutorials, tips, and articles to help you build better applications using Laravel. Stay updated with the latest Laravel news and resources.',
            'article' => 'Welcome to Home Blog Laravel! Here, we offer a comprehensive collection of articles and tutorials that cover everything from beginner concepts to advanced Laravel techniques. Whether you are new to Laravel or a seasoned developer, you’ll find valuable insights that can help you enhance your Laravel applications. From step-by-step guides to expert tips, Home Blog Laravel has it all. Join our community and learn Laravel with us!',
            'is_active' => true,
        ]);

        Page::factory(10)->create();
    }
}
