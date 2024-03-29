<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    use HasFactory;

    public static function getBySlug(string $slug)
    {
        $page = DB::table('pages')
            ->select('title', 'content')
            ->where('slug', $slug)
            ->first();

        return $page;
    }

    public static function getServiceBySlug(string $slug)
    {
        $page = DB::table('services')
            ->select('title', 'content')
            ->where('slug', $slug)
            ->first();

        return $page;
    }
}
