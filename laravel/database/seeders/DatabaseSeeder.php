<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // pages
        DB::table('pages')->insert([
            'title' => 'TheBox Company | Home',
            'content' => 'home page',
            'slug' => '/'
        ]);

        DB::table('pages')->insert([
            'title' => 'TheBox Company | About Us',
            'content' => 'about us page',
            'slug' => 'about'
        ]);

        DB::table('pages')->insert([
            'title' => 'TheBox Company | Projects',
            'content' => 'projects page',
            'slug' => 'projects'
        ]);

        DB::table('pages')->insert([
            'title' => 'TheBox Company | Services',
            'content' => 'services',
            'slug' => 'services'
        ]);

        DB::table('pages')->insert([
            'title' => 'TheBox Company | Contacts',
            'content' => 'contacts text',
            'slug' => 'contacts'
        ]);
        // end pages

        // projects category
        DB::table('projects_categories')->insert([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Commercial',
            'content' => 'commercial text',
            'slug' => 'commercial'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Industrial',
            'content' => 'industrial text',
            'slug' => 'industrial'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Infrastructure',
            'content' => 'infrastructure text',
            'slug' => 'infrastructure'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Agricultural',
            'content' => 'agricultural text',
            'slug' => 'agricultural'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Institutional',
            'content' => 'institutional text',
            'slug' => 'institutional'
        ]);

        DB::table('projects_categories')->insert([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential'
        ]);
        // end projects category

        // project
        DB::table('projects')->insert([
            'title' => 'Wildstone Infra Hotel',
            'address' => '2715 Ash Dr. San Jose, South Dakota',
            'image' => "1.jpg",
            'content' => 'project 1 content',
            'slug' => 'wildstone-infra-hotel',
            'category_id' => 1
        ]);

        DB::table('projects')->insert([
            'title' => 'Wish Stone Building',
            'address' => '2972 Westheimer Rd. Santa Ana, Illinois',
            'image' => "2.jpg",
            'content' => 'project 2 content',
            'slug' => 'wish-stone-building',
            'category_id' => 1
        ]);

        DB::table('projects')->insert([
            'title' => 'Mr. Parkinston\'s House',
            'address' => '3517 W. Gray St. Utica, Pennsylvania',
            'image' => "3.jpg",
            'content' => 'project 3 content',
            'slug' => 'mr-parkinstons-house',
            'category_id' => 2
        ]);

        DB::table('projects')->insert([
            'title' => 'Oregano Height',
            'address' => '2464 Royal Ln. Mesa, New Jersey ',
            'image' => "4.jpg",
            'content' => 'project 4 content',
            'slug' => 'oregano-height',
            'category_id' => 3
        ]);
        // end project

        // service
        DB::table('services')->insert([
            'title' => 'Construction',
            'content' => 'service construction',
            'slug' => 'construction'
        ]);

        DB::table('services')->insert([
            'title' => 'Renovation',
            'content' => 'service renovation',
            'slug' => 'renovation'
        ]);

        DB::table('services')->insert([
            'title' => 'Consultation',
            'content' => 'service consultation',
            'slug' => 'consultation'
        ]);

        DB::table('services')->insert([
            'title' => 'Repair Services',
            'content' => 'service repair-services',
            'slug' => 'repair-services'
        ]);

        DB::table('services')->insert([
            'title' => 'Architecture',
            'content' => 'service architecture',
            'slug' => 'architecture'
        ]);

        DB::table('services')->insert([
            'title' => 'Electric',
            'content' => 'service electric',
            'slug' => 'electric'
        ]);
        // end service

    }
}
