<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Nur Aini',
            'username' => 'nuraini',
            'email' => 'nuraini@gmail.com',
            'password' => bcrypt('password')
        ]);

       // User::create([
         //   'name' => 'Kartika',
           // 'email' => 'kartika@gmail.com',
            //'password' => bcrypt('12345')
        //]);

        User::factory(3)->create();

       Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();
        
    
    }   
}
