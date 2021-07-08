<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use App\Permission; //Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Run the cache:clear if u change anything.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        app()['cache']->forget('spatie.permission.cache');

        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SubTypeSeeder::class);
        $this->call(ArticleTypeSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(ColorSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BrandSeeder::class);
    }
}
