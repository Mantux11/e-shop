<?php

namespace App\Providers;

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return
     */
    public function boot()
    {
        $categories = CategoryController::categoryTree();
        view()->share('ParentCategories',$categories);
//        $ParentCategories = \App\Models\Category::where('parent_id',0)->get();
//        view()->share('ParentCategories',$ParentCategories);

        $product_list = \App\Models\Product::all();
        return view('home', compact('product_list'));

    }
}
