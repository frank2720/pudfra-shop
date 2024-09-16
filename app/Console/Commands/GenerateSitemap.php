<?php

namespace App\Console\Commands;

use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();
        $sitemap->add('/');
        $sitemap->add('/shop');
        $sitemap->add('/login');
        $sitemap->add('/register');
        $sitemap->add('/about-us');

        $products = Product::all();

        foreach ($products as $product) {
            $sitemap->add("/product-details_{$product->id}");
        }
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
