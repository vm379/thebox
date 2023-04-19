<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    public static function getBySlug(string $slug)
    {
        $page = DB::table('pages')
            ->select('title')
            ->where('slug', $slug)
            ->first();

        return $page;
    }

    public static function getProjectBySlug(string $category, string $slug)
    {
        $page = DB::table('projects as p')
            ->select(
                'p.image',
                'p.title as projectTitle',
                'p.address as projectAddress',
                'p.content as projectContent'
            )
            ->join('projects_categories as pc', 'p.category_id', '=', 'pc.id')
            ->where('p.slug', '=', $slug, 'AND', 'pc.slug', '=', $category)
            ->get();

        return $page[0];
    }
}
