<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create(
            [
                'name' => 'Prueba',
                'email' => 'prueba@gmail.com',
                'password' => bcrypt('prueba@gmail.com')
            ],
        );

        User::factory()->create(
            [
                'name' => 'Maykeling González',
                'email' => 'maykeling@gmail.com',
                'password' => bcrypt('maykeling@gmail.com')
            ],
        );

        User::factory()->create(
            [
                'name' => 'Maicol Estrada',
                'email' => 'maicol@gmail.com',
                'password' => bcrypt('maicol@gmail.com')
            ],
        );

        $this->call([
            SupplierSeeder::class,
        ]);

        $this->call([
            TypeMovementSeeder::class,
        ]);

        $this->call([
            MeasureUnitSeeder::class,
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        $this->call([
            ProductSeeder::class,
        ]);

        $this->call([
            MovementSeeder::class,
        ]);

        $this->call([
            ResponsibleSeeder::class,
        ]);

        $this->call([
            WarehouseSeeder::class,
        ]);

        $this->call([
            InventorySeeder::class,
        ]);

        // Category::factory(7)->create();
        // Post::factory(20)->create();
        // Animal::factory(5)->create();
    }
}
