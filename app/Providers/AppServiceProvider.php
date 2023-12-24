<?php

namespace App\Providers;

use Cart;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\Blogcategory;
use App\Models\CustomerProfile;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
            if(Auth::guard('customer')->check()){
                $view->with('wishlistCount',Wishlist::where('user_id', Auth::guard('customer')->user()->id)->count());
                $view->with('customerProfile',CustomerProfile::where('customer_id', Auth::guard('customer')->user()->id)->first());
            }

        });

        view::composer(['frontend.cart.cart','frontend.cart.checkout',] ,function($view){
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