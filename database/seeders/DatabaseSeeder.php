<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Band;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    // User::factory(10)->create();

    //     Listing::create([
    //         'title' => 'Laravel Senior Developer',
    //         'tags' => 'laravel, javascript',
    //         'company' => 'Acme Corp',
    //         'location' => 'Boston, MA',
    //         'email' => 'email1@email.com',
    //         'website' => 'https://www.acme.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);

    //     Listing::create([
    //         'title' => 'Full-Stack Engineer',
    //         'tags' => 'laravel, backend ,api',
    //         'company' => 'Stark Industries',
    //         'location' => 'New York, NY',
    //         'email' => 'email2@email.com',
    //         'website' => 'https://www.starkindustries.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);

    //     Listing::create([
    //         'title' => 'Laravel Developer',
    //         'tags' => 'laravel, vue, javascript',
    //         'company' => 'Wayne Enterprises',
    //         'location' => 'Gotham, NY',
    //         'email' => 'email3@email.com',
    //         'website' => 'https://www.wayneenterprises.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);

    //     Listing::create([
    //         'title' => 'Backend Developer',
    //         'tags' => 'laravel, php, api',
    //         'company' => 'Skynet Systems',
    //         'location' => 'Newark, NJ',
    //         'email' => 'email4@email.com',
    //         'website' => 'https://www.skynet.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);

    //     Listing::create([
    //         'title' => 'Junior Developer',
    //         'tags' => 'laravel, php, javascript',
    //         'company' => 'Wonka Industries',
    //         'location' => 'Boston, MA',
    //         'email' => 'email4@email.com',
    //         'website' => 'https://www.wonka.com',
    //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
    //     ]);
    // }


    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'EndlessPain',
            'email' => 'endlesspain@email.com',
        ]);

        Band::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Band::create([
        //     'name' => 'Testament',
        //     'ticket' => '30€',
        //     'location' => 'Milano, IT',
        //     'email' => 'testament@email.com',
        //     'website' => 'https://www.testament.com',
        //     'tags' => 'Thrash Metal, Groove Metal',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Band::create([
        //     'name' => 'Dark Tranquillity',
        //     'ticket' => '20€',
        //     'location' => 'Helsinki, FI',
        //     'email' => 'darktranquillity@email.com',
        //     'website' => 'https://www.darktranquillity.com',
        //     'tags' => 'Melodic Death Metal, Gothic Metal',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Band::create([
        //     'name' => 'Mastodon',
        //     'ticket' => '20€',
        //     'location' => 'Boston, MA',
        //     'email' => 'mastodon@email.com',
        //     'website' => 'https://www.mastodon.com',
        //     'tags' => 'Alternative Metal, Sludge Metal',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Band::create([
        //     'name' => 'Opeth',
        //     'ticket' => '30€',
        //     'location' => 'Monaco, GE',
        //     'email' => 'opeth@email.com',
        //     'website' => 'https://www.opeth.com',
        //     'tags' => 'Progressive Metal, Death Metal',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Band::create([
        //     'name' => 'Megadeth',
        //     'ticket' => '40€',
        //     'location' => 'Tokyo, JA',
        //     'email' => 'megadeth@email.com',
        //     'website' => 'https://www.megadeth.com',
        //     'tags' => 'Thrash Metal, Speed Metal',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);
    }
}