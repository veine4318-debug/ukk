<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\websites;
use App\Models\templates;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        user::create([
            'name' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        templates::create([
            'id_template' => 1,
            'nama_template' => 'model'
        ]);
        websites::create([
            'id_website' => 1,
            'id_template'=> 1,
            'nama_website' => 'model',
            'bio' => 'dila',
            'slug' => 'model',
            'logo' => 'image.png'

        ]);
        
    }
}
