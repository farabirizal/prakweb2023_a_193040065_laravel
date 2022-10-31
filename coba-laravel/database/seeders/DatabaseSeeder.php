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

        // User::create([
        //     'name' => 'Rizal Muhammad Farabi',
        //     'email' => 'farabirizal111@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'rizalfarabi',
        //     'email' => 'rizalfarabi15@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web progamming',
            'slug' => 'web-progamming'

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





//         Post::create([
//             'title' => 'Judul Pertama',
//             'slug' => 'judul-pertama',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, possimus sit voluptatibus omnis culpa quas quisquam nam hic blanditiis nemo expedita quasi modi sint perferendis vero? Inventore id dolor asperiores.',
//             'body' => 'Ipsam doloremque fugit veritatis perspiciatis, in molestias aliquam dolorem id unde, ullam, velit harum autem eos provident optio maxime a dolores minima asperiores! Aperiam blanditiis, ab nobis ipsam magni voluptatum labore maiores dolorum porro nesciunt, eos odio deserunt similique. Dolores corporis dolore quae dignissimos quidem nisi minus voluptates optio dolor labore, perspiciatis odio. Tempora autem distinctio qui repudiandae iusto error enim animi, assumenda inventore commodi quidem libero aliquid, ullam consequatur ex vitae doloribus nam ratione sit deserunt minus! Dicta blanditiis, fuga dolore qui beatae praesentium dignissimos fugit consequatur incidunt eum quasi quod consequuntur corrupti nesciunt nam a veritatis? Excepturi fugiat illo, reiciendis explicabo ad praesentium beatae alias id! Accusamus facere, error cumque incidunt nobis minus, praesentium quisquam fugiat odio laborum aliquid deserunt iure dolorem qui iusto sapiente blanditiis sit rem. Nostrum perferendis assumenda at esse impedit asperiores numquam eligendi in pariatur cumque.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul kedua',
//             'slug' => 'judul-kedua',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, possimus sit voluptatibus omnis culpa quas quisquam nam hic blanditiis nemo expedita quasi modi sint perferendis vero? Inventore id dolor asperiores.',
//             'body' => 'Ipsam doloremque fugit veritatis perspiciatis, in molestias aliquam dolorem id unde, ullam, velit harum autem eos provident optio maxime a dolores minima asperiores! Aperiam blanditiis, ab nobis ipsam magni voluptatum labore maiores dolorum porro nesciunt, eos odio deserunt similique. Dolores corporis dolore quae dignissimos quidem nisi minus voluptates optio dolor labore, perspiciatis odio. Tempora autem distinctio qui repudiandae iusto error enim animi, assumenda inventore commodi quidem libero aliquid, ullam consequatur ex vitae doloribus nam ratione sit deserunt minus! Dicta blanditiis, fuga dolore qui beatae praesentium dignissimos fugit consequatur incidunt eum quasi quod consequuntur corrupti nesciunt nam a veritatis? Excepturi fugiat illo, reiciendis explicabo ad praesentium beatae alias id! Accusamus facere, error cumque incidunt nobis minus, praesentium quisquam fugiat odio laborum aliquid deserunt iure dolorem qui iusto sapiente blanditiis sit rem. Nostrum perferendis assumenda at esse impedit asperiores numquam eligendi in pariatur cumque.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul ketiga',
//             'slug' => 'judul-ketiga',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, possimus sit voluptatibus omnis culpa quas quisquam nam hic blanditiis nemo expedita quasi modi sint perferendis vero? Inventore id dolor asperiores.',
//             'body' => 'Ipsam doloremque fugit veritatis perspiciatis, in molestias aliquam dolorem id unde, ullam, velit harum autem eos provident optio maxime a dolores minima asperiores! Aperiam blanditiis, ab nobis ipsam magni voluptatum labore maiores dolorum porro nesciunt, eos odio deserunt similique. Dolores corporis dolore quae dignissimos quidem nisi minus voluptates optio dolor labore, perspiciatis odio. Tempora autem distinctio qui repudiandae iusto error enim animi, assumenda inventore commodi quidem libero aliquid, ullam consequatur ex vitae doloribus nam ratione sit deserunt minus! Dicta blanditiis, fuga dolore qui beatae praesentium dignissimos fugit consequatur incidunt eum quasi quod consequuntur corrupti nesciunt nam a veritatis? Excepturi fugiat illo, reiciendis explicabo ad praesentium beatae alias id! Accusamus facere, error cumque incidunt nobis minus, praesentium quisquam fugiat odio laborum aliquid deserunt iure dolorem qui iusto sapiente blanditiis sit rem. Nostrum perferendis assumenda at esse impedit asperiores numquam eligendi in pariatur cumque.',
//             'category_id' => 2,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul keempat',
//             'slug' => 'judul-keempat',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, possimus sit voluptatibus omnis culpa quas quisquam nam hic blanditiis nemo expedita quasi modi sint perferendis vero? Inventore id dolor asperiores.',
//             'body' => 'Ipsam doloremque fugit veritatis perspiciatis, in molestias aliquam dolorem id unde, ullam, velit harum autem eos provident optio maxime a dolores minima asperiores! Aperiam blanditiis, ab nobis ipsam magni voluptatum labore maiores dolorum porro nesciunt, eos odio deserunt similique. Dolores corporis dolore quae dignissimos quidem nisi minus voluptates optio dolor labore, perspiciatis odio. Tempora autem distinctio qui repudiandae iusto error enim animi, assumenda inventore commodi quidem libero aliquid, ullam consequatur ex vitae doloribus nam ratione sit deserunt minus! Dicta blanditiis, fuga dolore qui beatae praesentium dignissimos fugit consequatur incidunt eum quasi quod consequuntur corrupti nesciunt nam a veritatis? Excepturi fugiat illo, reiciendis explicabo ad praesentium beatae alias id! Accusamus facere, error cumque incidunt nobis minus, praesentium quisquam fugiat odio laborum aliquid deserunt iure dolorem qui iusto sapiente blanditiis sit rem. Nostrum perferendis assumenda at esse impedit asperiores numquam eligendi in pariatur cumque.',
//             'category_id' => 2,
//             'user_id' => 2
//         ]);



     }
}