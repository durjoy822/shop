<?php

namespace App\Providers;

use App\Models\Blogcategory;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        view::composer('*' ,function($view){
            $view->with('categories',Category::all());
            $view->with('blogCategories',Blogcategory::all());
        });

        view::composer(['frontend.cart.cart','frontend.cart.checkout'] ,function($view){
            $cartProducts=Cart::getContent();
            $sum=0;
            foreach($cartProducts as $cartProduct)
            {
                $sum = $sum + ($cartProduct->price * $cartProduct->quantity );
            }
                $taxTotal=$sum * .05 ;
                $shippingTotal= 100;
                $totalPayable= $sum + $taxTotal + $shippingTotal;

            $view->with('sum', $sum);
            $view->with('tax', $taxTotal);
            $view->with('shipping', $shippingTotal);
            $view->with('totalPayable', $totalPayable);
        });
    }
}