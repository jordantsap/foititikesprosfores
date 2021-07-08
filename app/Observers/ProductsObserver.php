<?php

namespace App\Observers;

use App\Models\Product;
use Artisan;

class ProductsObserver
{
    /**
     * Handle the product "creating" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function creating(Product $product)
    {
        return $product->active = 1;
    }

    /**
     * Handle the product "updating" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        Artisan::call('cache:clear');
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
