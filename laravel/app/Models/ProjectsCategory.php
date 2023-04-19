<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProjectsCategory extends Model
{
    use HasFactory;

    public static function getBySlug(string $slug)
    {
        $page = DB::table('projects_categories')
            ->select('title', 'content')
            ->where('slug', $slug)
            ->first();

        return $page;
    }

    public static function getProjectsByCategory(string $category)
    {
        $projects = DB::table('projects as p')
            ->select(
                'p.image',
                'p.title as projectTitle',
                'p.address as projectAddress',
                'p.slug as projectSlug',
                'pc.slug as projectCategorySlug'
            )
            ->join('projects_categories as pc', 'pc.id', '=', 'p.category_id')
            ->where('pc.slug', '=', $category)
            ->get();

        return $projects;
    }
}
