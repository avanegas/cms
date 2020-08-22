<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);

        // Users
        $user = App\User::create([
            'name'       => 'Angel Vanegas',
            'email'      => 'avanepe@hotmail.com',
            'email_verified_at' => now(),
            'password'   => '$2y$10$dbymzN9zuLXmIY5f/c5NzuWIHDv//EcVU/AeqaexOHuY6uJeduNx2', //alvape14
            'remember_token' => Str::random(10)
        ]);
        //$user->roles()->attach($role_admin);
        //$profile = $user->profile()->save(factory(App\Profile::class)->make());
        //$profile->location()->save(factory(App\Location::class)->make());
        //$user->groups()->attach($this->array(rand(1,7)));
        $user->image()->save(factory(App\Image::class)->make([
            'url' => 'persona-00.jpeg'
        ]));

        $users = factory(App\User::class,9)->create();
        foreach($users as $user){
            //$user->assignRole('user');
            //$profile = $user->profile()->save(factory(App\Profile::class)->make());
            //$profile->location()->save(factory(App\Location::class)->make());
            //$user->groups()->attach($this->array(rand(1,7)));
            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'profile.png'
            ]));
        }

        // Categories
        factory(App\Category::class)->create(['name'  => 'Arquitectura', 'slug' => 'arquitectura']);
        factory(App\Category::class)->create(['name'  => 'Ingenieria', 'slug' => 'ingenieria']);
        factory(App\Category::class)->create(['name'  => 'Diseño arquitectónico', 'slug' => 'diseno-arquitectonico']);
        factory(App\Category::class)->create(['name'  => 'Diseño estructural', 'slug' => 'diseno-estructural']);
        factory(App\Category::class)->create(['name'  => 'Procesos constructivos', 'slug' => 'procesos-constructivos']);
        factory(App\Category::class)->create(['name'  => 'Biblioteca', 'slug' => 'biblioteca']);
        factory(App\Category::class)->create(['name'  => 'Materiales de construcción', 'slug' => 'materiales-de-construccion']);
        factory(App\Category::class)->create(['name'  => 'Diseño eléctrico y electrónico', 'slug' => 'diseño-electrico-y-electronico']);
        factory(App\Category::class)->create(['name'  => 'Materiales para acabados con Madera, Hierro y aluminio, etc.', 'slug' => 'materiales-para-acabados-de-madera-Hierro-y-aluminio']);
        factory(App\Category::class)->create(['name'  => 'Diseño hidráulico y sanitario', 'slug' => 'diseno-hidraulico-y-sanitario']);
        factory(App\Category::class)->create(['name'  => 'Material para acabados de pisos y paredes', 'slug' => 'material-para-acabados-de-pisos-y-paredes']);
        //factory(App\Models\Post\Category::class, 10)->create();

        // Tags
        factory(App\Tag::class)->create(['name'  => 'Arquitectura', 'slug' => 'arquitectura']);
        factory(App\Tag::class)->create(['name'  => 'Ingeniería', 'slug' => 'ingenieria']);
        factory(App\Tag::class)->create(['name'  => 'Costo', 'slug' => 'costo']);
        factory(App\Tag::class)->create(['name'  => 'Valor', 'slug' => 'valor']);
        factory(App\Tag::class)->create(['name'  => 'Diseño', 'slug' => 'diseno']);
        factory(App\Tag::class)->create(['name'  => 'Madera', 'slug' => 'madera']);
        factory(App\Tag::class)->create(['name'  => 'Acero de refuerzo', 'slug' => 'acer-de-refuerzo']);
        factory(App\Tag::class)->create(['name'  => 'Cemento', 'slug' => 'cemento']);
        factory(App\Tag::class)->create(['name'  => 'Hormigón', 'slug' => 'hormigon']);
        factory(App\Tag::class)->create(['name'  => 'Arena', 'slug' => 'arena']);
        factory(App\Tag::class)->create(['name'  => 'Grava', 'slug' => 'grava']);
        factory(App\Tag::class)->create(['name'  => 'Agua', 'slug' => 'agua']);
        factory(App\Tag::class)->create(['name'  => 'Mano de obra', 'slug' => 'mano-de-obra']);
        factory(App\Tag::class)->create(['name'  => 'Reajuste de precios', 'slug' => 'reajuste-de-precios']);
        factory(App\Tag::class)->create(['name'  => 'Hidráulico', 'slug' => 'hidraulico']);
        factory(App\Tag::class)->create(['name'  => 'Sanitario', 'slug' => 'sanitario']);
        factory(App\Tag::class)->create(['name'  => 'Mortero', 'slug' => 'mortero']);
        factory(App\Tag::class)->create(['name'  => 'Hierro', 'slug' => 'hierro']);
        factory(App\Tag::class)->create(['name'  => 'Suelda', 'slug' => 'suelda']);
        factory(App\Tag::class)->create(['name'  => 'Aluminio', 'slug' => 'aluminio']);
         //factory(App\Models\Post\Tag::class, 20)->create();

        //Posts
        factory(App\Post::class, 40)->create()->each(function ($post) {

            $post->image()->save(factory(App\Image::class)->make());
            $post->tags()->attach($this->array(rand(1,20)));

            $number_comments = rand(1, 6);

            for ($i = 0; $i < $number_comments; $i++) {
                $post->comments()->save(factory(App\Comment::class)->make());
            }

        });

    }

    public function array($max)
    {
        $values = [];
        for ($i=1; $i < $max; $i++) {
            $values[] = $i;
        }
        return $values;
    }
}
