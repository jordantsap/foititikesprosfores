<?php

namespace App\Observers;

use Illuminate\Support\Facades\Artisan;

class CategoriesObserver
{
    /**
     * Clear cache when updated
     *
     * @return void
     */
    public function updated()
    {
        Artisan::call('cache:clear');
    }
}
