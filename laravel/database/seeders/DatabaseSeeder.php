<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

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

        // page
        Page::create([
            'title' => 'TheBox Company | Home',
            'content' => 'homepage text',
            'slug' => '/'
        ]);

        Page::create([
            'title' => 'TheBox Company | About Us',
            'content' => 'about company text',
            'slug' => 'about'
        ]);

        Page::create([
            'title' => 'TheBox Company | Contacts',
            'content' => 'contacts text',
            'slug' => 'contacts'
        ]);
        // end page

        // category
        Category::create([
            'title' => 'TheBox Company | Projects',
            'content' => 'projects text',
            'slug' => 'projects'
        ]);

        Category::create([
            'title' => 'TheBox Company | Services',
            'content' => 'services text',
            'slug' => 'services'
        ]);
        // end category

        // sub-category
        SubCategory::create([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Commercial',
            'content' => 'commercial text',
            'slug' => 'commercial',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Industrial',
            'content' => 'industrial text',
            'slug' => 'industrial',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Infrastructure',
            'content' => 'infrastructure text',
            'slug' => 'infrastructure',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Agricultural',
            'content' => 'agricultural text',
            'slug' => 'agricultural',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Institutional',
            'content' => 'institutional text',
            'slug' => 'institutional',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential',
            'category_id' => 1
        ]);

        SubCategory::create([
            'title' => 'Construction',
            'content' => 'construction text',
            'slug' => 'construction',
            'category_id' => 2
        ]);

        SubCategory::create([
            'title' => 'Renovation',
            'content' => 'renovation text',
            'slug' => 'renovation',
            'category_id' => 2
        ]);

        SubCategory::create([
            'title' => 'Consultation',
            'content' => 'consultation text',
            'slug' => 'consultation',
            'category_id' => 2
        ]);

        SubCategory::create([
            'title' => 'Repair Services',
            'content' => 'repair services text',
            'slug' => 'repair-services',
            'category_id' => 2
        ]);

        SubCategory::create([
            'title' => 'Architecture',
            'content' => 'architecture text',
            'slug' => 'architecture',
            'category_id' => 2
        ]);

        SubCategory::create([
            'title' => 'Electric',
            'content' => 'electric text',
            'slug' => 'electric',
            'category_id' => 2
        ]);
        // end sub-category

        // project
        Project::create([
            'title' => 'Wildstone Infra Hotel',
            'address' => '2715 Ash Dr. San Jose, South Dakota',
            'content' => 'project 1 content',
            'slug' => 'wildstone-infra-hotel',
            'sub-category_id' => 1
        ]);

        Project::create([
            'title' => 'Wish Stone Building',
            'address' => '2972 Westheimer Rd. Santa Ana, Illinois',
            'content' => 'project 2 content',
            'slug' => 'wish-stone-building',
            'sub-category_id' => 1
        ]);

        Project::create([
            'title' => 'Mr. Parkinston\'s House',
            'address' => '3517 W. Gray St. Utica, Pennsylvania',
            'content' => 'project 3 content',
            'slug' => 'mr-parkinstons-house',
            'sub-category_id' => 2
        ]);

        Project::create([
            'title' => 'Oregano Height',
            'address' => '2464 Royal Ln. Mesa, New Jersey ',
            'content' => 'project 4 content',
            'slug' => 'oregano-height',
            'sub-category_id' => 3
        ]);
        // end project

        // service
        Service::create([
            'title' => 'Construction',
            'content' => 'service 1 content',
            'slug' => 'construction',
            'sub-category_id' => 1
        ]);

        Service::create([
            'title' => 'Renovation',
            'content' => 'service 2 content',
            'slug' => 'renovation',
            'sub-category_id' => 2
        ]);

        Service::create([
            'title' => 'Consultation',
            'content' => 'service 3 content',
            'slug' => 'consultation',
            'sub-category_id' => 3
        ]);

        Service::create([
            'title' => 'Repair Services',
            'content' => 'service 4 content',
            'slug' => 'repair-services',
            'sub-category_id' => 4
        ]);

        Service::create([
            'title' => 'Architecture',
            'content' => 'service 5 content',
            'slug' => 'architecture',
            'sub-category_id' => 5
        ]);

        Service::create([
            'title' => 'Electric',
            'content' => 'service 6 content',
            'slug' => 'electric',
            'sub-category_id' => 6
        ]);
        // end service
    }
}
