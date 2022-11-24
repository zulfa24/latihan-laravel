<?php

namespace Database\Seeders;

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
        

        //User::create([
        //    'name' => 'Nurul Atika Zulfa',
        //    'email' => 'sepath2411@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

        //User::create([
        //    'name' => 'Annetha Xevian Nayara',
        //    'email' => 'annethaxevian@gmail.com',
        //    'password' => bcrypt('12345')
        //]);

         User::factory(3)->create();

         Category::create([
             'name' => 'Web Programming',
             'slug' => 'web-programming'
         ]);

         Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
         ]);

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        Post::factory(20)->create();

        //Post::create([
        //    'title' => 'Judul pertama',
        //    'slug' => 'judul-pertama',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //    Aperiam amet, quo facilis ipsam esse officiis sequi qui perspiciatis
        //    eius alias vero ipsum aliquam optio est, voluptatem fugiat repudiandae harum quisquam.</p>
        //    <p>Odio cum sed quisquam, aut sunt labore aspernatur consequatur quia soluta sit magni,
        //    vitae, debitis optio. In ex dolorem labore. Possimus ullam voluptatum perferendis 
        //     fugiat dolorum corrupti ut exercitationem voluptatem accusamus explicabo ea consectetur
        //     illo, iste facilis inventore cum delectus incidunt nesciunt voluptas cupiditate minima?</p>
        //     <p>Assumenda placeat inventore impedit rerum? Non hic saepe, quam perspiciatis culpa 
        //     asperiores quas, soluta adipisci quae architecto voluptate nulla animi voluptas
        //     accusamus iure temporibus ducimus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Aperiam amet, quo facilis ipsam esse officiis sequi qui perspiciatis
        //     eius alias vero ipsum aliquam optio est, voluptatem fugiat repudiandae harum quisquam.</p>
        //     <p>Odio cum sed quisquam, aut sunt labore aspernatur consequatur quia soluta sit magni,
        //     vitae, debitis optio. In ex dolorem labore. Possimus ullam voluptatum perferendis 
        //     fugiat dolorum corrupti ut exercitationem voluptatem accusamus explicabo ea consectetur
        //     illo, iste facilis inventore cum delectus incidunt nesciunt voluptas cupiditate minima?</p>
        //     <p>Assumenda placeat inventore impedit rerum? Non hic saepe, quam perspiciatis culpa 
        //     asperiores quas, soluta adipisci quae architecto voluptate nulla animi voluptas
        //     accusamus iure temporibus ducimus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Aperiam amet, quo facilis ipsam esse officiis sequi qui perspiciatis
        //     eius alias vero ipsum aliquam optio est, voluptatem fugiat repudiandae harum quisquam.</p>
        //     <p>Odio cum sed quisquam, aut sunt labore aspernatur consequatur quia soluta sit magni,
        //     vitae, debitis optio. In ex dolorem labore. Possimus ullam voluptatum perferendis 
        //     fugiat dolorum corrupti ut exercitationem voluptatem accusamus explicabo ea consectetur
        //     illo, iste facilis inventore cum delectus incidunt nesciunt voluptas cupiditate minima?</p>
        //     <p>Assumenda placeat inventore impedit rerum? Non hic saepe, quam perspiciatis culpa 
        //     asperiores quas, soluta adipisci quae architecto voluptate nulla animi voluptas
        //     accusamus iure temporibus ducimus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]); 
   
    }
}
 