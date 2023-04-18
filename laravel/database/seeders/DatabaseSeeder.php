<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;
use App\Models\Project;
use App\Models\ProjectsCategory;
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
            'content' => 'home page',
            'slug' => '/'
        ]);

        Page::create([
            'title' => 'TheBox Company | About Us',
            'content' => 'about us page',
            'slug' => 'about'
        ]);

        Page::create([
            'title' => 'TheBox Company | Projects',
            'content' => 'projects page',
            'slug' => 'projects'
        ]);

        Page::create([
            'title' => 'TheBox Company | Services',
            'content' => 'services',
            'slug' => 'services'
        ]);

        Page::create([
            'title' => 'TheBox Company | Contacts',
            'content' => 'contacts text',
            'slug' => 'contacts'
        ]);
        // end page

        // projects category
        ProjectsCategory::create([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential'
        ]);

        ProjectsCategory::create([
            'title' => 'Commercial',
            'content' => 'commercial text',
            'slug' => 'commercial'
        ]);

        ProjectsCategory::create([
            'title' => 'Industrial',
            'content' => 'industrial text',
            'slug' => 'industrial'
        ]);

        ProjectsCategory::create([
            'title' => 'Infrastructure',
            'content' => 'infrastructure text',
            'slug' => 'infrastructure'
        ]);

        ProjectsCategory::create([
            'title' => 'Agricultural',
            'content' => 'agricultural text',
            'slug' => 'agricultural'
        ]);

        ProjectsCategory::create([
            'title' => 'Institutional',
            'content' => 'institutional text',
            'slug' => 'institutional'
        ]);

        ProjectsCategory::create([
            'title' => 'Residential',
            'content' => 'residential text',
            'slug' => 'residential'
        ]);
        // end projects category

        // project
        Project::create([
            'title' => 'Wildstone Infra Hotel',
            'address' => '2715 Ash Dr. San Jose, South Dakota',
            'content' => 'project 1 content',
            'slug' => 'wildstone-infra-hotel',
            'category_id' => 1
        ]);

        Project::create([
            'title' => 'Wish Stone Building',
            'address' => '2972 Westheimer Rd. Santa Ana, Illinois',
            'content' => 'project 2 content',
            'slug' => 'wish-stone-building',
            'category_id' => 1
        ]);

        Project::create([
            'title' => 'Mr. Parkinston\'s House',
            'address' => '3517 W. Gray St. Utica, Pennsylvania',
            'content' => 'project 3 content',
            'slug' => 'mr-parkinstons-house',
            'category_id' => 2
        ]);

        Project::create([
            'title' => 'Oregano Height',
            'address' => '2464 Royal Ln. Mesa, New Jersey ',
            'content' => 'project 4 content',
            'slug' => 'oregano-height',
            'category_id' => 3
        ]);
        // end project

        // service
        Service::create([
            'title' => 'Construction',
            'content' => 'service construction',
            'slug' => 'construction'
        ]);

        Service::create([
            'title' => 'Renovation',
            'content' => 'service renovation',
            'slug' => 'renovation'
        ]);

        Service::create([
            'title' => 'Consultation',
            'content' => 'service consultation',
            'slug' => 'consultation'
        ]);

        Service::create([
            'title' => 'Repair Services',
            'content' => 'service repair-services',
            'slug' => 'repair-services'
        ]);

        Service::create([
            'title' => 'Architecture',
            'content' => 'service architecture',
            'slug' => 'architecture'
        ]);

        Service::create([
            'title' => 'Electric',
            'content' => 'service electric',
            'slug' => 'electric'
        ]);
        // end service
    }
}
